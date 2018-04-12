@extends('layouts.app')

@section('content')
    <style>
        input {
            padding: 5px;
            margin: 5px;
        }
        form {
            display: inline;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading" align="center">Curso Básico de HTML</div>

                    <div class="panel-body" align="center">
                        @if (Auth::user()->profesor == 1)
                            <form action="{{url('cursos/nuevo')}}" method="post">
                                {{ csrf_field() }}
                                <div>
                                    <label>Titulo</label><br><input type="text" name="titulo" placeholder="Curso de HTML" required>
                                </div>
                                <div>
                                    <label>Pequeña introducción</label><br><textarea name="introduccion" style="width:90%;height:150px;"></textarea>
                                </div>
                                <div>
                                    <label>link del tutorial</label><br><input type="text" name="link" placeholder="youtube.com/tuvideo" required>
                                </div>
                                <div>
                                    <input type="submit" name="submit" class="btn btn-primary" value="Guardar nuevo producto">
                                </div>
                            </form>
                        @else
                            <meta  http-equiv="refresh" content="0;URL=/">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
