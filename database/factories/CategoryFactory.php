<?php

use Faker\Generator as Faker;

$factory->define(Blog\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->word()
    ];
});
