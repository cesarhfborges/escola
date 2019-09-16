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
        $curso = new Curso([
            'nome' => 'Curso 1',
            'categoria_id' => Categoria::first()->id,
            'custo' => 'pago',
            'preco' => 1000.00,
            'descricao' => 'Curso Auto Cadastrado'
        ]);
        $curso->save();
    }
}
