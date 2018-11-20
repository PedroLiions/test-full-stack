<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryPost extends Model
{
    protected $table = "category_product";

    protected $fillable = [
        "name"
    ];

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'category_post', 'post_id', 'category_post_id');
    }
}
