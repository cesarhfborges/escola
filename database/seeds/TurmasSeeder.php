<?php

use App\Curso;
use App\Turma;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TurmasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso = Curso::first();
        $turma = new Turma([
            'curso_id' => $curso->id,
            'tipo' => 'presencial',
            'inicio' => Carbon::now()->subDay()->format('Y-m-d'),
            'termino' => Carbon::now()->addDay()->format('Y-m-d'),
        ]);
        $turma->save();

        $turma2 = new Turma([
            'curso_id' => $curso->id,
            'tipo' => 'online',
            'inicio' => Carbon::now()->subDay()->format('Y-m-d'),
            'termino' => Carbon::now()->addDay()->format('Y-m-d'),
        ]);
        $turma2->save();
    }
}
