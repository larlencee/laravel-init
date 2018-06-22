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

$factory->define(\App\Models\Production::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'description' => $faker->name,
        'meta_keywords' => $faker->name,
        'meta_description' => $faker->name,
        'price' => rand(100, 1000),
        'visit_count' => rand(100, 1000),
        'like_count' => rand(100, 1000),
        'sort' => rand(100, 1000),
        'platform_type' => rand(0, 1),
        'platform_url' => $faker->url,
        'production_status' => rand(0, 2),
    ];
});

$factory->state(\App\Models\Production::class, 'taobao', [
    'platform_type' => 0
]);
$factory->state(\App\Models\Production::class, 'tianmao', [
    'platform_type' => 1
]);
