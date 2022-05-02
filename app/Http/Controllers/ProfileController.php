<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProfileController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $user = Auth::user();
        $posts = $user->posts;

        return view('user.profile', ['user' => $user, compact('posts')]);
    }

    public function edit() {
        $user = Auth::user();

        return view('user.edit-profile', ['user' => $user]);
    }

    public function updatePassword(Request $request, User $user) {
        $validatedData = $request->validate([
            'password' => 'required|max:255',
        ]);

        $hashed = Hash::make($validatedData['password']);
        $user->update(['password' => $hashed]);
        return redirect('/profile/edit')->with('success', 'Password actualizada');
    }

    public function posts() {
        $user = Auth::user();
        $posts = $user->posts;

        return view('post.my-posts', compact('posts'));
    }
}
