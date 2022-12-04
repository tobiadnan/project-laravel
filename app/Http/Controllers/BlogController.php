<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;

class BlogController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('category')) {
            # code...
            $category = Category::firstwhere('slug', request('category'));
            $title = ' Category ' . $category->name;
        }
        return view('blog', [
            "title" => 'Halaman Blog' . $title,
            'active' => 'blog',
            'post' => Blog::latest()->filter(request(['search', 'category', 'user']))->paginate(7)->withQueryString()
        ]);
    }

    public function showPost(Blog $post)
    {
        return view('singlepost', [
            'title' => 'Single Artikel',
            'active' => 'blog',
            'post' => $post
        ]);
    }
}
