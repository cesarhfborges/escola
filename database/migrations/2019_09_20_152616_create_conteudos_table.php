<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConteudosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conteudos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('curso_id');

            $table->string('titulo')->nullable(false);
            $table->string('modulo')->nullable(true);
            $table->longText('avatar')->nullable(true);

            $table->enum('tipo', ['pdf','imagem','video','audio','iframe','url','nenhum'])->default('nenhum');
            $table->longText('tipoURL')->nullable(true);

            $table->longText('descricao')->nullable('true');
            $table->boolean('status')->default(true);

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conteudos');
    }
}
