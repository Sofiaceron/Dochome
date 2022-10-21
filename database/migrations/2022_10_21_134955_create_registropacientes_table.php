<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistropacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registropacientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombres_y_apellidos',30);
            $table->enum('sexo', ["F","M"]);
            $table->string('cedula',10);
            $table->string('telefono');
            $table->string('direccion',40);
            $table->string('correo',);
            $table->string('password');
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
        Schema::dropIfExists('registropacientes');
    }
}
