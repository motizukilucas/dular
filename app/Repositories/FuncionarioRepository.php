<?php

namespace App\Repositories;

use App\Funcionario;
use App\Interfaces\FuncionarioRepositoryInterface;

class FuncionarioRepository implements FuncionarioRepositoryInterface
{
    public static function getFuncionarios()
    {
        return Funcionario::all();
    }
}
