<?php

namespace App\Repositories;

use App\Aparelho;
use App\Interfaces\AparelhoRepositoryInterface;

class AparelhoRepository implements AparelhoRepositoryInterface
{
    public static function getAparelhos()
    {
        return Aparelho::all();
    }

    public function store(Request $request)
    {
        $aparelho = Aparelho::create($request->all());
        return $aparelho;
    }
}
