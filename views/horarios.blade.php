@extends('layouts.app')

@section('title', 'Underworld Fansub | Horarios')

@section('head_scripts')
<link href="/css/horario.css" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <div class="content content_horario">

        <div class="content_left">

            <h1>Horario de Animes de Temporada</h1>

            @foreach ($dias as $dia)
            <div class="item_day">
                <h2>{{$dia['nombre']}}</h2>

                @foreach ($dia['proyectos'] as $proyecto)
                <a href="/proyecto/{{$proyecto->slug}}">
                <div class="item_anime">
                    <img src="/images/horario/{{$proyecto->horario}}">
                    <div class="text_container">
                        <div class="text_content">
                            <span><h3>{{$proyecto->titulo_romaji}}</h3></span>
                        </div>
                    </div>
                </div>
                </a>
                @endforeach

            </div>
            @endforeach


        </div>
        <div class="sidebar">
            <div class="content_title"><h3>Importante</h3></div>
            <div class="widget_content">
                <img src="images/horario/aviso.jpg" style="width: 100%;">
                <h1>~Mas información~</h1>
                <a href="http://anichart.net/" target="_blank"><img src="images/horario/anichart.jpg" style="width: 100%;"></a>
                <a href="http://www.anilista.com/" target="_blank"><img src="images/afiliates/anilista.jpg" style="width: 100%;"></a>
                <a href="http://www.crunchyroll.com/" target="_blank"><img src="images/horario/crunchy.jpg" style="width: 100%;"></a>
                <a href="http://www.funimation.com/" target="_blank"><img src="images/horario/funi.jpg" style="width: 100%;"></a>
                <a href="http://www.hentaikku.com/?codigo=frans" target="_blank"><img src="images/afiliates/hentaikuu.jpg" style="width: 100%;"></a>
                <a href="http://myanimelist.net/" target="_blank"><img src="images/horario/myanimelist.jpg" style="width: 100%;"></a>
            </div>


        </div>
</div>
@endsection
