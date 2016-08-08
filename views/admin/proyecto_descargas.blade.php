@extends('layouts.admin')

@section('content')
<div class="container spark-screen">

@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif

    <div class="row">


        <div class="panel panel-default">
           <div class="panel-heading"><b>{{$anime->titulo_romaji}}</b> | Descargas</div>
           <div class="panel-body">
              <a href="/admin/proyecto/{{$anime->id}}/agregar_descarga">Agregar Descarga</a>
               |
              <a href="/admin/proyecto/{{$anime->id}}/edit">Editar Proyecto</a>
           </div>
           <table class="table">
              <thead>
                 <tr>
                    <!--th>#</th-->
                    <th>Nombre</th>
                    <th>Opciones</th>
                 </tr>
              </thead>
              <tbody>

                @foreach($descargas as $descarga)
                <tr>
                    <!--th scope="row">{{$descarga->id}}</th-->
                    <td><a href="/admin/descarga/{{$descarga->id}}/edit">{{$descarga->nombre}}</a></td>
                    <td>
                        {!! Form::open([
                            'method' => 'DELETE',
                            'route' => ['admin.descarga.destroy', $descarga->id],
                            'onsubmit' => 'return confirm(\'¿Estas seguro de eliminar la descarga?\');'
                        ]) !!}
                            <input type="hidden" name="anime_id" value="{{$descarga->anime_id}}">
                            <a href="/admin/descarga/{{$descarga->id}}/edit" class="btn btn-default">Editar</a>
                            {!! Form::submit('Eliminar Descarga', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
              </tbody>
           </table>
        </div>


    </div>

</div>
@endsection
