<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('primer_nombre',32);
            $table->string('segundo_nombre',32);
            $table->string('primer_apellido',32);
            $table->string('segundo_apellido',32)->nullable();
            $table->string('cedula',10);
            $table->string('telefono_local',15)->nullable();
            $table->string('telefono_celular',15)->nullable();
            $table->string('correo',100);
            $table->integer('estatus');
            $table->timestamps();
            $table->foreign('estatus')->references('id')->on('estatus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
