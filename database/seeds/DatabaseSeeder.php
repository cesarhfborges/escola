<?php

use App\Conteudo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriasTableSeeder::class);
        $this->call(CursosTableSeeder::class);
        $this->call(TurmasSeeder::class);
        $this->call(ConteudosSeeder::class);
        $this->call(ExamesSeeder::class);
    }
}
