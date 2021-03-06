<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ["name", "title", "content", "category_id"];


    public function user(){
        return $this->belongsTo("App\User");
    }


    public function category(){
        return $this->belongsTo("App\Category");
    }
}
