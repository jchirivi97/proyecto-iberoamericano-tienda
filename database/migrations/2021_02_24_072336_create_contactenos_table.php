<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactenosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactenos', function (Blueprint $table) {
            $table->id();
            $table->string('nombres')->nullable($value=false);
            $table->string('telefono')->nullable($value=false);
            $table->string('correo')->nullable($value=false);
            $table->string('observacion')->nullable($value=true);
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
        Schema::dropIfExists('contactenos');
    }
}
