<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoOpcionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_opcions', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion',32);
            $table->integer('fkestatus');
            $table->timestamps();
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
        Schema::dropIfExists('tipo_opcions');
    }
}
