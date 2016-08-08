@extends('layouts.app')

@section('title', 'Underworld Fansub | Proyectos')

@section('head_scripts')
<link href="/css/proyecto.css" rel="stylesheet" type="text/css">
@endsection

@section('content')

<div class="content content_proyecto" style="
    background-image: url('/images/animes_banners/{{$proyecto->banner}}');
    background-size: contain;
    ">
    <div class="content_proyecto_banner">
        <h1>{{$proyecto->titulo_romaji}}</h1>
        <div class="content_proyecto_half">
            <img class="content_proyecto_avatar" src="/images/animes/{{$proyecto->portada}}">
            <div class="proyecto_anime_info">
                <div class="proyecto_ficha_titulo">Ficha Técnica</div>
                <div class="proyecto_ficha_fila"><b>Estado:</b> {{$proyecto->estado}}</div>
                <div class="proyecto_ficha_fila"><b>Capitulos:</b> {{$proyecto->total_episodios}}</div>
                <div class="proyecto_ficha_fila"><b>Fuente:</b> {{$proyecto->fuente}}</div>
                <div class="proyecto_ficha_fila"><b>Géneros:</b>
                    <?php $i = 0; ?>
                    @foreach($generos as $genero)
                        <?php $i++; ?>
                        {{$genero->nombre}}@if($i < count($generos)), @endif
                    @endforeach
                </div>
                <div class="proyecto_ficha_fila"><b>Resolución:</b>
                    @if($proyecto->resolucion_1080p)
                    <b class="proyecto_resolucion">1920×1080</b>
                    @endif

                    @if($proyecto->resolucion_720p)
                    <b class="proyecto_resolucion">1280×720</b>
                    @endif

                    @if($proyecto->resolucion_576p)
                    <b class="proyecto_resolucion">720x576</b>
                    @endif

                    @if($proyecto->resolucion_480p)
                    <b class="proyecto_resolucion">848 x 480</b>
                    @endif

                </div>
                <div class="proyecto_ficha_fila"><b>Contenedor:</b>

                    @if($proyecto->contenedor_mp4)
                    <b class="proyecto_resolucion">MP4</b>
                    @endif

                    @if($proyecto->contenedor_mkv)
                    <b class="proyecto_resolucion">MKV</b>
                    @endif

                </div>
                <div class="proyecto_ficha_fila"><b>Idioma Audio:</b> {{$proyecto->idioma}}</div>
                <div class="proyecto_ficha_fila"><b>Idioma Subtítulos:</b> {{$proyecto->subtitulo}}</div>
            </div>
        </div><div class="content_proyecto_half">
            <div class="proyecto_ficha_titulo">Sinopsis</div>
            <div class="proyecto_ficha_fila">{{$proyecto->sinopsis}}</div>
        </div>
    </div>
    <div class="content_proyecto_staff">

        @foreach ($staff_array as $staff)
        <div class="content_proyecto_staff_item">{{$staff['rol']}}: <span>{{$staff['name']}}</a></span></div>
        @endforeach

        @if( $proyecto->traductor !== null)
        <div class="content_proyecto_staff_item">Traductor: <span><a href="/staff/{{$proyecto->traductor->name}}" title="{{$proyecto->traductor->name}}">{{$proyecto->traductor->name}}</a></span></div>
        @endif

        @if( $proyecto->karaoker !== null)
        <div class="content_proyecto_staff_item">Karaoker: <span><a href="/staff/{{$proyecto->karaoker->name}}" title="{{$proyecto->karaoker->name}}">{{$proyecto->karaoker->name}}</a></span></div>
        @endif

        @if( $proyecto->editor !== null)
        <div class="content_proyecto_staff_item">Editor: <span><a href="/staff/{{$proyecto->editor->name}}" title="{{$proyecto->editor->name}}">{{$proyecto->editor->name}}</a></span></div>
        @endif

        @if( $proyecto->corrector !== null)
        <div class="content_proyecto_staff_item">Corrector: <span><a href="/staff/{{$proyecto->corrector->name}}" title="{{$proyecto->corrector->name}}">{{$proyecto->corrector->name}}</a></span></div>
        @endif

        @if( $proyecto->encoder !== null)
        <div class="content_proyecto_staff_item">Encoder: <span><a href="/staff/{{$proyecto->encoder->name}}" title="{{$proyecto->encoder->name}}">{{$proyecto->encoder->name}}</a></span></div>
        @endif

        @if( $proyecto->uploader !== null)
        <div class="content_proyecto_staff_item">Uploader: <span><a href="/staff/{{$proyecto->uploader->name}}" title="{{$proyecto->uploader->name}}">{{$proyecto->uploader->name}}</a></span></div>
        @endif

    </div>




    <div class="content_proyecto_reporte_title"><a href="/reporte" target="_blank">¡Reporta errores o links caídos presionando aquí!</a></div>

    <div class="content_proyecto_downloads_title">Descargas</div>

    <div class="content_proyecto_downloads_header count_{{$total_tipos_archivo}}">
        <div class="content_proyecto_downloads_episode_column">Nombre del Capítulo / Volumen</div>

        @if($proyecto->mkv_1080p)
            <div class="content_proyecto_downloads_format_column">MKV [1080p]</div>
        @endif

        @if($proyecto->mkv_720p)
            <div class="content_proyecto_downloads_format_column">MKV [720p]</div>
        @endif

        @if($proyecto->mkv_576p)
            <div class="content_proyecto_downloads_format_column">MKV [576p]</div>
        @endif

        @if($proyecto->mkv_480p)
            <div class="content_proyecto_downloads_format_column">MKV [480p]</div>
        @endif

        @if($proyecto->mp4_1080p)
            <div class="content_proyecto_downloads_format_column">MP4 [1080p]</div>
        @endif

        @if($proyecto->mp4_720p)
            <div class="content_proyecto_downloads_format_column">MP4 [720p]</div>
        @endif

        @if($proyecto->mp4_576p)
            <div class="content_proyecto_downloads_format_column">MP4 [576p]</div>
        @endif

        @if($proyecto->mp4_720pSD)
            <div class="content_proyecto_downloads_format_column">MP4 [720pSD]</div>
        @endif

    </div>

    @foreach($episodios as $episodio)
    <!--item-->
    <div class="content_proyecto_downloads_body count_{{$total_tipos_archivo}}">
        <div class="content_proyecto_downloads_episode_column">{{$episodio['nombre']}}</div>

        @if($proyecto->mkv_1080p)
        <div class="content_proyecto_downloads_format_column">
            @foreach($episodio['mkv_1080p'] as $archivo)
                @if($archivo['url'] <> '')
                    <a href="{{$archivo['url']}}" target="_blank"><img src="/images/servers/{{$archivo['servidor']}}.png" /></a>
                @endif
            @endforeach
        </div>
        @endif

        @if($proyecto->mkv_720p)
        <div class="content_proyecto_downloads_format_column">
            @foreach($episodio['mkv_720p'] as $archivo)
                @if($archivo['url'] <> '')
                    <a href="{{$archivo['url']}}" target="_blank"><img src="/images/servers/{{$archivo['servidor']}}.png" /></a>
                @endif
            @endforeach
        </div>
        @endif

        @if($proyecto->mkv_576p)
        <div class="content_proyecto_downloads_format_column">
            @foreach($episodio['mkv_576p'] as $archivo)
                @if($archivo['url'] <> '')
                    <a href="{{$archivo['url']}}" target="_blank"><img src="/images/servers/{{$archivo['servidor']}}.png" /></a>
                @endif
            @endforeach
        </div>
        @endif

        @if($proyecto->mkv_480p)
        <div class="content_proyecto_downloads_format_column">
            @foreach($episodio['mkv_480p'] as $archivo)
                @if($archivo['url'] <> '')
                    <a href="{{$archivo['url']}}" target="_blank"><img src="/images/servers/{{$archivo['servidor']}}.png" /></a>
                @endif
            @endforeach
        </div>
        @endif

        @if($proyecto->mp4_1080p)
        <div class="content_proyecto_downloads_format_column">
            @foreach($episodio['mp4_1080p'] as $archivo)
                @if($archivo['url'] <> '')
                    <a href="{{$archivo['url']}}" target="_blank"><img src="/images/servers/{{$archivo['servidor']}}.png" /></a>
                @endif
            @endforeach
        </div>
        @endif

        @if($proyecto->mp4_720p)
        <div class="content_proyecto_downloads_format_column">
            @foreach($episodio['mp4_720p'] as $archivo)
                @if($archivo['url'] <> '')
                    <a href="{{$archivo['url']}}" target="_blank"><img src="/images/servers/{{$archivo['servidor']}}.png" /></a>
                @endif
            @endforeach
        </div>
        @endif

        @if($proyecto->mp4_576p)
        <div class="content_proyecto_downloads_format_column">
            @foreach($episodio['mp4_576p'] as $archivo)
                @if($archivo['url'] <> '')
                    <a href="{{$archivo['url']}}" target="_blank"><img src="/images/servers/{{$archivo['servidor']}}.png" /></a>
                @endif
            @endforeach
        </div>
        @endif

        @if($proyecto->mp4_720pSD)
        <div class="content_proyecto_downloads_format_column">
            @foreach($episodio['mp4_720pSD'] as $archivo)
                @if($archivo['url'] <> '')
                    <a href="{{$archivo['url']}}" target="_blank"><img src="/images/servers/{{$archivo['servidor']}}.png" /></a>
                @endif
            @endforeach
        </div>
        @endif

    </div>
    <!--item-->
    @endforeach

</div>

<div style="background:#393939;float: left;width: 100%;height:30px;">
</div>
<div style="background:#000;padding:10px;float: left;width: 100%;">
    <hentaikku:comments app_id="3" href="{{ url('/proyecto/'.$proyecto->slug) }}"></hentaikku:comments>
    <script type="text/javascript" src="http://www.anikku.moe/js/comments.sdk.min.js"></script>

    <div id="disqus_thread"></div>
    <script>
    /**
    * RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    * LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL; // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');

    s.src = '//uwsubs.disqus.com/embed.js';

    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>


</div>



@endsection
