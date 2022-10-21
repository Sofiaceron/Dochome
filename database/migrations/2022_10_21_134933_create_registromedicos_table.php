<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistromedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registromedicos', function (Blueprint $table) {
            $table->id();
            $table->string('nombres_y_apellidos',30);
            $table->enum('sexo', ["F","M"]);
            $table->string('cedula',10);
            $table->date('Fecha_de_expedicion');
            $table->string('telefono');
            $table->string('correo',);
            $table->string('password');
            $table->string('fcopia_cedula',200);
            $table->string('fcopia_acta_certificacion',200);
            $table->string('fcopia_diploma',200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registromedicos');
    }
}
