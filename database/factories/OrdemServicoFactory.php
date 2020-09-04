<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OrdemServico;
use Faker\Generator as Faker;

$factory->define(OrdemServico::class, function (Faker $faker) {
    $status = [
        'aguardando',
        'pendente',
        'devolução',
        'entregue',
    ];

    $formas_pagamento = [
        'dinheiro',
        'cartao',
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
