<?php

use Illuminate\Database\Seeder;
use App\Tag;
use Faker\Generator as Faker;
class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(faker $faker)
    {
        for($i = 0; $i < 10; $i++){
            $newTag = new Tag();
            $newTag->name = $faker->word($i);
            $newTag->save();
        }
    }
}
