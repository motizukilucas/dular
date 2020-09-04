<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Aparelho;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

$factory->define(Aparelho::class, function (Faker $faker) {
    $tipos = [
        'Televisao',
        'Adega',
        'Microondas',
        'Aparelho de som',
    ];

    $marcas = [
        'Samsung',
        'Philips',
        'LG',
        'Brastemp',
    ];

    $modelo_prefixes = [
        'SM-',
        'LG-',
        'PH-',
        'BR-',
    ];

    return [
        'tipo' => $faker->randomElement($tipos),
        'marca' => $faker->randomElement($marcas),
        'modelo' => $faker->randomElement($modelo_prefixes) . $faker->bothify('##??##'),
        'numero_serie' => Hash::make(Str::random(10)),
    ];
});
