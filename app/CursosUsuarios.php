<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CursosUsuarios extends Model
{
    protected $table = 'productosComplementos';

    protected $fillable = [
        'idCurso', 'idUsuario',
    ];
}
