<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'email', 'cpf_cnpj', 'tel_celular', 'tel_residencial', 'tel_comercial', 'rua', 'numero', 'complemento', 'cidade', 'estado', 'cep',
    ];

}
