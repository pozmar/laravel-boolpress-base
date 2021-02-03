<?php
use App\Posts;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Posts::class, 100)->create()->each(
            function($el){
                $el->save();
            }
        );
    }
}
