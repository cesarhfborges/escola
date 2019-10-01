<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cupom extends Model
{
    use SoftDeletes;

    protected $table = 'cupons';

    protected $fillable = [
        'nome',
        'validade',
        'ativacoes',
        'codigo',
    ];
}
