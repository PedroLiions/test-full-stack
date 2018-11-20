<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";

    protected $fillable = [
        'title',
        'description',
        'content',
        'photo',
        'user_id',
    ];

    public function categories()
    {
        return $this->belongsToMany(CategoryPost::class, 'category_post', 'category_post_id', 'post_id');
    }
}
