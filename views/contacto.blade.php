@extends('layouts.app')

@section('title', 'Underworld Fansub | Proyectos')

@section('head_scripts')
<link href="/css/contacto.css" rel="stylesheet" type="text/css">
<script src="/scripts/TweenMax.min.js"></script>
<script src="/scripts/contacto.js"></script>
@endsection

@section('content')

<div class="content">

    <form id="testform" class="contact_container">

        <h1>Contacto</h1>
        <h2>Contactanos mediante el formulario o puedes enviarnos un mensaje<br> a cualquiera de nuestras redes sociales (<a href="https://twitter.com/underworldfs" target="_blank">Twitter</a> o <a href="https://www.facebook.com/Underworldfansub" target="_blank">Facebook</a>)</h2>
        <br>

        <div class="imagen-kawaii">
            <img src="images/general/kawaii.png">
        </div>

        <div class="form">

            <label for="txt_nombre">Nombre*</label>
            <input type="text" id="txt_nombre" name="txt_nombre">
            <br>
            <label for="txt_nick">Nick</label>
            <input type="text" id="txt_nick" name="txt_nick">
            <br>
            <label for="txt_email">Correo / E.mail*</label>
            <input type="text" id="txt_email" name="txt_email">
            <br>
            <label for="txt_web">Página Web / Facebook</label>
            <input type="text" id="txt_web" name="txt_web">
            <br>
            <label for="txt_mensaje">¿Qué nos quieres decir? *</label>
            <textarea id="txt_mensaje" name="txt_mensaje"></textarea>
            <br>

            <div class="send">
                <div class="send-indicator">
                    <div class="send-indicator-dot"></div>
                    <div class="send-indicator-dot"></div>
                    <div class="send-indicator-dot"></div>
                    <div class="send-indicator-dot"></div>
                </div>
                <button class="send-button">
                    <div class="sent-bg"></div>
                    <i class="fa fa-send send-icon"></i>
                    <i class="fa fa-check sent-icon"></i>
                </button>


                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="800">
                      <defs>
                        <filter id="goo">
                          <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                          <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                          <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
                        </filter>
                        <filter id="goo-no-comp">
                          <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                          <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                        </filter>
                      </defs>
                    </svg>
            </div>

        </div>

    </form>



</div>

@endsection
