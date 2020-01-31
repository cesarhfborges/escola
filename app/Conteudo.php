<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Conteudo extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'titulo',
        'modulo',
        'avatar',
        'tipo',
        'tipoURL',
        'descricao',
        'status',
    ];

    public function curso()
    {
        return $this->belongsTo(Curso::class, 'id');
    }
}
