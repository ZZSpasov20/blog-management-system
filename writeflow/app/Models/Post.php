<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $casts = [
        'id' => 'string',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);

    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    public function saves(){
        return $this->hasMany(Save::class);
    }
}
