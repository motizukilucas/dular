<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OrdemServicoPeca;
use Faker\Generator as FakerGenerator;

$factory->define(OrdemServicoPeca::class, function (FakerGenerator $faker) {
    $faker->addProvider(new Faker\Provider\Lorem($faker));

    return [
        'id_ordem_servico_aparelho' => factory(App\OrdemServicoAparelho::class),
        'peca' => $faker->word,
        'preco' => $faker->randomFloat(2, 10, 200),
    ];
});
