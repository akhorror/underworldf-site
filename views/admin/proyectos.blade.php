@extends('layouts.admin')

@section('content')
<div class="container spark-screen">

@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif

    <div class="row">

        @foreach ($proyecto_tipo_estados as $proyecto_tipo_estado)
            <!-- Proyect Types -->
            <div class="title">
            <h2>Series {{$proyecto_tipo_nombre}} {{$proyecto_tipo_estado['nombre']}}</h2>
            </div>

            @foreach ($proyecto_tipo_estado['proyectos'] as $proyecto)

            <div class="media">
               <div class="media-left">
                    <a href="/admin/proyecto/{{$proyecto->id}}/edit">
                        <img class="media-object" alt="{{$proyecto->titulo_romaji}}" src="/images/animes/{{$proyecto->portada}}" style="width: 64px; height: 64px;">
                    </a>
                </div>
               <div class="media-body">
                  <h4 class="media-heading">
                    <a href="/admin/proyecto/{{$proyecto->id}}/edit">{{$proyecto->titulo_romaji}}</a></h4>
                    {{$proyecto->sinopsis}}
                    <br>

                    {!! Form::open([
                        'method' => 'DELETE',
                        'route' => ['admin.proyecto.destroy', $proyecto->id],
                        'onsubmit' => 'return confirm(\'¿Estas seguro de eliminar el proyecto?\');'
                    ]) !!}
                        <input type="hidden" name="proyecto_tipo" value="{{$tipo}}">
                        <a href="/admin/proyecto/{{$proyecto->id}}/edit" class="btn btn-default">Editar</a>
                        <a href="/admin/proyecto/{{$proyecto->id}}/descargas" class="btn btn-default">Descargas</a>
                        {!! Form::submit('Eliminar Proyecto', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
               </div>
            </div>

            @endforeach

            <!-- End Proyect Types -->
        @endforeach

    </div>

</div>
@endsection
