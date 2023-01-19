<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user:id,name' , 'category:id,name')->get();
        $categories = Category::all();
        return view('posts.index',
        ['posts' => $posts , 'categories' => $categories]
        );
    }
}
