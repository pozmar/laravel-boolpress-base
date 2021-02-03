<?php

use Illuminate\Database\Seeder;
use App\Information;
class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Information::class, 100)->create()->each(
            function($el){
                $el->save();
            }
        );
    }
}
