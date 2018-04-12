<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cursos;
use App\Http\Requests;

class CursoController extends Controller
{
    public function introduccion(Request $request){
        $cursos = Cursos::all();
        return view("cursos/curso")->with('cursos', $cursos);
    }
}
