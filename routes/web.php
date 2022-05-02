<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::middleware(['auth', 'role:admin'])->get('/admin', 'AdminController@index')->name('admin');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/profile/posts', 'ProfileController@posts')->name('myPosts');
Route::get('/profile/edit', 'ProfileController@edit')->name('editProfile');
Route::put('/profile/password', 'EditProfileController@updatePassword')->name('updatePassword');

Route::resources([
    'posts' => 'PostController',
    'users' => 'UserController',
    'tags'=>'TagController',
    'comments' => 'CommentController',
]);

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::post('/search', 'SearchController@fetch')->name('search');