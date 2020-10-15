<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpcionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opcions', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion', 32);
            $table->integer('fktipo');
            $table->integer('opcion_menu');
            $table->integer('fkestatus')->default(1);
            $table->string('icon', 32)->default('dashboard');
            $table->timestamps();
            $table->foreign('fktipo')->references('id')->on('tipo_opcions');
            $table->foreign('fkestatus')->references('id')->on('estatus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opcions');
    }
}
