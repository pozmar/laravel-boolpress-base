<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;

use App\Information;

use Faker\Generator as Faker;

$factory->define(App\Information::class, function (Faker $faker) {
    return [
        'id'=>$faker->randomNumber,
        'post_id'=>$faker->randomNumber,
        'description'=>$faker->text,
        'slug'=>$faker->slug
    ];
});
