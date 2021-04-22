<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomiciliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domicilios', function (Blueprint $table) {
            $table->id();
            $table->string('calle_principal', 255);
            $table->string('cruzamiento_1', 255);
            $table->string('cruzamiento_2', 255)->nullable();
            $table->string('colonia')->nullable();
            $table->string('codigo_postal', 10);
            $table->string('latitud', 25)->nullable();
            $table->string('longitud', 25)->nullable();
            $table->foreignId('pais_id')->references('id')->on('paises');
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
        Schema::dropIfExists('domicilios');
    }
}
