<!-- resources/views/admin/banners/index.blade.php -->
@extends('admin.layouts.master')

@section('content')
    <h1>Banners</h1>
    <a href="{{ route('admin.banners.create') }}" class="btn btn-primary">Create New Banner</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Images</th>
                <th>Active</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($banners as $banner)
                <tr>
                    <td>{{ $banner->title }}</td>
                    <td>{{ $banner->description }}</td>
                    <td>
                        @if ($banner->banner_image1)
                            <img src="{{ asset('storage/' . $banner->banner_image1) }}" alt="Banner Image 1" width="100">
                        @endif
                        @if ($banner->banner_image2)
                            <img src="{{ asset('storage/' . $banner->banner_image2) }}" alt="Banner Image 2" width="100">
                        @endif
                        @if ($banner->banner_image3)
                            <img src="{{ asset('storage/' . $banner->banner_image3) }}" alt="Banner Image 3" width="100">
                        @endif
                    </td>
                    <td>
                        @if ($banner->is_active)
                            <span class="badge bg-success">Active</span>
                        @else
                            <span class="badge bg-secondary">Inactive</span>
                        @endif
                    </td>
                    <td>
                        @if (!$banner->is_active)
                            <form action="{{ route('admin.banners.activate', $banner->id) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-success">Activate</button>
                            </form>
                        @endif
                        <a href="{{ route('admin.banners.edit', $banner->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.banners.destroy', $banner->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
