@extends('layouts.app')

@section('content')
    <style>
        table, th, td {
            border: 1px solid black;
            margin: 7px;
            padding: 5px;
            text-align: center;
        }
        img {
            height: 100px;
            width: 100px;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    @if (Auth::guest())
                    <div class="panel-heading" align="center">Para ver los cursos tienes que tener cuenta, porfavor:</div>

                    <div class="panel-body">

                            <div align="center">
                                <form action="{{ url('login') }}" method="get">
                                    <input type="submit" class="btn btn-primary" value="Inicia sesion" name="Submit" />
                                </form>
                                <form action="{{ url('register') }}" method="get">
                                    <input type="submit" class="btn btn-primary" value="Registrate" name="Submit" />
                                </form>
                            </div>
                        @else
                    <div class="panel-heading" align="center">Aqui estan todos los cursos disponibles</div>

                    <div class="panel-body">
                        <table>
                            <thead>
                            <tr>
                                <th> Curso</th>
                                <th> Contenido</th>
                                <th> video</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($cursos as $curso){ ?>
                            <tr>
                                <td><?php echo $curso->Titulo ?></td>
                                <td><?php echo $curso->Presentacion ?></td>
                                <td><a href="https://www.<?php echo $curso->contenido ?>">Video Tutorial</a></td>
                                <td>
                                    {{--<form action="" method="post">--}}
                                        <input class="btn btn-success" type="submit" name="<?php echo $curso->id ?>"  value="Tomar curso">
                                    {{--</form>--}}
                                </td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
