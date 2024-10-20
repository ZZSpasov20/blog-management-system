<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $post_id){

        $request->validate([
            'content' => ['required'],
        ]);

        Comment::create([
            'content' => $request['content'],
            'user_id' => auth()->id(),
            'post_id' => $post_id,
            'written_at' =>  now(),
        ]);
       return  redirect()->route("posts.show", $post_id);
    }

    public function destroy(Comment $comment){
        Comment::destroy($comment['id']);
        return redirect()->back();
    }
}
