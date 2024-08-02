<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('orderItems')->orderBy('created_at', 'desc')->get();
        return view('admin.orders.index', compact('orders'));
    }

    public function show($id)
    {
        $order = Order::with('orderItems')->findOrFail($id);
        return view('admin.orders.show', compact('order'));
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status_order' => 'required|string|in:pending,confirmed,preparing_goods,shipping,delivered,canceled',
        ]);
    
        $order = Order::findOrFail($id);
        $currentStatus = $order->status_order;
        $newStatus = $request->input('status_order');
    
        // TRANG THAI CHUYEN TIEP HOP LE
        $validTransitions = [
            'pending' => ['confirmed', 'preparing_goods', 'shipping', 'delivered', 'canceled'],
            'confirmed' => ['preparing_goods', 'shipping', 'delivered', 'canceled'],
            'preparing_goods' => ['shipping', 'delivered', 'canceled'],
            'shipping' => ['delivered', 'canceled'],
            'delivered' => [],
            'canceled' => [],
        ];
    
        // KIEM TRA TRANG THAI HOP LE, K QUAY LAI TRANG THAI TRUOC
        if ($currentStatus !== 'canceled' && in_array($newStatus, $validTransitions[$currentStatus])) {
            $order->status_order = $newStatus;
            $order->save();
            return redirect()->route('admin.orders.index')->with('success', 'Trạng thái đơn hàng đã được cập nhật thành công!');
        }
    
        return redirect()->route('admin.orders.index')->with('error', 'Không thể thay đổi trạng thái đơn hàng theo thứ tự này.');
    }   
}
