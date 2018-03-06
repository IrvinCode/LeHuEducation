<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CursoController extends Controller
{
    public function introduccion(){
        return view("cursos/introduccion");
    }
}
