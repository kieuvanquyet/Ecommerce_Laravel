<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Catalogue;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductGallery;
use App\Models\ProductSize;
use App\Models\ProductVariant;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    const PATH_VIEW = 'admin.products.';

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::query()->with(['catalogue', 'tags'])->latest('id')->get();

        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $catalogues = Catalogue::query()->pluck('name', 'id')->all();
        $colors = ProductColor::query()->pluck('name', 'id')->all();
        $sizes = ProductSize::query()->pluck('name', 'id')->all();
        $tags = Tag::query()->pluck('name', 'id')->all();

        return view(self::PATH_VIEW . __FUNCTION__, compact('catalogues', 'colors', 'sizes', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        list(
            $dataProduct,
            $dataProductVariants,
            $dataProductGalleries,
            $dataProductTags
            ) = $this->handleData($request);

        try {
            DB::beginTransaction();

            /** @var Product $product */
            $product = Product::query()->create($dataProduct);

            foreach ($dataProductVariants as $item) {
                $item += ['product_id' => $product->id];

                ProductVariant::query()->create($item);
            }

            $product->tags()->attach($dataProductTags);

            foreach ($dataProductGalleries as $item) {
                $item += ['product_id' => $product->id];

                ProductGallery::query()->create($item);
            }

            DB::commit();

            return redirect()
                ->route('admin.products.index')
                ->with('success', 'Thao tác thành công!');
        } catch (\Exception $exception) {
            DB::rollBack();

            if (!empty($dataProduct['img_thumbnail'])
                && Storage::exists($dataProduct['img_thumbnail'])) {

                Storage::delete($dataProduct['img_thumbnail']);
            }

            $dataHasImage = $dataProductVariants + $dataProductGalleries;
            foreach ($dataHasImage as $item) {
                if (!empty($item['image']) && Storage::exists($item['image'])) {
                    Storage::delete($item['image']);
                }
            }

            return back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $product->load([
            'catalogue',
            'tags',
            'galleries',
            'variants',
        ]);

        $catalogues = Catalogue::query()->pluck('name', 'id')->all();
        $colors = ProductColor::query()->pluck('name', 'id')->all();
        $sizes = ProductSize::query()->pluck('name', 'id')->all();
        $tags = Tag::query()->pluck('name', 'id')->all();

        return view(self::PATH_VIEW . __FUNCTION__, compact('product', 'catalogues', 'colors', 'sizes', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        list(
            $dataProduct,
            $dataProductVariants,
            $dataProductGalleries,
            $dataProductTags,
            $dataDeleteGalleries
            ) = $this->handleData($request);

        try {
            DB::beginTransaction();

            $productImgThumbnailCurrent = $product->img_thumbnail; // Lưu lại giá trị hiện tại để xóa

            /** @var Product $product */
            $product->update($dataProduct);

            foreach ($dataProductVariants as $item) {
                $item += ['product_id' => $product->id];

                ProductVariant::query()->updateOrCreate(
                    [
                        'product_id' => $item['product_id'],
                        'product_size_id' => $item['product_size_id'],
                        'product_color_id' => $item['product_color_id'],
                    ],
                    $item
                );
            }

            $product->tags()->sync($dataProductTags);

            foreach ($dataProductGalleries as $item) {
                $item += ['product_id' => $product->id];

                ProductGallery::query()->updateOrCreate(
                    [
                        'id' => $item['id']
                    ],
                    $item
                );
            }

            DB::commit();

            if (!empty($dataDeleteGalleries)) {
                foreach ($dataDeleteGalleries as $id => $path) {
                    ProductGallery::query()->where('id', $id)->delete();

                    if (!empty($path) && Storage::exists($path)) {
                        Storage::delete($path);
                    }
                }
            }

            if (!empty($productImgThumbnailCurrent) && Storage::exists($productImgThumbnailCurrent)) {
                Storage::delete($productImgThumbnailCurrent);
            }

            return back()->with('success', 'Thao tác thành công!');
        } catch (\Exception $exception) {
            DB::rollBack();

            if (!empty($dataProduct['img_thumbnail'])
                && Storage::exists($dataProduct['img_thumbnail'])) {

                Storage::delete($dataProduct['img_thumbnail']);
            }

            $dataHasImage = $dataProductVariants + $dataProductGalleries;
            foreach ($dataHasImage as $item) {
                if (!empty($item['image']) && Storage::exists($item['image'])) {
                    Storage::delete($item['image']);
                }
            }

            return back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        // Trong thực tế, chức năng xóa phải là xóa mềm
        // Dưới đây code chỉ dành cho làm cơ bản
        try {
            $dataHasImage = $product->galleries->toArray() + $product->variants->toArray();

            DB::transaction(function () use ($product) {
                $product->tags()->sync([]);

                $product->galleries()->delete();

                // Đoạn foreach này là 1 phần lý do chúng ta không làm xóa cứng, mà chỉ làm xóa mềm
                // Như các em thấy, nó đang ảnh hưởng đến phần Order.
                foreach ($product->variants as $variant) {
                    $variant->orderItems()->delete();
                }
                $product->variants()->delete();

                $product->delete();
            }, 3);

            foreach ($dataHasImage as $item) {
                if (!empty($item->image) && Storage::exists($item->image)) {
                    Storage::delete($item->image);
                }
            }

            return back()->with('success', 'Thao tác thành công');
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }

    private function handleData(StoreProductRequest|UpdateProductRequest $request)
    {
        $dataProduct = $request->except(['product_variants', 'tags', 'product_galleries']);
        $dataProduct['is_active'] ??= 0;
        $dataProduct['is_hot_deal'] ??= 0;
        $dataProduct['is_good_deal'] ??= 0;
        $dataProduct['is_new'] ??= 0;
        $dataProduct['is_show_home'] ??= 0;
        $dataProduct['slug'] = Str::slug($dataProduct['name']) . '-' . $dataProduct['sku'];
        if (!empty($dataProduct['img_thumbnail'])) {
            $dataProduct['img_thumbnail'] = Storage::put('products', $dataProduct['img_thumbnail']);
        }

        $dataProductVariantsTmp = $request->product_variants;
        $dataProductVariants = [];
        foreach ($dataProductVariantsTmp as $key => $item) {
            $tmp = explode('-', $key);

            // current_image xuất hiện khi update
            $image = !empty($item['image'])
                ? Storage::put('product_variants', $item['image']) : ($item['current_image'] ?? null);

            $dataProductVariants[] = [
                'product_size_id' => $tmp[0],
                'product_color_id' => $tmp[1],
                'quatity' => $item['quatity'],
                'image' => $image
            ];
        }

        $dataProductGalleriesTmp = $request->product_galleries ?: [];
        $dataProductGalleries = [];
        foreach ($dataProductGalleriesTmp as $image) {
            if (!empty($image)) {
                $dataProductGalleries[] = [
                    'id' => $item['id'] ?? null, // Tồn tại ID khi update
                    'image' => Storage::put('product_galleries', $image)
                ];
            }
        }

        $dataProductTags = $request->tags;
        $dataDeleteGalleries = $request->delete_galleries;

        return [$dataProduct, $dataProductVariants, $dataProductGalleries, $dataProductTags, $dataDeleteGalleries];
    }
}