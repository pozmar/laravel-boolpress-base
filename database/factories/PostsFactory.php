<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Posts;
use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Posts::class, function (Faker $faker) {
    return [
        'id'=>$faker->randomNumber,
        'post_id'=>$faker->randomNumber,
        'title'=>$faker->words(),
        'author'=>$faker->name
    ];
});
