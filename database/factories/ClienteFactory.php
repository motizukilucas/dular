<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cliente;
use Faker\Generator as FakerGenerator;

$factory->define(Cliente::class, function (FakerGenerator $faker) {
    $faker->addProvider(new Faker\Provider\pt_BR\Address($faker));
    $faker->addProvider(new Faker\Provider\pt_BR\PhoneNumber($faker));
    $faker->addProvider(new Faker\Provider\pt_BR\Person($faker));

    return [
        'nome' => $faker->name,
        'email' => $faker->email,
        'cpf_cnpj' => $faker->cpf(false),
        'tel_celular' => $faker->areaCode . $faker->cellphone(false),
        'tel_residencial' => $faker->areaCode . $faker->landline(false),
        'tel_comercial' => $faker->areaCode . $faker->landline(false),
        'rua' => $faker->streetName,
        'numero' => $faker->buildingNumber,
        'complemento' => $faker->secondaryAddress,
        'bairro' => $faker->word,
        'cidade' => $faker->city,
        'estado' => $faker->regionAbbr,
        'cep' => preg_replace('/-/', '', $faker->postcode),
    ];
});
