<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdemServico extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_cliente', 'id_atendente', 'preco', 'forma_pagamento', 'desconto', 'status', 
    ];

}
