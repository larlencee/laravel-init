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

$factory->define(\App\Models\Article::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'meta_keywords' => $faker->name,
        'meta_description' => $faker->name,
        'cover_url' => $faker->imageUrl(),
        'description' => $faker->name,
        'visit_count' => rand(100, 1000),
        'like_count' => rand(100, 1000),
        'collect_count' => rand(100, 1000),
        'sort' => rand(100, 1000)
    ];
});

$factory->state(\App\Models\Article::class, 'notPublish', [
    'article_status' => 0
]);
$factory->state(\App\Models\Article::class, 'recycle', [
    'article_status' => 1
]);
$factory->state(\App\Models\Article::class, 'publish', [
    'article_status' => 2
]);

