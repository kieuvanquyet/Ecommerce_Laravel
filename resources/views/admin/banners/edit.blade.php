<!-- resources/views/admin/banners/edit.blade.php -->
@extends('admin.layouts.master')

@section('content')
    <h1>Edit Banner</h1>
    <form action="{{ route('admin.banners.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $banner->title }}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control">{{ $banner->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="banner_image1">Image 1 (Leave blank to keep current)</label>
            <input type="file" name="banner_image1" id="banner_image1" class="form-control">
            @if ($banner->banner_image1)
                <img src="{{ asset('storage/' . $banner->banner_image1) }}" alt="Banner Image 1" width="100">
            @endif
        </div>
        <div class="form-group">
            <label for="banner_image2">Image 2 (Leave blank to keep current)</label>
            <input type="file" name="banner_image2" id="banner_image2" class="form-control">
            @if ($banner->banner_image2)
                <img src="{{ asset('storage/' . $banner->banner_image2) }}" alt="Banner Image 2" width="100">
            @endif
        </div>
        <div class="form-group">
            <label for="banner_image3">Image 3 (Leave blank to keep current)</label>
            <input type="file" name="banner_image3" id="banner_image3" class="form-control">
            @if ($banner->banner_image3)
                <img src="{{ asset('storage/' . $banner->banner_image3) }}" alt="Banner Image 3" width="100">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update Banner</button>
    </form>
@endsection
