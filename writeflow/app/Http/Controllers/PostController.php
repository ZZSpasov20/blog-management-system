<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(){
        return view('post.create');
    }
    public  function userPosts(){
        $user = auth()->user();

        $posts = Post::where('user_id', $user->id)->with('user')->get();
        return view('post.userPosts', compact('posts', 'user'));
    }
    public function store(Request $request){
        $request->validate([
            'title' => ['required', 'max:255'],
            'content' => ['required'],
        ]);

        if($request->has('publish')){

            Post::create([
                'title' => $request['title'],
                'content' => $request['content'],
                'user_id' => auth()->id(),
                'published' => 1,
                'published_at' =>  now()->format('Y-m-d'),
            ]);
        }
        else{
            Post::create([
                'title' => $request['title'],
                'content' => $request['content'],
                'user_id' => auth()->id(),
                'published' => 0,
            ]);
        }

        return redirect()->route('index');
    }

    public  function show(Post $post){

        return view('post.show', compact('post'));
    }
}
