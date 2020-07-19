<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model

{
    //SELECT * FROM posts INNER JOIN users ON posts.category
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
