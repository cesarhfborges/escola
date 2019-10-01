<?php

use App\Categoria;
use App\Curso;
use Illuminate\Database\Seeder;

class CursosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i =0; $i < 10; $i++){
            $curso = new Curso([
                'nome' => 'Sophos XG LV.'.($i + 1),
                'categoria_id' => Categoria::first()->id,
                'custo' => 'pago',
                'preco' => (100.00 * $i),
                'descricao' => '<h3>Estruturação de Sites com MVC</h3><h4><strong>Requisitos</strong></h4><p>Não são necessários pré-requisitos, pode começar os estudos por este curso</p><p>Descrição</p><p>O curso de criação de Loja Virtual com PHP7 e mysqli possui 62 aulas, este é o primeiro módulo da criação de um projeto bem grande que será a montagem de uma loja virtual completa, neste primeiro módulo focamos na estruturação do site usando mvc e orientação a objetos, neste módulo é montada a parte estrutural com o template e todas as classes para conexão e acesso ao banco de dados, deixando um projeto completamente bem estruturado que pode ser aplicado em qualquer outro tipo de site ou sistema web, adquira já o curso e receba todas as aulas + os fontes e arquivos usados.</p><p>Para quem é este curso:</p><p>Todo aluno que deseja criar sites e aprender PHP Avançado</p>'
            ]);
            $curso->save();
        }
    }
}
