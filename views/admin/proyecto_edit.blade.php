@extends('layouts.admin')

@section('content')

<div class="container spark-screen">

{{ Html::ul($errors->all()) }}

{{ Form::model($anime, array('route' => array('admin.proyecto.update', $anime->id),
  'method' => 'PUT', 'files' => true,
  'class' => 'form-horizontal', 'role' => 'form',
  )) }}


    <h1>Editar Proyecto</h1>
    <hr>

    <div class="row">

    <!-- left column -->
      <div class="col-md-3">

        <h3>Portada</h3>
        <div class="text-center">
          <img src="/images/animes/{{$anime->portada}}" class="avatar" alt="Avatar" style="max-width: 100%;">
          <h6>Sube una nueva Portada...</h6>
          <input type="file" class="form-control" name="portada">
        </div>

        <h3>Banner</h3>
        <div class="text-center">
          <img src="/images/animes_banners/{{$anime->banner}}" class="banner" alt="Banner" style="width: 100%;">
          <h6>Sube un nuevo Banner...</h6>
          <input type="file" class="form-control" name="banner">
        </div>

        <h3>Banner para el Horario</h3>
        <div class="text-center">
          <img src="/images/horario/{{$anime->horario}}" class="horario" alt="Banner para el Horario" style="width: 100%;">
          <h6>Sube un nuevo Banner para el Horario...</h6>
          <input type="file" class="form-control" name="horario">
        </div>

        <h3>Miniatura</h3>
        <div class="text-center">
          <img src="/images/animes_miniaturas/{{$anime->miniatura}}" class="miniatura" alt="Miniatura" style="width: 100%;">
          <h6>Sube una nueva Miniatura...</h6>
          <input type="file" class="form-control" name="miniatura">
        </div>

      </div>

    <!-- edit form column -->
      <div class="col-md-9 personal-info">

        <!--div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a>
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages to the user.
        </div-->

        <h3>Información del Proyecto</h3>


          <div class="form-group">
            <label class="col-lg-3 control-label">Título Romaji:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="titulo_romaji" value="{{$anime->titulo_romaji}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Título Ingles:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="titulo_ingles" value="{{$anime->titulo_ingles}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Título Jápones:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="titulo_japones" value="{{$anime->titulo_japones}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Url de Acceso:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="slug" value="{{$anime->slug}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Sinopsis:</label>
            <div class="col-lg-8">
                <textarea class="form-control" rows="5" name="sinopsis">{{$anime->sinopsis}}</textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Tipo:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select name="tipo" class="form-control">
                @foreach ($tipos as $tipo)
                  <option value="{{$tipo}}" @if($tipo == $anime->tipo)selected @endif>{{$tipo}}</option>
                @endforeach
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Estado:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select name="estado" class="form-control">
                @foreach ($estados as $estado)
                  <option value="{{$estado}}" @if($estado == $anime->estado)selected @endif>{{$estado}}</option>
                @endforeach
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Cantidad de Episodios:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="total_episodios" value="{{$anime->total_episodios}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Fuente del Video:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select name="fuente" class="form-control">
                @foreach ($fuentes as $fuente)
                  <option value="{{$fuente}}" @if($fuente == $anime->fuente)selected @endif>{{$fuente}}</option>
                @endforeach
                </select>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Géneros:</label>
            <div class="col-lg-8">
                @foreach ($generos as $genero)
                <label class="separadores"><input type="checkbox" name="generos[]"
                  value="{{$genero->id}}"
                  @if(in_array($genero->id, $anime->generos))
                    checked
                  @endif
                  >{{$genero->nombre}}</label>
                @endforeach
            </div>
          </div>
          <!--div class="form-group">
            <label class="col-lg-3 control-label">Staff:</label>
            <div class="col-lg-8">
              ::STAFF::
            </div>
          </div-->

          <div class="form-group">
            <label class="col-lg-3 control-label">Día de Emisión:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select name="dia_emision" class="form-control">
                @foreach ($dias_de_emision as $dia_emision)
                  <option value="{{$dia_emision}}" @if($dia_emision == $anime->dia_emision)selected @endif>{{$dia_emision}}</option>
                @endforeach
                </select>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">En Emisión:</label>
            <div class="col-lg-8">
              <label class="separadores"><input type="radio" name="en_emision" value="0"
                  @if($anime->en_emision == false)
                    checked
                  @endif
                  >No</label>
              <label class="separadores"><input type="radio" name="en_emision" value="1"
                  @if($anime->en_emision == true)
                    checked
                  @endif
                  >Si</label>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Temporada:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select name="temporada_id" class="form-control">
                @foreach ($temporadas as $temporada)
                  <option value="{{$temporada->id}}" @if($temporada->id == $anime->temporada_id)selected @endif>{{$temporada->nombre}}</option>
                @endforeach
                </select>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Resoluciones:</label>
            <div class="col-lg-8">
                <label class="separadores"><input type="checkbox" name="resoluciones[]" value="resolucion_1080p"
                  @if($anime->resolucion_1080p == true)
                    checked
                  @endif
                  >1080p</label>
                <label class="separadores"><input type="checkbox" name="resoluciones[]" value="resolucion_720p"
                  @if($anime->resolucion_720p == true)
                    checked
                  @endif
                  >720p</label>
                <label class="separadores"><input type="checkbox" name="resoluciones[]" value="resolucion_576p"
                  @if($anime->resolucion_576p == true)
                    checked
                  @endif
                  >576p</label>
                <label class="separadores"><input type="checkbox" name="resoluciones[]" value="resolucion_480p"
                  @if($anime->resolucion_480p == true)
                    checked
                  @endif
                  >480p</label>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Contenedores de Video:</label>
            <div class="col-lg-8">
                <label class="separadores"><input type="checkbox" name="contenedores_de_video[]" value="contenedor_mp4"
                  @if($anime->contenedor_mp4 == true)
                    checked
                  @endif
                  >MP4</label>
                <label class="separadores"><input type="checkbox" name="contenedores_de_video[]" value="contenedor_mkv"
                  @if($anime->contenedor_mkv == true)
                    checked
                  @endif
                  >MKV</label>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Idioma del Audio:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select name="idioma" class="form-control">
                @foreach ($idiomas_audio as $idioma)
                  <option value="{{$idioma}}" @if($idioma == $anime->idioma)selected @endif>{{$idioma}}</option>
                @endforeach
                </select>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Idioma del Subtitulo:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select name="subtitulo" class="form-control">
                @foreach ($idiomas_subtitulo as $subtitulo)
                  <option value="{{$subtitulo}}" @if($subtitulo == $anime->subtitulo)selected @endif>{{$subtitulo}}</option>
                @endforeach
                </select>
              </div>
            </div>
          </div>

          <h3>Información del Staff</h3>

          <div class="form-group">
            <label class="col-lg-3 control-label">Traductor:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select name="traductor_id" class="form-control">
                  <option value="0">Seleccionar</option>
                @foreach ($traductores as $traductor)
                  <option value="{{$traductor->usuario->id}}" @if($traductor->usuario->id == $anime->traductor_id)selected @endif>{{$traductor->usuario->name}}</option>
                @endforeach
                </select>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Karaoker:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select name="karaoker_id" class="form-control">
                  <option value="0">Seleccionar</option>
                @foreach ($karaokers as $karaoker)
                  <option value="{{$karaoker->usuario->id}}" @if($karaoker->usuario->id == $anime->karaoker_id)selected @endif>{{$karaoker->usuario->name}}</option>
                @endforeach
                </select>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Editor:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select name="editor_id" class="form-control">
                  <option value="0">Seleccionar</option>
                @foreach ($editores as $editor)
                  <option value="{{$editor->usuario->id}}" @if($editor->usuario->id == $anime->editor_id)selected @endif>{{$editor->usuario->name}}</option>
                @endforeach
                </select>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Corrector:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select name="corrector_id" class="form-control">
                  <option value="0">Seleccionar</option>
                @foreach ($correctores as $corrector)
                  <option value="{{$corrector->usuario->id}}" @if($corrector->usuario->id == $anime->corrector_id)selected @endif>{{$corrector->usuario->name}}</option>
                @endforeach
                </select>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Encoder:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select name="encoder_id" class="form-control">
                  <option value="0">Seleccionar</option>
                @foreach ($encoders as $encoder)
                  <option value="{{$encoder->usuario->id}}" @if($encoder->usuario->id == $anime->encoder_id)selected @endif>{{$encoder->usuario->name}}</option>
                @endforeach
                </select>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Uploader:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select name="uploader_id" class="form-control">
                  <option value="0">Seleccionar</option>
                @foreach ($uploaders as $uploader)
                  <option value="{{$uploader->usuario->id}}" @if($uploader->usuario->id == $anime->uploader_id)selected @endif>{{$uploader->usuario->name}}</option>
                @endforeach
                </select>
              </div>
            </div>
          </div>


          <h3>Información para las Descargas</h3>

          <div class="form-group">
            <label class="col-md-3 control-label">Videos:</label>
            <div class="col-md-8">
              <label class="separadores"><input type="checkbox" name="archivos[]" value="mp4_1080p"
                  @if($anime->mp4_1080p == true)
                    checked
                  @endif
                  >MP4 1080p</label>
              <label class="separadores"><input type="checkbox" name="archivos[]" value="mp4_720p"
                  @if($anime->mp4_720p == true)
                    checked
                  @endif
                  >MP4 720p</label>
              <label class="separadores"><input type="checkbox" name="archivos[]" value="mp4_576p"
                  @if($anime->mp4_576p == true)
                    checked
                  @endif
                  >MP4 576p</label>
              <label class="separadores"><input type="checkbox" name="archivos[]" value="mp4_720pSD"
                  @if($anime->mp4_720pSD == true)
                    checked
                  @endif
                  >MP4 720pSD</label>
              <br>
              <label class="separadores"><input type="checkbox" name="archivos[]" value="mkv_1080p"
                  @if($anime->mkv_1080p == true)
                    checked
                  @endif
                  >MKV 1080p</label>
              <label class="separadores"><input type="checkbox" name="archivos[]" value="mkv_720p"
                  @if($anime->mkv_720p == true)
                    checked
                  @endif
                  >MKV 720p</label>
              <label class="separadores"><input type="checkbox" name="archivos[]" value="mkv_576p"
                  @if($anime->mkv_576p == true)
                    checked
                  @endif
                  >MKV 576p</label>
              <label class="separadores"><input type="checkbox" name="archivos[]" value="mkv_480p"
                  @if($anime->mkv_480p == true)
                    checked
                  @endif
                  >MKV 480p</label>

            </div>
          </div>

          <!--div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="11111122333">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="11111122333">
            </div>
          </div-->
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Guardar Cambios">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancelar">
            </div>
          </div>

      </div>

    </div>

{!! Form::close() !!}
</div>
@endsection
