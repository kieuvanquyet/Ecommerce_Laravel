<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function __construct()
    {
        //P
        $this->middleware('auth');
    }



    public function add(Request $request)
    {
        // GET USER HIEN TAI
        $user = Auth::user();

        // KIEM TRA DA CO GIO HANG CHUA
        $cart = Cart::firstOrCreate(
            ['user_id'      => $user->id],
            ['created_at'   => now(), 'updated_at' => now()]
        );

        // THONG TIN SAN PHAM TU request
        $productId  = $request->input('product_id');
        $sizeId     = $request->input('product_size_id');
        $colorId    = $request->input('product_color_id');
        $quatity    = $request->input('quantity');

        // TIM SAN PHAM VA BIEN THE SP
        $product = Product::findOrFail($productId);
        $productVariant = ProductVariant::where([
            'product_id'        => $productId,
            'product_size_id'   => $sizeId,
            'product_color_id'  => $colorId,
        ])->firstOrFail();

        // KIEM TRA XEM CO TRONG GIO HANG HAY CHUA
        $cartItem = CartItem::where([
            'cart_id' => $cart->id,
            'product_variant_id' => $productVariant->id,
        ])->first();

        // SP CO TRONG GIO HANG THI TANG SO LUONG
        if ($cartItem) {
            $cartItem->quatity += $quatity;
            $cartItem->updated_at = now();
        } else {
            // CHUA CO THI TAO MOI, CartItem
            $cartItem = new CartItem([
                'cart_id'            => $cart->id,
                'product_variant_id' => $productVariant->id,
                'quatity'            => $quatity,
                'created_at'         => now(),
                'updated_at'         => now(),
            ]);
        }

        //LUU CartItem
        $cartItem->save();
        return redirect()->route('cart.list')->with('success', 'Thêm sản phẩm vào giỏ hàng thành công!');
    }


    // hiển thị giỏ hàng
    public function list()
    {
        $user = Auth::user();

        // LAY GIO HANG
        $cart = Cart::with('items.productVariant.product', 'items.productVariant.size', 'items.productVariant.color')
            ->where('user_id', $user->id)
            ->first();

        // SUM TUNG SP
        $itemsTotalAmount = [];
        if ($cart) {
            foreach ($cart->items as $item) {
                $itemPrice                      =   $item->productVariant->product->price_sale ?: $item->productVariant->product->price_regular;
                $totalItemAmount                =   $item->quatity * $itemPrice;
                $itemsTotalAmount[$item->id]    =   $totalItemAmount; 
            }
        }

        return view('client.cart-list', compact('cart', 'itemsTotalAmount'));
    }
}
