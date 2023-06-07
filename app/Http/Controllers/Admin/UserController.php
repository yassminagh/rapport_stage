<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserFormaRequest;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('admin.user.index', compact('user'));
    }
    public function edit(int $id)
    {
        $user = User::all();
        return view('admin.user.edit',compact('user'));
    }

    public function update(UserFormaRequest $request, int $id)
    {
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        // Add more fields as per your user model
    ]);

    $user->update($validatedData);

    return redirect()->back()->with('success', 'User information updated successfully.');
}
    }

