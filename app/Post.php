<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ["name", "title", "content", "user_id", "category_id"];


    public function postsUser(){
        return $this->belongsto("App\User");
    }


    public function category(){
        return $this->belongsTo("App\Category");
    }
}
