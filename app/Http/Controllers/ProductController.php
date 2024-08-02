<?php

namespace App\Http\Controllers;

use App\Models\Catalogue;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductSize;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    const PATH_VIEW = 'client.';

    public function trangchu()
    {
        // Lấy 10 sản phẩm mới nhất cùng với tên danh mục của chúng
        $products = Product::with('catalogue')
            ->where('is_active', 1)
            ->orderBy('created_at', 'desc')
            ->take(12)
            ->get();

        // Trả về view với dữ liệu sản phẩm
        return view(self::PATH_VIEW . __FUNCTION__, compact('products'));
    }


    public function detail($slug)
    {
        $product = Product::query()->with('variants')->where('slug', $slug)->first();
        $colors = ProductColor::query()->pluck('name', 'id')->all();
        $sizes = ProductSize::query()->pluck('name', 'id')->all();
        $galleryImages = $product->galleries->pluck('image')->all();

        return view('client.product-detail', compact('product', 'colors', 'sizes', 'galleryImages'));
    }

    public function index(Request $request)
    {
        $query = Product::query()->with('catalogue');

        if ($request->has('catalogue_id')) {
            $query->where('catalogue_id', $request->input('catalogue_id'));
        }

        $products = $query->paginate(12);
        $catalogues = Catalogue::all();

        return view(self::PATH_VIEW . 'index', compact('products', 'catalogues'));
    }
   
}
