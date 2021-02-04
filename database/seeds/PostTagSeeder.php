<?php

use Illuminate\Database\Seeder;
use App\Tag;
use App\Posts;
use Faker\Generator as Faker;
use DB\Database;
class PostTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $posts = Posts::all();
        $tags = Tag::all();
        foreach ($posts as $post){
            for($i = 1; $i <= $faker->numberBetween(1, $tags->count()); $i++){
                DB::table('post_tag')->insert([
                    'post_id' => $post->id,
                    'tag_id' => $i
                ]);
            }
        }
    }
}
