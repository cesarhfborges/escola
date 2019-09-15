<?php

use App\Categoria;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categoria = new Categoria([
            'nome' => 'Geral',
            'avatar' => 'assets/img/round-default.png',
            'descricao' => 'General'
        ]);

        $categoria->save();
    }
}
