<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistromedicoController;
use App\Http\Controllers\RegistropacienteController;
use App\Http\Controllers\PerfilmedicoController;
use App\Http\Controllers\RegistroadminController;
use App\Http\Controllers\PerfilpacienteController;
use App\Http\Controllers\PerfiladminController;
use App\Http\Controllers\HistorialmedicoController;
use App\Http\Controllers\AdminmedicoController;
use App\Http\Controllers\AdminpacienteController;
use App\Http\Controllers\EspecialidadController;
use App\Http\Controllers\MedicoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('pagina_principal.index');
});

Route::resource('especialidades', EspecialidadController::class);

Route::resource('medico', MedicoController::class);

Route::resource('registromedico', RegistromedicoController::class);

Route::resource('registropaciente', RegistropacienteController::class);

Route::resource('registroadmin', RegistroadminController::class);

Route::resource('perfilmedico', PerfilmedicoController::class);

Route::resource('perfiladmin', PerfiladminController::class);

Route::resource('perfilpaciente', PerfilpacienteController::class);

Route::resource('historialmedico', HistorialmedicoController::class);

Route::resource('adminmedico', AdminmedicoController::class);

Route::resource('adminpaciente', AdminpacienteController::class);

Route::view('registromedico', 'registromedico.create')->name("registromedico");

Route::view('registroadmin', 'registroadmin.create')->name("registroadmin");

Route::view('registropaciente', 'registropaciente.create')->name("registropaciente");


Route::view('perfilpaciente', 'perfilpaciente.create')->name("perfilpaciente");

Route::view('perfilmedico', 'perfilmedico.create')->name("perfilmedico");

Route::view('perfiladmin', 'perfiladmin.create')->name("perfiladmin");

Route::view('historialmedico', 'historialmedico.index')->name("historialmedico");

Route::view('medico', 'medico.index')->name("medico");

Route::view('adminmedico', 'adminmedico.index')->name("adminmedico");

Route::view('adminpaciente', 'adminpaciente.index')->name("adminpaciente");

Route::view('adminpacientes', 'adminpacientes.index')->name("pacientes");
