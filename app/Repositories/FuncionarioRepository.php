<?php

namespace App\Repositories;

use App\Funcionario;

class FuncionarioRepository implements FuncionarioRepositoryInterface
{
    public function getFuncionarios()
    {
        return Funcionario::all();
    }
}
