<?php

namespace App\Repositories;

use App\Aparelho;
use App\Interfaces\AparelhoRepositoryInterface;
use Illuminate\Http\Request;

class AparelhoRepository implements AparelhoRepositoryInterface
{
    public function getAparelhos()
    {
        return Aparelho::all();
    }

    public function create(Request $request)
    {
        $aparelho = Aparelho::create($request->all());
        return $aparelho;
    }
}
