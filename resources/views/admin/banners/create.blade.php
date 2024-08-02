<!-- resources/views/admin/banners/create.blade.php -->
@extends('admin.layouts.master')

@section('content')
    <h1>Create Banner</h1>
    <form action="{{ route('admin.banners.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}">
            @error('title')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" value="{{old('description')}}"></textarea>
            @error('description')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="banner_image1">Image 1</label>
            <input type="file" name="banner_image1" id="banner_image1" class="form-control" value="{{old('banner_image1')}}">
            @error('banner_image1')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="banner_image2">Image 2</label>
            <input type="file" name="banner_image2" id="banner_image2" class="form-control" value="{{old('banner_image2')}}">
            @error('banner_image2')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="banner_image3">Image 3</label>
            <input type="file" name="banner_image3" id="banner_image3" class="form-control" value="{{old('banner_image3')}}">
            @error('banner_image3')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create Banner</button>
    </form>
@endsection
