<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Save;
use Illuminate\Http\Request;

class SaveController extends Controller
{
    public function index(){
        $saves = Save::with(['post.user'])->where('user_id', auth()->id())->simplePaginate(10);
        return view('save.index', compact('saves'));
    }

    public function store( $post_id){

        Save::create([
            'user_id' => auth()->id(),
            'post_id' => $post_id,
        ]);
        return  redirect()->back();
    }

    public function destroy(Post $post){
        Save::where('post_id', $post->id)
            ->where('user_id', auth()->id())
            ->delete();
        return redirect()->back();
    }

}
