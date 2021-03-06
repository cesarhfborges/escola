<?php

use App\Conteudo;
use App\Curso;
use App\Turma;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ConteudosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso = Curso::first();
        for ($i = 0; $i < 10; $i++){
            $conteudo = new Conteudo([
                'curso_id' => $curso->id,
                'titulo' => 'conteudo ' . $i . ': '.Str::random(10),
                'avatar' => 'assets/img/attachment.png',
                'tipo' => 'url',
                'tipoURL' => 'teste',
                'status' => $i % 2 == 0,
                'descricao' => Str::random(190),
                'modulo' => 'Modulo 1',
            ]);
            $conteudo->save();
        }
    }
}
