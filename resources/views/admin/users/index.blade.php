@extends('admin.layouts.master')

@section('content')
    <h1>User List</h1>
    <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Add New User</a>
    
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->type }}</td>
                    <td>
                        <a href="{{ route('admin.users.show', $user) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-warning">Edit</a>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
