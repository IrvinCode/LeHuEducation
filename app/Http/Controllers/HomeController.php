<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function tomarCurso(){

    }

    public function perfil(){
        return view('perfil');
    }

    public function nuevoCurso(){
        return view("cursos/nuevo");
    }

    public function crearCurso(Request $request){
        $titulo = $request->input('titulo');
        $intro = $request->input('introduccion');
        $link = $request->input('link');

        $data = array('Titulo'=>$titulo,"Presentacion"=>$intro,"contenido"=>$link);

        DB::table('cursos')->insert($data);
        return redirect('/');
    }
}
