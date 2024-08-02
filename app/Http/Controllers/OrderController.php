<?php

namespace App\Http\Controllers;

use App\Mail\OrderInvoice;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Promotion; // Đảm bảo đã import Promotion model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::whereHas('user', function ($query) {
            $query->where('type', 'member');
        })->get();

        return view('admin.orders.index', compact('orders'));
    }

    public function save(Request $request)
    {
        // dd($request->all());
        // LAY SAN PHAM DUOC CHON TU GIO HANG
        $selectedItems = explode(',', $request->input('selected_items'));

        if (empty($selectedItems)) {
            return redirect()->back()->with('error', 'No items selected for checkout.');
        }

        // LAY GIO HANG CUA NGUOI DUNG HIEN TAI
        $cart = Cart::where('user_id', auth()->id())->first();

        // KIEM TRA TON TAI CUA GIO HANG
        if (!$cart) {
            return redirect()->back()->with('error', 'Cart not found.');
        }

        // LAY SAN PHAM TRONG GIO HANG VA LOC THEO SP DA CHON
        $selectedCartItems = $cart->items()->whereIn('id', $selectedItems)->get();

        // TONG TIEN CUA SAN PHAM DA CHON
        $totalPrice = 0;
        foreach ($selectedCartItems as $item) {
            $itemPrice = $item->productVariant->product->price_sale ?: $item->productVariant->product->price_regular;
            $totalPrice += $itemPrice * $item->quatity;
        }

        // XU LY MA GIAM GIA NEU CO
        $discount = 0;
        if ($request->filled('discount_code')) {
            $promotion = Promotion::where('name', $request->discount_code)
                ->where('start_date', '<=', now())
                ->where('end_date', '>=', now())
                ->first();

            if ($promotion) {
                if ($promotion->discount_type === 'percentage') {
                    $discount = ($totalPrice * $promotion->discount_value) / 100;
                } elseif ($promotion->discount_type === 'amount') {
                    $discount = $promotion->discount_value;
                }
            }
        }

        // LAY PHUONG THUC THANH TOAN
        $paymentMethod = $request->input('payment_method');

        // TINH GIA KHI MA GIAM DUOC AP DUNG
        $finalPrice = $totalPrice - $discount;

        // LAY THONG TIN USER HIEN TAI
        $user = auth()->user();

        // TRA DU LIEU VE VIEW
        return view('client.checkout', [
            'cartItems' => $selectedCartItems,
            'totalPrice' => $totalPrice,
            'finalPrice' => $finalPrice,
            'discount' => $discount,
            'user' => $user,
            'selectedItems' => $selectedItems,
            'paymentMethod' => $paymentMethod
        ]);
    }




    public function store(Request $request)
    {
        // Validate input data
        $request->validate([
            'payment_method' => 'required|string',
            'name' => 'required|string',
            'email' => 'required|email',
            'address' => 'required|string',
            'phone' => 'required|string',
            'final_price' => 'required|numeric',
        ]);

        // Create a new order
        $order = new Order();
        $order->user_id = auth()->id();
        $order->user_name = $request->input('name');
        $order->user_email = $request->input('email');
        $order->user_phone = $request->input('phone');
        $order->user_address = $request->input('address');
        $order->is_ship_user_same_user = $request->input('is_ship_user_same_user', 1);
        $order->ship_user_name = $request->input('ship_user_name');
        $order->ship_user_email = $request->input('ship_user_email');
        $order->ship_user_phone = $request->input('ship_user_phone');
        $order->ship_user_address = $request->input('ship_user_address');
        $order->ship_user_note = $request->input('ship_user_note', null);
        $order->status_order = 'pending';
        $order->status_payment = 'unpaid';
        $order->total_price = $request->input('final_price');
        $order->save();

        // lAY CAC MUC DUOC CHON TRONG GIO HANG
        $selectedItems = explode(',', $request->input('selected_items'));

        // THEM SAN PHAM VAO order_items table
        foreach ($selectedItems as $itemId) {
            $cartItem = CartItem::find($itemId);

            if ($cartItem) {
                $orderItem = new OrderItem();
                $orderItem->order_id = $order->id;
                $orderItem->product_variant_id = $cartItem->product_variant_id;
                $orderItem->quatity = $cartItem->quatity;
                $orderItem->product_name = $cartItem->productVariant->product->name;
                $orderItem->product_sku = $cartItem->productVariant->product->sku;
                $orderItem->product_img_thumbnail = $cartItem->productVariant->product->img_thumbnail;
                $orderItem->product_price_regular = $cartItem->productVariant->product->price_regular;
                $orderItem->product_price_sale = $cartItem->productVariant->product->price_sale;
                $orderItem->variant_size_name = $cartItem->productVariant->size->name;
                $orderItem->variant_color_name = $cartItem->productVariant->color->name;
                $orderItem->save();
            }
        }

        // XOA GIO HANG
        CartItem::whereIn('id', $selectedItems)->delete();
        Cart::where('user_id', auth()->id())->delete();

        Mail::to($order->user_email)->send(new OrderInvoice($order));
        
        return redirect()->route('thongbao')->with('success', 'Order placed successfully!');
    }




    // public function updateStatus(Request $request, $id)
    // {
    //     // Xác thực dữ liệu
    //     $validated = $request->validate([
    //         'status_order' => 'required|in:' . implode(',', array_keys(Order::STATUS_ORDER)),
    //         'status_payment' => 'required|in:' . implode(',', array_keys(Order::STATUS_PAYMENT)),
    //     ]);

    //     // Cập nhật trạng thái đơn hàng
    //     $order = Order::findOrFail($id);
    //     $order->update($validated);

    //     return redirect()->route('admin.orders.index')->with('success', 'Cập nhật trạng thái đơn hàng thành công.');
    // }
}
