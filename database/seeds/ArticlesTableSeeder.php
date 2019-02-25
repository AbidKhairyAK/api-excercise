<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker::create();

        DB::table('articles')->truncate();
        factory(App\Model\Article::class, 50)->create();

        // for ($i=0; $i < 50; $i++) { 
        // 	$data[$i] = [
        // 		'category_id' => $faker->randomElement(DB::table('categories')->pluck('id')),
        // 		'title' => $faker->sentence(3),
        // 		'content' => $faker->paragraphs(3, true),
        // 	];
        // }

        // DB::table('articles')->insert($data);
    }
}
