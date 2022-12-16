<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Models\Blog;
use Faker\Provider\Lorem;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;

Route::get('/', function () {
    return view('home', [
        "title" => "home",
        'active' => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "active" => "about",
        "name" => "Toby",
        "email" => "thobisaha@gmail.com",
        "img" => "tobi.jpg"
    ]);
});


Route::get('/categories/{category:slug}', function (Category $category) {
    return view('blog', [
        "title" => "Post by Category : $category->name",
        "active" => 'category',
        "post" => $category->blog->load('category', 'user')
    ]);
});

Route::get('/authors/{user}', function (User $user) {
    return view('blog', [
        "title" => 'Post by User : $user->name',
        "active" => 'category',
        "post" => $user->blog->load('category', 'user')
    ]);
});

Route::get('/categories', function () {
    return view('allcategories', [
        "title" => 'All Categories',
        "active" => 'category',
        "categories" => category::all()
    ]);
});

Route::get('/blog', [BlogController::class, 'index']);

Route::get('blog/{post:slug}', [BlogController::class, 'showPost']);

// route for login
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');

// route for registration
Route::get('/registration', [RegistrationController::class, 'index'])->middleware('guest');

// route login
Route::post('/login', [LoginController::class, 'authenticate']);

//route logout
Route::post('/logout', [LoginController::class, 'logout']);

// route for sending registration data
Route::post('/registration', [RegistrationController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
