<?php

use App\Curso;
use App\Exame;
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
        $curso = Curso::first();
        for ($i = 0; $i < 3; $i++){
            $exame = new Exame([
                'curso_id' => $curso->id,
                'titulo' => 'Curso ' . $i . ': '.Str::random(10),
                'status' => $i % 2 == 0,
            ]);
            $exame->save();
        }
    }
}
