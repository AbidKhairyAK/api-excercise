<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Model\Article::class, function (Faker $faker) {
    return [
		'title' => $faker->sentence(3),
		'content' => $faker->paragraphs(3, true),
		'category_id' => $faker->randomElement(DB::table('categories')->pluck('id')),
    ];
});
