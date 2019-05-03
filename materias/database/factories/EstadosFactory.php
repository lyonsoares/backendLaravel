<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Estado::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'sigla' => $faker->citySuffix
    ];
});
