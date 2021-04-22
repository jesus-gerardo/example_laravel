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
            $table->string('nombre', 255);
            $table->string('primer_apellido', 255);
            $table->string('segundo_apellido', 255)->nullable();
            $table->string('genero', 100);
            $table->date('fecha_nacimiento');
            $table->string('telefono', 20);
            $table->string('linkedin')->nullable();
            $table->string('twitter_id', 255)->nullable();
            $table->string('ocupacion', 255);
            $table->foreignId('domicilio_id')->references('id')->on('domicilios');
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
        Schema::dropIfExists('personas');
    }
}
