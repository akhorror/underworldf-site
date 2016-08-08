@extends('layouts.app')

@section('title', 'Underworld Fansub | Proyectos')

@section('head_scripts')
<link href="/css/proyectos.css" rel="stylesheet" type="text/css">
@endsection

@section('content')

    <div class="content content_proyectos">
        <div class="content_ser">

        @foreach ($proyecto_tipo_estados as $proyecto_tipo_estado)
            <!-- Proyect Types -->
            <div class="title">
            <h2>Series {{$proyecto_tipo_nombre}} {{$proyecto_tipo_estado['nombre']}}</h2>
            </div>

            @foreach ($proyecto_tipo_estado['proyectos'] as $proyecto)
            <a href="/proyecto/{{$proyecto->slug}}">
                <div class="item_serie">
                <img src="/images/animes/{{$proyecto->portada}}" width="225" height="318"/>
                <div class="text_container">
                            <div class="text_content">
                                <span><h3>{{$proyecto->titulo_romaji}}</h3></span>

                            </div>
                </div>
            </div>
            </a>
            @endforeach

            <div class="clearfix"></div>

            <!-- End Proyect Types -->
        @endforeach


        </div>
    </div>

@endsection
