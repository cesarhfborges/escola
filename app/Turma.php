<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Turma extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'curso_id',
        'tipo',
        'inicio',
        'termino',
    ];

    public function curso()
    {
        return $this->belongsTo(Curso::class, 'curso_id');
    }

    public function conteudo()
    {
        return $this->hasMany(Conteudo::class, 'turma_id');
    }

    public function exames()
    {
        return $this->hasMany(Exame::class, 'turma_id');
    }
}
