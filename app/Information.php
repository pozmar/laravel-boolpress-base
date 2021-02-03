<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $table = 'posts_information';
    public function post(){
        return $this->belongsTo('App\Posts');
    }
}
