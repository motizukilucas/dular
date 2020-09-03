<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdemServicoTecnico extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_ordem_servico_aparelho', 'id_tecnico', 'defeito_constatado',
    ];

}
