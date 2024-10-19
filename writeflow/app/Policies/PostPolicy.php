<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PostPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }


    public function show(User $user, Post $post){

        if ($post['published']) {
            return true;
        }
        return Auth::user()['id'] === $post->user_id;
    }
}
