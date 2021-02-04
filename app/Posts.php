<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'posts';

    public function postInformation(){
        return $this->hasOne('App\Information');
    
    }
    public function postCategory(){
        return $this->belongsTo('App\Categories', 'category_id');
    }
    public function tags(){
        return $this->belongsToMany('App\Tag', 'post_tag', 'post_id', 'tag_id');
    }
}
