<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->integer('codigo')->primary();
            $table->string('nombre')->nullable($value=false);
            $table->text('descripcion')->nullable($value=false);
            $table->double('valor',8,2)->nullable($value = false);
            $table->integer('disponible')->nullable($value = false);
            $table->string('imagen');
            $table->unsignedInteger('categoria');
            $table->foreign('categoria')->references('id')->on('categorias');
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
        Schema::dropIfExists('productos');
    }
}
