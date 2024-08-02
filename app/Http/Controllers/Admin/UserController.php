<?php

// app/Http/Controllers/Admin/UserController.php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }


    public function create()
    {
        return view('admin.users.create');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:users',
            'password'  => 'required|string|min:5|confirmed',
            'address'   => 'nullable|string|max:255',
            'phone'     => 'nullable|string|max:20',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['type'] = User::TYPE_ADMIN; // Mặc định là admin

        User::create($validatedData);

        return redirect()->route('admin.users.index')->with('success', 'User created successfully.');
    }


    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }


    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password'  => 'nullable|string|min:5|confirmed',
            'address'   => 'nullable|string|max:255',
            'phone'     => 'nullable|string|max:20',
            'type'      => 'required|in:' . implode(',', [User::TYPE_ADMIN, User::TYPE_MEMBER]),
        ]);
    
        if ($request->filled('password')) {
            $validatedData['password'] = Hash::make($validatedData['password']);
        } else {
            unset($validatedData['password']);
        }
    
        $user->update($validatedData);
    
        return redirect()->route('admin.users.index')->with('success', 'User updated successfully.');
    }


    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }
}
