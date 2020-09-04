<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OrdemServicoAparelho;
use Faker\Generator as FakerGenerator;
use Illuminate\Support\Carbon;

$factory->define(OrdemServicoAparelho::class, function (FakerGenerator $faker) {
    $faker->addProvider(new Faker\Provider\Lorem($faker));

    $datetimes = [
        NULL,
        now()->toDateTimeString(),
    ];

    return [
        'id_ordem_servico' => factory(App\OrdemServico::class),
        'id_aparelho' => factory(App\Aparelho::class),
        'acessorios' => $faker->sentence(3, true),
        'defeito_informado' => $faker->sentence(6, true),
        'entrada' => now()->toDateTimeString(),
        'saida' => $faker->randomElement($datetimes),
        'retorno' => $faker->randomElement($datetimes),
        'segunda_saida' => $faker->randomElement($datetimes),
    ];
});
