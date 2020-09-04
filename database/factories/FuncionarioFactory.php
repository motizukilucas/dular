<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Funcionario;
use Faker\Generator as FakerGenerator;

$factory->define(Funcionario::class, function (FakerGenerator $faker) {
    $faker->addProvider(new Faker\Provider\pt_BR\PhoneNumber($faker));
    $faker->addProvider(new Faker\Provider\pt_BR\Person($faker));
    
    return [
        'nome' => $faker->name,
        'email' => $faker->email,
        'cpf_cnpj' => $faker->cpf(false),
        'tel_celular' => $faker->areaCode . $faker->cellphone(false),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
    ];
});
