<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function list() {
        $cart = session('cart');

        $totalAmount = 0;
        foreach ($cart as $item) {
            $totalAmount += $item['quantity'] * ($item['price_sale'] ?: $item['price_regular']);
        }

        return view('client.cart-list', compact('totalAmount'));
    }

    public function add()
    {
        $product = Product::query()->findOrFail(\request('product_id'));
        $productVariant = ProductVariant::query()
            ->with(['color', 'size'])
            ->where([
                'product_id' => \request('product_id'),
                'product_size_id' => \request('product_size_id'),
                'product_color_id' => \request('product_color_id'),
            ])
            ->firstOrFail();

        if (!isset( session('cart')[$productVariant->id] ) ) {
            $data = $product->toArray()
                + $productVariant->toArray()
                + ['quantity' => \request('quantity')];

            session()->put('cart.' . $productVariant->id,  $data);
        } else {
            $data = session('cart')[$productVariant->id];
            $data['quantity'] = \request('quantity');

            session()->put('cart.' . $productVariant->id,  $data);
        }

        return redirect()->route('cart.list');
    }
}
