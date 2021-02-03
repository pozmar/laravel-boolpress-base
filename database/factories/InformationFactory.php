<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;

use App\Information;

use Faker\Generator as Faker;

$factory->define(App\Information::class, function (Faker $faker) {
    return [
        
        'post_id'=>$faker->numberBetween(1, 100),
        'description'=>$faker->text,
        'slug'=>$faker->slug
    ];
});
