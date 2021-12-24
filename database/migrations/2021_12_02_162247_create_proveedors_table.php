<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Categoria_proveedors', function (Blueprint $table){
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::create('proveedors', function (Blueprint $table) {
            $table->id();
            $table->string('empresa');
            $table->string('contacto');
            $table->string('correo');
            $table->string('telefono');
            $table->string('imagen')->nullable();
            // Refrenciando user_id  a id como una llave foranea de la tabla users
            $table->foreignId('user_id')->references('id')->on('users')->comment('El usuario que crea un nuevo proveedor');
            // Refrenciando categoria_id a id como una llave foranea de la categoria de los 
            $table->foreignId('categoria_id')->references('id')->on('Categoria_proveedors')->comment('La categoria de la orden de trabajo');
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
        Schema::dropIfExists('proveedors');
        Schema::dropIfExists('Categoria_proveedors');
    }
}
