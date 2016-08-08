@extends('layouts.app')

@section('title', 'Underworld Fansub | We Never Die!')

@section('head_scripts')
<script src="/scripts/jssor.slider-20.min.js"></script>
<script src="/scripts/slider.js"></script>
<script src="/scripts/app.js"></script>
@endsection

@section('content')

    <div id="active-projects">
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block; background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url('images/slider/loading.gif') no-repeat center center; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>
        <div u="slides" style="position: absolute; left: 0px; top: 0px; width: 1020px; height: 270px; overflow: hidden;">
            <div>
                <a u="image" href="http://www.underworldfansub.net/proyecto/Re-zero"><img u="image" src="images/slider/slider3.jpg" /></a>
                <div id="project-nombre" u=caption t="0" d=-200>
                    Re:ZERO -Starting Life in Another World-
                </div>
                <div id="project-num" u=caption t="0" d=-200>
                    12/25
                </div>
            </div>
            <div>
                <a u="image" href="http://www.underworldfansub.net/proyecto/Sousei-no-Onmyouji"><img u="image" src="images/slider/slider5.jpg" /></a>
                <div id="project-nombre" u=caption t="0" d=-200>
                    Twin Star Exorcists
                </div>
                <div id="project-num" u=caption t="0" d=-200>
                    11/??
                </div>
            </div>
        </div>
            <span id="arrowleft" u="arrowleft" class="jssora09l">   </span>
            <span id="arrowright" u="arrowright" class="jssora09r"> </span>
        <div id="project-titulo">
            Simulcast
        </div>
    </div>

    <!-- ANUNCIO -->

    <div class="announces">
        <div class="title">Anuncios:</div>
        <div class="announces_body">
            @foreach($noticias as $noticia)
            <p><a class="anuncio" href="/noticias/{{$noticia->id}}">{{$noticia->titulo}}</a></p>
            @endforeach
        </div>
    </div>

    <!-- FIN ANUNCIO -->

    <div class="content">
        <div class="content_left">

            <div class="content_title">{{$home_titulo}}</div>

            @foreach($descargas as $descarga)
            <div class="home_episode">
                <a href="/proyecto/{{$descarga->anime->slug}}"><img src="/images/animes_miniaturas/{{$descarga->anime->miniatura}}" alt="{{$descarga->anime->titulo_romaji}}"></a>
                <a class="episode_link" href="/proyecto/{{$descarga->anime->slug}}" title="{{$descarga->anime->titulo_romaji}}">{{$descarga->anime->titulo_romaji}}</a>
                <div class="episode_name" title="{{$descarga->nombre}}">{{$descarga->nombre}}</div>
                <div class="tags">Tags:
                    <!--<a href="/proyecto/{{$descarga->anime->slug}}">{{$descarga->anime->titulo_romaji}}</a>,-->
                    <a href="/proyecto/{{$descarga->anime->slug}}">{{$descarga->anime->temporada['nombre']}}</a>
                </div>
            </div>
            @endforeach

            @foreach($proyectos_busqueda as $proyecto)
            <div class="home_episode">
                <a href="/proyecto/{{$proyecto->slug}}"><img src="/images/animes_miniaturas/{{$proyecto->miniatura}}" alt="{{$proyecto->titulo_romaji}}"></a>
                <a class="episode_link" href="/proyecto/{{$proyecto->slug}}" title="{{$proyecto->titulo_romaji}}">{{$proyecto->titulo_romaji}}</a>
                <div class="episode_name">{{$proyecto->fuente}}</div>
                <div class="tags">Tags:
                    <!--<a href="/proyecto/{{$proyecto->slug}}">{{$proyecto->titulo_romaji}}</a>,-->
                    <a href="/proyecto/{{$proyecto->slug}}">{{$proyecto->temporada['nombre']}}</a>
                </div>
            </div>
            @endforeach

        </div>


        <div class="sidebar">
            <div class="content_title">Facebook</div>
            <div class="widget_content">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.4&appId=571227002899053";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-page" data-href="https://www.facebook.com/Underworldfansub" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/Underworldfansub"><a href="https://www.facebook.com/Underworldfansub">UnderWorld Fansub</a></blockquote></div></div>

            </div>

            <div class="content_title">Afiliados</div>
            <div class="widget_content">
                <a href="http://www.anilista.com/" target="_blank"><img src="images/afiliates/anilista.jpg" style="width: 100%;"></a>
                <a href="http://animeshadowart.blogspot.com/" target="_blank"><img src="images/afiliates/shadow.jpg" style="width: 100%;"></a>
                <a href="http://animeopedex.blogspot.mx/" target="_blank"><img src="images/afiliates/animeopex.jpg" style="width: 100%;"></a>
                <a href="http://grupokashi.blogspot.mx/" target="_blank"><img src="images/afiliates/kashi.jpg" style="width: 100%;"></a>
                <a href="http://grupognofansub.blogspot.com/" target="_blank"><img src="images/afiliates/grupog.jpg" style="width: 100%;"></a>
                <a href="http://www.hentaikku.com/?codigo=frans" target="_blank"><img src="images/afiliates/hentaikuu.jpg" style="width: 100%;"></a>
                <a href="http://radiorakuen.blogspot.com.ar/" target="_blank"><img src="images/afiliates/rakuen.jpg" style="width: 100%;"></a>
            </div>


        </div>

    </div>
@endsection