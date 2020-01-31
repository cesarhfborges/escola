<?php

use App\Config;
use Illuminate\Database\Seeder;

class ConfigTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $config = new Config([
            'nome_site' => 'Escola',
            'avatar' => '',
            'favicon' => 'assets/img/favicon.png',
            'endereco' => 'Ade Conjunto 22',
            'bairro' => 'Taguatinga',
            'cidade' => 'Brasilia',
            'uf' => 'DF',
            'rodape' => 'Todos do direitos reservados a <a href="{{ route(\'home\') }}" target="_blank">{{ config(\'app.name\', \'SdManager\') }}</a> &copy; <script> document.write(new Date().getFullYear())</script>.',
            'horario_sistema' => '-03:00',
            'cep' => '71000000',
            'monetario' => 'R$',
            'smtp_ativo' => true,
            'smtp_host' => 'smtp.gmail.com',
            'smtp_porta' => '587',
            'smtp_email' => 'exemple@gmail.com',
            'smtp_senha' => 'password',
            'smtp_cripto' => 'TLS',
        ]);
        $config->save();
    }
}
