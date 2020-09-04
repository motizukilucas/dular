<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OrdemServicoTecnico;
use Faker\Generator as FakerGenerator;

$factory->define(OrdemServicoTecnico::class, function (FakerGenerator $faker) {
    $faker->addProvider(new Faker\Provider\Lorem($faker));
    
    return [
        'id_ordem_servico_aparelho' => factory(App\OrdemServicoAparelho::class),
        'id_tecnico' => factory(App\Funcionario::class),
        'defeito_constatado' => $faker->sentence(6, true),
    ];
});
