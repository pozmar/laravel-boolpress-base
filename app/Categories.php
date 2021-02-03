<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';
    public function findingPost(){
        return $this->hasMany('App\Posts', 'category_id');
    }
}
