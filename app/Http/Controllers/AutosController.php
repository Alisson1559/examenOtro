<?php

namespace App\Http\Controllers;

use App\Models\Autos;
use Illuminate\Http\Request;

class AutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Autos.index');

        $datosAutos['Autos']=Autos::paginate(5);
        return view('Autos.Formulario');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$datosAutos=request()->all();
        //return response()->json($datosAutos);
        $datosAutos = request()->except('_token');  
        Autos::insert($datosAutos);
        return response()->json($datosAutos);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Autos  $autos
     * @return \Illuminate\Http\Response
     */
    public function show(Autos $autos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Autos  $autos
     * @return \Illuminate\Http\Response
     */
    public function edit(Autos $autos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Autos  $autos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Autos $autos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Autos  $autos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autos $autos)
    {
        //
    }
}
