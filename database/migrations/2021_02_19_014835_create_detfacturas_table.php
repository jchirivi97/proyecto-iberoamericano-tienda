<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetfacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleFacturas', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad');
            $table->integer('producto');
            $table->foreign('producto')->references('codigo')->on('productos');
            $table->unsignedInteger('factura');
            $table->foreign('factura')->references('id')->on('facturas');
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
        Schema::dropIfExists('detalleFacturas');
    }
}
