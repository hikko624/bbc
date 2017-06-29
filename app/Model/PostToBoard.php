<?php

#namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PostToBoard extends Model
{
    public function Comments(){
        return $this->hasMany('Comment', 'post_id');
    }

    public function Category(){
        return $this->belongsTo('Category', 'cat_id');
    }
}
