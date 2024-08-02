<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class UserController extends Controller
{
    public function showProfile()
    {
        $user = Auth::user();
        $orders = Order::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();
        return view('client.user.profile', compact('user', 'orders'));
    }

    public function showOrder($id)
    {
        $order = Order::with('orderItems')->findOrFail($id);
        return view('client.user.order-detail', compact('order'));
    }

    public function cancelOrder($id)
    {
        $order = Order::findOrFail($id);

        // Kiểm tra nếu đơn hàng có thể hủy (trạng thái khác 'canceled' và không phải là trạng thái đã giao hàng)
        if ($order->status_order !== 'canceled' && $order->status_order !== 'delivered') {
            $order->status_order = 'canceled';
            $order->save();
            return redirect()->route('user.profile')->with('success', 'Đơn hàng đã được hủy thành công!');
        }

        return redirect()->route('user.profile')->with('error', 'Không thể hủy đơn hàng này.');
    }
}
