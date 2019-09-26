<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{

    protected $table = 'config';

    protected $fillable = [
        'nome_site',
        'avatar',
        'favicon',
        'endereco',
        'bairro',
        'cidade',
        'uf',
        'cep',
        'rodape',
        'horario_sistema',
        'monetario',
        'smtp_ativo',
        'smtp_host',
        'smtp_porta',
        'smtp_email',
        'smtp_senha',
        'smtp_crypto',
    ];
}
