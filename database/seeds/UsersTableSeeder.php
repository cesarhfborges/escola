<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nome' => 'Administrador',
            'sobrenome' => Str::random(10),
            'email' => 'cesar@sdredes.com.br',
            'password' => bcrypt('admin'),
            'email_verified_at' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
//        DB::table('users')->insert([
//            'nome' => Str::random(10),
//            'email' => Str::random(10).'@gmail.com',
//            'password' => bcrypt('password'),
//        ]);
    }
}
