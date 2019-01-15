<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id', 'thread_id', 'title', 'post'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function thread(){
        $this->belongsTo(Thread::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
