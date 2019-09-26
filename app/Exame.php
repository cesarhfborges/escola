<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exame extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'turma_id',
        'titulo',
        'status',
    ];

    public function turma()
    {
        return $this->belongsTo(Turma::class, 'id');
    }
}
