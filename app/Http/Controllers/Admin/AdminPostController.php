<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    public function show(){
        $posts = Post::get();
        return view('admin.post.index', compact('posts'));
    }

    public function create(){
        $categories = Category::get();
        return view('admin.post.create', compact('categories'));
    }
}
