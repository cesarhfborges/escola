<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use QCod\ImageUp\HasImageUploads;

class Curso extends Model
{
    use SoftDeletes, HasImageUploads;

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
        'descricao'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    public function turmas(){
        return $this->hasMany(Turma::class, 'curso_id', 'id');
    }

    public function conteudo(){
        return $this->hasMany(Conteudo::class, 'curso_id', 'id');
    }
}
