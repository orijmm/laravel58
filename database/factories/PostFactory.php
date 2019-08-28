<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'contenido'=> $faker->text($maxNbChars = 200),
        'fecha'=> $faker->dateTime($max = 'now', $timezone = null),
        'descripcion'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
    ];
});
