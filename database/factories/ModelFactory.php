<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
        'image' => $faker->imageUrl($width = 128, $height = 128, 'people'),
    ];
});

$factory->define(App\Post::class, function ($faker) {
  return [
    'title' => $faker->sentence(mt_rand(1, 5)),
    'slug' => $faker->unique()->slug,
    'summary' => join("\n\n", $faker->paragraphs(mt_rand(1, 3))),
    'content' => join("\n\n", $faker->paragraphs(mt_rand(3, 6))),
    'user_id' => $faker->numberBetween($min = 1, $max = 60),
    'created_at' => $faker->dateTimeBetween('-1 month', '-10 days'),
    'updated_at' => $faker->dateTimeBetween('-9 days', '-1 days'),
  ];
});


$factory->define(App\Tag::class, function ($faker) {
    return [
        'name' => $faker->word,
    ];
});

$factory->define(App\Tag::class, function ($faker) {
    return [
        'post_id' => $faker->numberBetween($min = 79, $max = 147),
        'tag_id' => $faker->numberBetween($min = 1, $max = 4),
    ];
});