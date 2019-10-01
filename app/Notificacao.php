<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notificacao extends Model
{
    use SoftDeletes;

    protected $table = 'notificacoes';

    protected $fillable = [
        'user_id',
        'url',
        'descricao',
    ];
}
