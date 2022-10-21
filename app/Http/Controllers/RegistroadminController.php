<?php

namespace App\Http\Controllers;

use App\Models\Registroadmin;
use Illuminate\Http\Request;

class RegistroadminController extends Controller
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
        return view('Registroadmin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registroadmin = new Registroadmin;
        $registroadmin->nombres_y_apellidos = $request->nombres_y_apellidos;
        $registroadmin->cedula = $request->cedula;
        $registroadmin->correo = $request->correo;
        $registroadmin->password = $request->password;

        $registroadmin->save();
        return redirect()->route('registroadmin.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registroadmin  $registroadmin
     * @return \Illuminate\Http\Response
     */
    public function show(Registroadmin $registroadmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registroadmin  $registroadmin
     * @return \Illuminate\Http\Response
     */
    public function edit(Registroadmin $registroadmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registroadmin  $registroadmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registroadmin $registroadmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registroadmin  $registroadmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registroadmin $registroadmin)
    {
        //
    }
}
