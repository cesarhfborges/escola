<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExameItensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exame_itens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('exame_id');

            $table->string('titulo')->nullable(false);

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('exame_id')->references('id')->on('exames')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exame_itens');
    }
}
