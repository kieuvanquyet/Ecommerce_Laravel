<?php

namespace App\Http\Controllers\Admin;

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceController extends Controller
{
    public function index()
    {
        $orders = Order::with('orderItems')->orderBy('created_at', 'desc')->get();
        return view('admin.invoices.index', compact('orders'));
    }

    public function show($orderId)
    {
        $order = Order::with('orderItems')->findOrFail($orderId);
        return view('admin.invoices.show', compact('order'));
    }

    // IN
    public function print($orderId)
    {
        $order = Order::with('orderItems')->findOrFail($orderId);
        $pdf = Pdf::loadView('admin.invoices.print', compact('order'));

        return $pdf->download('invoice-' . $orderId . '.pdf');
    }
}
