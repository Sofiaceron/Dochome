<?php

namespace App\Http\Controllers;

use App\Models\Registropaciente;
use Illuminate\Http\Request;

class RegistropacienteController extends Controller
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
        return view('Registropaciente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registropaciente = new Registropaciente;
        $registropaciente->nombres_y_apellidos = $request->nombres_y_apellidos;
        $registropaciente->sexo = $request->sexo;
        $registropaciente->cedula = $request->cedula;
        $registropaciente->telefono = $request->telefono;
        $registropaciente->direccion = $request->direccion;
        $registropaciente->correo = $request->correo;
        $registropaciente->password = $request->password;


        $registropaciente->save();
        return redirect()->route('registropaciente.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registropaciente  $registropaciente
     * @return \Illuminate\Http\Response
     */
    public function show(Registropaciente $registropaciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registropaciente  $registropaciente
     * @return \Illuminate\Http\Response
     */
    public function edit(Registropaciente $registropaciente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registropaciente  $registropaciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registropaciente $registropaciente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registropaciente  $registropaciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registropaciente $registropaciente)
    {
        //
    }
}
