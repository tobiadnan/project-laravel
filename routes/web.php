<?php

use App\Http\Controllers\BlogController;
use App\Models\Blog;
use Faker\Provider\Lorem;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;

Route::get('/', function () {
    return view('home',[
        "title" => "home",
        'active'=>'home'
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "about",
        "active"=>"about",
        "name" => "Toby",
        "email" => "thobisaha@gmail.com",
        "img" => "tobi.jpg"
    ]);
});


Route::get('/categories/{category:slug}', function (Category $category) {
    return view('blog',[
        "title" => "Post by Category : $category->name",
        "active"=>'category',
        "post" => $category->blog->load('category','user')
    ]);
});

Route::get('/authors/{user}', function (User $user) {
    return view('blog',[
        "title" => 'Post by User : $user->name',
        "active"=>'category',
        "post" => $user->blog->load('category','user')
    ]);
});

Route::get('/categories', function () {
    return view('allcategories',[
        "title" => 'All Categories',
        "active"=>'category',
        "categories" => category::all()
    ]);
});

Route::get('/blog', [BlogController::class, 'index']);

Route::get('blog/{post:slug}', [BlogController::class,'showPost']);

Route::get('/login',[LoginController::class, 'index']);

Route::get('/registrasi',[RegistrationController::class, 'index']);
