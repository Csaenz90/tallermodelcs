<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Departamento::class, function (Faker $faker) {
    return [
        'nombre_departamento' => $faker->state,
        'opciones' => [
            "pais" => $faker->country,
            "alcalde" => $faker->name,
            "poblacion" => $faker->randomDigitNotNull 
        ]
    ];
});
