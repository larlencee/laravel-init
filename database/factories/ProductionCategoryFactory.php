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

$factory->define(\App\Models\ProductionCategory::class, function (Faker $faker) {
    return [
        'category_id' => function (array $category) {
            return \App\Models\Category::inRandomOrder()->first()->id;
        }
    ];
});
