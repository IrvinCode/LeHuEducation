@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Bienvenido, {{ Auth::user()->name }} </div>

                    <div class="panel-body">
                        Aqui encontraras tus cursos cuando hayas iniciado uno!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
