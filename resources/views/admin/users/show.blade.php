@extends('admin.layouts.master')

@section('content')
<div>
    <h2>User Details</h2>
    <p><strong>Name:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Address:</strong> {{ $user->address }}</p>
    <p><strong>Phone:</strong> {{ $user->phone }}</p>
    <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Back to Users List</a>
</div>
@endsection