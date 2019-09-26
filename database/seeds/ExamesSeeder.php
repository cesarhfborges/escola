<?php

use App\Conteudo;
use App\Exame;
use App\Turma;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ExamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $turma = Turma::first();
        for ($i = 0; $i < 3; $i++){
            $exame = new Exame([
                'turma_id' => $turma->id,
                'titulo' => 'Exame ' . $i . ': '.Str::random(10),
                'status' => $i % 2 == 0,
            ]);
            $exame->save();
        }
    }
}
