<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Categories;
use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Categories::class, function (Faker $faker) {
    return [
        'id'=>$faker->randomNumber,
        'title'=>$faker->words(),
        'slug'=>$faker->slug
    ];
});
