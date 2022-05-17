<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunoCursoModelsTable extends Migration
{

    public function up()
    {
        Schema::create('aluno_curso_models', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('curso_id');
            $table->foreign('curso_id')->references('id')->on('curso_models');
        });
    }
    public function down()
    {
        Schema::dropIfExists('aluno_curso_models');
    }
}