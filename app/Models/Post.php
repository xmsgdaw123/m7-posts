<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Tag;
use App\Models\Comment;

class Post extends Model {
    protected $fillable = ['title', 'content', 'user_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class, 'post_tags');
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}