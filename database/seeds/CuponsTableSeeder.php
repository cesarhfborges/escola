<?php

use App\Cupom;
use Illuminate\Database\Seeder;

class CuponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++){
            $cupom = new Cupom([
                'nome' => 'Cupom: '.$i,
                'validade' => \Carbon\Carbon::now()->addDays(($i + 1))->format('Y-m-d H:i:s'),
                'ativacoes' => 30,
                'codigo' => 'sdmanager brasilia'.$i,
            ]);
            $cupom->save();
        }
    }
}
