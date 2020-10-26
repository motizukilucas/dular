<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OrdemServico;
use Faker\Generator as Faker;

$factory->define(OrdemServico::class, function (Faker $faker) {
    $status = [
        'AGUARDANDO',
        'PENDENTE',
        'DEVOLUCAO',
        'ENTREGUE',
    ];

    $formas_pagamento = [
        'DINHEIRO',
        'CARTAO',
    ];

    return [
        'id_cliente' => factory(App\Cliente::class),
        'id_atendente' => factory(App\Funcionario::class),
        'preco' => $faker->randomFloat(2, 50, 500),
        'forma_pagamento' => $faker->randomElement($formas_pagamento),
        'desconto' => $faker->randomFloat(0, 0, 50),
        'status' => $faker->randomElement($status),
    ];
});
