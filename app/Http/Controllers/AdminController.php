<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;

class AdminController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $users = User::all();
        $posts = Post::all();
        return view('admin', ['users' => $users, 'posts' => $posts]);
    }
}
