<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('nome')->nullable(false);
            $table->unsignedBigInteger('categoria_id')->nullable(false);
            $table->enum('custo', ['pago', 'gratis'])->default('pago');
            $table->decimal('preco', 9, 2)->default(0);
            $table->string('avatar')->default('assets/img/round-default.png');
            $table->string('descricao')->nullable(true);
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('restrict');
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
