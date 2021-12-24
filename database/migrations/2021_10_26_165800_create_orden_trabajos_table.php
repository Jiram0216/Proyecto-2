<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenTrabajosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Categoria_tipotrabajos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::create('orden_trabajos', function (Blueprint $table) {
            $table->id();
            $table->string('maquina');
            $table->string('area');
            $table->text('trabajo');
            $table->string('horas');
            $table->text('descripcion');
            $table->text('causa');
            $table->text('solucion');
            $table->text('refacciones');
            $table->string('monto');
            $table->text('observaciones');
            $table->string('fecha');
            $table->string('imagen')->nullable();
            // Refrenciando user_id  a id como una llave foranea de la tabla users
            $table->foreignId('user_id')->references('id')->on('users')->comment('El usuario que crea la orden de trabajo');
            // Refrenciando categoria_id a id como una llave foranea de la Categoria de tipo de trabajo
            $table->foreignId('categoria_id')->references('id')->on('Categoria_tipotrabajos')->comment('La categoria de la orden de trabajo');
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
        Schema::dropIfExists('Categoria_tipotrabajos');
        Schema::dropIfExists('orden_trabajos');
    }
}
