<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome_site');
            $table->longText('avatar');
            $table->longText('favicon');
            $table->longText('endereco');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('uf', 2);
            $table->string('cep', 16);
            $table->longText('rodape');
            $table->string('horario_sistema');
            $table->string('monetario', 6);
            $table->boolean('smtp_ativo')->default(true);
            $table->string('smtp_host');
            $table->integer('smtp_porta');
            $table->string('smtp_email');
            $table->string('smtp_senha');
            $table->string('smtp_cripto');
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
        Schema::dropIfExists('config');
    }
}
