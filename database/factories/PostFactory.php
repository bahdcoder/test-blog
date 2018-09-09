<?php

use Faker\Generator as Faker;

$factory->define(\Blog\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(4)
    ];
});
