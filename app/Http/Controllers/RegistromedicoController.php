<?php

namespace App\Http\Controllers;

use App\Models\Registromedico;
use Illuminate\Http\Request;

class RegistromedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Registromedico.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registromedico = new Registromedico;
        $registromedico->nombres_y_apellidos = $request->nombres_y_apellidos;
        $registromedico->sexo = $request->sexo;
        $registromedico->cedula = $request->cedula;
        $registromedico->Fecha_de_expedicion = $request->Fecha_de_expedicion;
        $registromedico->telefono = $request->telefono;
        $registromedico->correo = $request->correo;
        $registromedico->password = $request->password;
        $registromedico->fcopia_acta_certificacion = $request->fcopia_acta_certificacion;
        $registromedico->fcopia_cedula = $request->fcopia_cedula;
        $registromedico->fcopia_diploma = $request->fcopia_diploma;

        $registromedico->save();
        return redirect()->route('registromedico.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registromedico  $registromedico
     * @return \Illuminate\Http\Response
     */
    public function show(Registromedico $registromedico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registromedico  $registromedico
     * @return \Illuminate\Http\Response
     */
    public function edit(Registromedico $registromedico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registromedico  $registromedico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registromedico $registromedico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registromedico  $registromedico
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registromedico $registromedico)
    {
        //
    }
}
