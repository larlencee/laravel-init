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

$factory->define(\App\Models\Page::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'meta_keywords' => $faker->name,
        'meta_description' => $faker->name,
        'cover_url' => $faker->imageUrl(),
        'description' => $faker->name,
        'source' => $faker->name,
        'author' => $faker->name,
        'visit_count' => rand(100, 1000),
        'like_count' => rand(100, 1000),
        'collect_count' => rand(100, 1000),
        'sort' => rand(100, 1000),
        'published_at' => \Carbon\Carbon::now()
    ];
});

$factory->state(\App\Models\Page::class, 'notPublish', [
    'article_status' => 0
]);
$factory->state(\App\Models\Page::class, 'recycle', [
    'article_status' => 1
]);
$factory->state(\App\Models\Page::class, 'publish', [
    'article_status' => 2
]);

