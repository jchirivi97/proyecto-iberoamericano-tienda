<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->string('nickname')->primary()->nullable($value = false);
            $table->integer('documento')->nullable($value = false);
            $table->char('tipo',2)->nullable($value = false);
            $table->string('nombre')->nullable($value = false);
            $table->string('apellido')->nullable($value = false);
            $table->text('direccion')->nullable($value = false);
            $table->string('celular')->nullable($value = false);
            $table->string('password')->nullable($value = false);
            $table->string('correo')->nullable($value = false);
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
        Schema::dropIfExists('usuarios');
    }
}
