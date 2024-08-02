<?php

// app/Http/Controllers/Admin/BannerController.php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return view('admin.banners.index', compact('banners'));
    }

    public function create()
    {
        return view('admin.banners.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'banner_image1' => 'nullable|required',
            'banner_image2' => 'nullable|required',
            'banner_image3' => 'nullable|required',
        ]);

        $banner = new Banner();
        $banner->title = $request->input('title');
        $banner->description = $request->input('description');

        foreach (['banner_image1', 'banner_image2', 'banner_image3'] as $imageField) {
            if ($request->hasFile($imageField)) {
                $imagePath = $request->file($imageField)->store('banners', 'public');
                $banner->{$imageField} = $imagePath;
            }
        }
        
        // KHONG KICH HOAT
        $banner->is_active = false; 
        $banner->save();

        return redirect()->route('admin.banners.index')->with('success', 'Banner created successfully.');
    }

    public function edit(Banner $banner)
    {
        return view('admin.banners.edit', compact('banner'));
    }

    public function update(Request $request, Banner $banner)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'banner_image1' => 'nullable|',
            'banner_image2' => 'nullable|',
            'banner_image3' => 'nullable|',
        ]);

        $banner->title = $request->input('title');
        $banner->description = $request->input('description');

        foreach (['banner_image1', 'banner_image2', 'banner_image3'] as $imageField) {
            if ($request->hasFile($imageField)) {
                // XOA ANH CU
                if ($banner->{$imageField}) {
                    Storage::disk('public')->delete($banner->{$imageField});
                }

                // LUU ANH MOI
                $imagePath = $request->file($imageField)->store('banners', 'public');
                $banner->{$imageField} = $imagePath;
            }
        }

        $banner->save();

        return redirect()->route('admin.banners.index')->with('success', 'Banner updated successfully.');
    }

    public function destroy(Banner $banner)
    {
        foreach (['banner_image1', 'banner_image2', 'banner_image3'] as $imageField) {
            if ($banner->{$imageField}) {
                Storage::disk('public')->delete($banner->{$imageField});
            }
        }

        $banner->delete();

        return redirect()->route('admin.banners.index')->with('success', 'Banner deleted successfully.');
    }

    public function activate(Banner $banner)
    {
        Banner::where('is_active', true)->update(['is_active' => false]); 
        $banner->is_active = true;
        $banner->save();

        return redirect()->route('admin.banners.index')->with('success', 'Banner activated successfully.');
    }
}
