<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turmas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('curso_id');

            $table->enum('tipo', ['online', 'presencial'])->default('presencial');

            $table->date('inicio')->nullable(false);
            $table->date('termino')->nullable(false);

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
        Schema::dropIfExists('turmas');
    }
}
