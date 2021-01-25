<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forms\AparelhoForm;
use App\Aparelho;

class AparelhoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Aparelho::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return AparelhoForm::create();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create2()
    {
        return AparelhoForm::create2();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aparelho = Aparelho::create($request->all());
        return $aparelho;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aparelho = Aparelho::findOrFail($id);
        return $aparelho;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aparelho = Aparelho::findOrFail($id);
        
        return AparelhoForm::edit($aparelho);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $aparelho = Aparelho::findOrFail($id);
        $aparelho->update($request->all());
        return $aparelho;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Aparelho::destroy($id);
    }

    public function returnBySerial(Request $request)
    {
        $aparelho = Aparelho::where('numero_serie', $request->numero_serie)->firstOrFail();
        return $aparelho;
    }
}
