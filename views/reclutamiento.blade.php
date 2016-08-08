@extends('layouts.app')

@section('title', 'Underworld Fansub | Proyectos')

@section('head_scripts')
<link href="/css/reclutamiento.css" rel="stylesheet" type="text/css">
<script src="/scripts/TweenMax.min.js"></script>
<script src="/scripts/reclutamiento.js"></script>
@endsection

@section('content')

    <div class="content">

        <form id="testform" class="contact_container">

            <h1>Reclutamiento</h1>
            <h2>Muchas gracias por tu interés en unirte a nosotros. Toda la ayuda es bienvenida. Respondiendo las siguientes preguntas nos ayudarás a distribuir las tareas dependiendo de lo que tengas intencion de hacer o aprender, cuanto tiempo puedes dedicarte a ello y que días podremos contar con tu ayuda. Aqui un post de que se hace en cada <a href="#" target="_blank">puesto.</a></h2>
            <br>

            <div class="form">

                <label for="txt_nombre">Nombre*</label>
                <input type="text" id="txt_nombre" name="txt_nombre">
                <br>
                <label for="txt_nick">Nick</label>
                <input type="text" id="txt_nick" name="txt_nick">
                <br>
                <label for="txt_email">Correo / E.mail*</label>
                <input type="email" id="txt_email" name="txt_email">
                <br>
                <label for="txt_pais">País</label>
                <input type="text" id="txt_pais" name="txt_pais">
                <br>
                <label for="txt_biografia">Cuentanos un poco de ti</label>
                <textarea id="txt_biografia" name="txt_biografia"></textarea>
                <br>
            </div>

            <div class="form">

                <label for="txt_fecha_nacimiento">Fecha de nacimiento</label>
                <input type="text" id="txt_fecha_nacimiento" name="txt_fecha_nacimiento">
                <br>
                <label for="cbo_sexo">Sexo</label>
                <select id="cbo_sexo" name="cbo_sexo" required="">
                                <option>Hombre</option>
                                <option>Mujer</option>
                                <option>Quimera</option>
                                <option>Indefinido</option>
                                </select>
                <br>
                <label for="cbo_puesto">Puesto a desempeñar</label>
                <select id="cbo_puesto" name="cbo_puesto" required="">
                                <option>Traductor</option>
                                <option>Editor</option>
                                <option>Corrector</option>
                                <option>Timmer</option>
                                <option>Karaoker</option>
                                <option>Encoder</option>
                                <option>Webmaster</option>
                                <option>Social Manager</option>
                                </select>
                <br>
                <label for="txt_experiencia">¿Tienes experiencia? Cuentanos.</label>
                <textarea id="txt_experiencia" name="txt_experiencia"></textarea>
                <br>
                <label for="cbo_tiempo_dedicacion">¿Cuánto tiempo podras dedicarnos?</label>
                <select id="cbo_tiempo_dedicacion" name="cbo_tiempo_dedicacion" required="">
                                <option>1 hora</option>
                                <option>2 horas</option>
                                <option>4 horas</option>
                                <option>6 horas</option>
                                <option>9 horas</option>
                                <option>Cuanto sea necesario</option>
                                </select>
                <br>
            </div>

            <div class="form">

                <label for="txt_dias_disponibles">¿Qué dias de la semana estaras disponible?</label>
                <textarea id="txt_dias_disponibles" name="txt_dias_disponibles"></textarea>
                <br>
                <label for="txt_dudas_comentarios">¿Dudas o comentarios?</label>
                <textarea id="txt_dudas_comentarios" name="txt_dudas_comentarios"></textarea>
                <br>
                <label for="cbo_team">¿Que team eres?</label>
                <select id="cbo_team" name="cbo_team" required="">
                                <option>Lolicon</option>
                                <option>Shotacon</option>
                                <option>Oppais</option>
                                <option>Yaoista</option>
                                </select>
                <br>
            </div>


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

            </form>

        </div>

@endsection
