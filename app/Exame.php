<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exame extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'curso_id',
        'titulo',
        'status',
    ];

    public function curso()
    {
        return $this->belongsTo(Curso::class, 'id');
    }
}
