<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface AparelhoRepositoryInterface
{
    public function getAparelhos();
    public function create(Request $request);
}
