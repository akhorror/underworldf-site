@extends('layouts.app')

@section('title', 'Underworld Fansub | Staff')

@section('head_scripts')
<link href="/css/staff.css" rel="stylesheet" type="text/css">
@endsection

@section('content')

    <div class="content">


        <div class="staff_banner" style="background-image: url('/images/staff_banners/{{$staff->banner}}');">
            <div class="avatar">
                <img src="/images/staff_avatars/{{$staff->avatar}}" alt="Frans">
            </div>
            <div class="nick"><!--♛ -->{{$staff->name}}</div>
        </div>



        <div class="staff_banner_separator"></div>

        <div class="staff_profile_container">

            <div class="left">

                <!--b>Tipo de cuenta:</b> Maou - Administrador General<br-->
                @if($staff->edad > 0)
                    <b>Edad:</b> {{$staff->edad}}<br>
                @endif

                @if(trim($staff->sexo) <> '')
                    <b>Sexo:</b> {{$staff->sexo}}<br>
                @endif

                @if(trim($staff->ubicacion) <> '')
                    <b>Ubicación:</b> {{$staff->ubicacion}}<br>
                @endif

                @if(trim($staff->zodiaco_oriental) <> '')
                    <b>Zodíaco oriental:</b>    {{$staff->zodiaco_oriental}}<br>
                @endif

                @if(trim($staff->zodiaco_occidental) <> '')
                    <b>Zodíaco occidental:</b> {{$staff->zodiaco_occidental}}<br>
                @endif

                @if(trim($staff->miembro_desde) <> '')
                    <b>Miembro desde:</b>  {{$staff->miembro_desde}}<br>
                @endif


                <b>Puestos:</b>
                <?php /*/*@foreach($roles as $rol)
                    {{$rol->rol->nombre}} /
                @endforeach*/?>

                {{ implode(" / ", $roles) }}<br>

                @if(trim($staff->descripcion) <> '')
                    <br>
                    <b>Acerca de mi:</b> {{$staff->descripcion}}<br>
                @endif

            </div><div class="right">

                <div class="staff_anime_box">
                    <h2>Animes Trabajados</h2>
                    <div class="staff_anime_container">
                        @foreach($proyectos as $proyecto)
                        <a href="/proyecto/{{$proyecto->slug}}" title="{{$proyecto->titulo_romaji}}">
                        <div class="anime">
                            <img src="/images/animes/{{$proyecto->portada}}" / alt="{{$proyecto->titulo_romaji}}">
                        </div>
                        </a>
                        @endforeach
                    </div>
                </div>
                <br>
                <div class="staff_anime_box">
                    <h2>Mis Waifus</h2>
                    <div class="staff_waifu_container">
                        @foreach($waifus as $waifu)
                        <a href="http://www.anilista.com/personaje/{{$waifu->anilista_id}}/{{$waifu->anilista_slug}}" title="{{$waifu->nombre}}" target="_blank">
                        <div class="waifu">
                            <img src="http://www.anilista.com/img/dir/personaje/regular/{{$waifu->anilista_id}}.jpg" / alt="{{$waifu->nombre}}">
                        </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
