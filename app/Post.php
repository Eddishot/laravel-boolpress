<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ["name", "title", "content"];


    public function postsUser(){
        return $this->belongsto("App\User");
    }
}
