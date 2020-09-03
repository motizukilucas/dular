<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdemServicoAparelho extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_ordem_servico', 'id_aparelho', 'acessorios', 'defeito_informado', 'entrada', 'saida', 'retorno', 'segunda_saida', 
    ];

}
