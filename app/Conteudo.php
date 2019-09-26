<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Conteudo extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'nome',
        'categoria_id',
        'custo',
        'preco',
        'margem',
        'arredondar',
        'configuracao',
        'sessao',
        'avatar',
        'descricao',
        'status',
    ];

    public function turma()
    {
        return $this->belongsTo(Turma::class, 'id');
    }
}
