<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::with('user')
            ->where('published',1)
            ->latest()
            ->simplePaginate(10);
        return view('post.index', compact('posts'));
    }
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

        return redirect()->route('posts.userPosts');
    }
    public  function show(Post $post){
        return view('post.show', compact('post'));
    }
    public function edit(Post $post){
        return view('post.edit', compact('post'));
    }
    public function update(Request $request, Post $post){
        if($request->has('publish')){
            $post->update(['published' => 1,  'published_at' =>  now()->format('Y-m-d'),]);
        }
        if($request->has('update')){
            $request->validate([
                'title' => ['required', 'max:255'],
                'content' => ['required'],
            ]);

            $post->update(['title' => $request['title'], 'content' => $request['content'],]);
        }


        return redirect()->route('posts.userPosts');
    }
    public function destroy(Post $post){
        Post::destroy($post['id']);
        return redirect()->route('posts.userPosts');
    }
}
