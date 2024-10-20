<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $posts = Post::with('user')
            ->where('published',1)
            ->latest()
            ->take(3)
                ->get();
        return view('index', compact('posts'));
    }
}
