<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<!-- disable iPhone inital scale -->
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<title>@yield('title')</title>

<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet" type="text/css">
<link href="/css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="/css/styles.css" rel="stylesheet" type="text/css">
<link href="/css/follow-sidebar.css" rel="stylesheet" type="text/css">
<link href="/css/slideshows.css" rel="stylesheet" type="text/css">
<link href="/css/announces.css" rel="stylesheet" type="text/css">
<link href="/css/search.css" rel="stylesheet" type="text/css">

<!-- media queries css -->
<!--link href="media-queries.css" rel="stylesheet" type="text/css"-->

<!-- html5.js for IE less than 9 -->
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- css3-mediaqueries.js for IE less than 9 -->
<!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

@yield('head_scripts')

  <link rel="icon" href="/images/favicon.png">
</head>

<body>


<header>

    <div class="logo">
        <a href="http://bit.ly/1S4Fmew" target="_blank" class="donate-button">Donate with PayPal™</a>
    </div>

    <div id="sb-search" class="sb-search">
        <form action="/">
            <input class="sb-search-input" placeholder="Aqui no encontraras yaoi..." type="search" value="" name="search" id="search">
            <input class="sb-search-submit" type="submit" value="">
            <span class="sb-icon-search"></span>
        </form>
    </div>

    <div id='cssmenu'>
        <ul>
            <li class='{{ $config['menu_selected'] == 'home' ? 'active' : 'last' }}'>
                <a href='/'><span>Home</span></a>
            </li>
            <li class='has-sub'>
                <a href='javascript:void(0)'><span>Proyectos</span></a>
                <ul>
                    <li class='has-sub'><a href='/proyectos/hdtv'><span>HDTV</span></a></li>
                    <li class='has-sub'><a href='/proyectos/bd'><span>BLU-RAY</span></a></li>
                    <li class='has-sub'><a href='/proyectos/peliculas-ovas'><span>Peliculas & Ovas</span></a></li>
                </ul>
            </li>
            <li class='{{ $config['menu_selected'] == 'horarios' ? 'active' : 'last' }}'>
                <a href='/horarios'><span>Horarios</span></a>
            </li>
            <li class='{{ $config['menu_selected'] == 'faq' ? 'active' : 'last' }}'>
                <a href='/faq'><span>F.A.Q.</span></a>
            </li>
            <li class='{{ $config['menu_selected'] == 'staff' ? 'active' : 'last' }}'>
                <a href='/staff'><span>Staff</span></a>
            </li>
            <li class='{{ $config['menu_selected'] == 'reclutamiento' ? 'active' : 'last' }}'>
                <a href='/reclutamiento'><span>Reclutamiento</span></a>
            </li>
            <li class='{{ $config['menu_selected'] == 'contacto' ? 'active' : 'last' }}'>
                <a href='/contacto'><span>Contacto</span></a></li>

            @if (Auth::guest())
            @else
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/admin') }}">Panel</a></li>
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Cerrar Sesión</a></li>
                    </ul>
                </li>
            @endif

        </ul>
    </div>

</header>

<div class="follow-sidebar">
    <a class="follow-facebook" href="http://www.facebook.com/Underworldfansub" target="_blank">
        <img class="alignnone" src="/images/social/facebook.png" alt="Facebook" title="Facebook" width="32" height="32" />
    </a>
    <a class="follow-twitter" href="https://twitter.com/UnderWorldFS" target="_blank">
        <img class="alignnone" src="/images/social/twitter.png" alt="" title="Twitter" width="32" height="32" />
    </a>
    <a class="follow-hentaikku" href="http://www.hentaikku.com/login" target="_blank">
        <img class="alignnone" src="/images/social/hentaikku.png" alt="Hentaikku" title="Hentaikku" width="32" height="32" />
    </a>
 </div>

<div class="container">

@yield('content')

</div>

<!-- CHAT -->
            <script id="cid0020000104539013233" data-cfasync="false" async src="//st.chatango.com/js/gz/emb.js" style="width: 285px;height: 500px;">{"handle":"uwfsubs","arch":"js","styles":{"a":"000000","b":100,"c":"FFFFFF","d":"FFFFFF","k":"000000","l":"000000","m":"000000","n":"FFFFFF","p":"10","q":"000000","r":100,"pos":"br","cv":1,"cvbg":"000000","cvw":150,"cvh":35,"fwtickm":1}}</script>
            <!-- FIN CHAT -->

<!-- INICIO JS BUSCADOR-->
<script src="/scripts/classie.js"></script>
<script src="/scripts/uisearch.js"></script>
<script>
    new UISearch( document.getElementById( 'sb-search' ) );
</script>
<!-- FIN JS BUSCADOR-->

<footer>

    <div class="copyright">
        <div class="left">Underworld Fansub © 2013 - 2016 by <span>FaNtAsMa</span><br>
        Ningún vídeo se encuentra alojado en nuestros servidores</div><div class="right">
            <div class="developer_logo"><img src="/images/social/inferos.png" alt="INFEROS STUDIO" title="INFEROS STUDIO" width="15" height="15"/>Inferos Studio</div>
            Web Design and Development by <a href="http://unbreakableside.wordpress.com/" target="_blank"><span>Bram</span></a> & <a href="http://www.frans.moe/" target="_blank"><span>Frans</span></a>
        </div>
    </div>

    <div style="background: url(http://whos.amung.us/swidget/underblog.gif); display: none;"></div>
</footer>

</body>
</html>