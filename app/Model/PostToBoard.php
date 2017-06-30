<?php

namespace App\Model;

use App\Model\Comment;
use App\Model\Category;
use Illuminate\Database\Eloquent\Model;

class PostToBoard extends Model
{
    public function Comments(){
        return $this->hasMany(Comment::class, 'post_id');
    }

    public function Category(){
        return $this->belongsTo(Category::class, 'cat_id');
    }
}
