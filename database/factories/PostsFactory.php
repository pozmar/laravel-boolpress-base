<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Posts;
use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Posts::class, function (Faker $faker) {
    
    return [
        
        'category_id'=>$faker->numberBetween(1, 10),
        'title'=>$faker->text,
        'author'=>$faker->name
    ];
});
