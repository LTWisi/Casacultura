<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->date('fechaPublicacion');
            $table->unsignedFloat('costo')->default('0');
            $table->unsignedBigInteger('n_estudiantes')->default('0');
            $table->text('descripcion')->nullable();
            $table->string('idioma', 50);
            $table->text('aprendizajes')->nullable();
            $table->text('requisitos')->nullable();
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
        Schema::dropIfExists('cursos');
    }
}
