@extends('layouts.admin')

@section('content')

<div class="container spark-screen">

{{ Html::ul($errors->all()) }}

{{ Form::model('',array('route' => array('admin.proyecto.store'),
  'method' => 'POST', 'files' => true,
  'class' => 'form-horizontal', 'role' => 'form',
  )) }}


    <h1>Editar Proyecto</h1>
    <hr>

    <div class="row">

    <!-- left column -->
      <div class="col-md-3">

        <h3>Portada</h3>
        <div class="text-center">
          <!--img src="/images/animes/" class="avatar" alt="Avatar" style="max-width: 100%;"-->
          <h6>Sube una nueva Portada...</h6>
          <input type="file" class="form-control" name="portada">
        </div>

        <h3>Banner</h3>
        <div class="text-center">
          <!--img src="/images/animes_banners/" class="banner" alt="Banner" style="width: 100%;"-->
          <h6>Sube un nuevo Banner...</h6>
          <input type="file" class="form-control" name="banner">
        </div>

        <h3>Banner para el Horario</h3>
        <div class="text-center">
          <!--img src="/images/horario/" class="horario" alt="Banner para el Horario" style="width: 100%;"-->
          <h6>Sube un nuevo Banner para el Horario...</h6>
          <input type="file" class="form-control" name="horario">
        </div>

        <h3>Miniatura</h3>
        <div class="text-center">
          <!--img src="/images/animes_miniaturas/" class="miniatura" alt="Miniatura" style="width: 100%;"-->
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
              <input class="form-control" type="text" name="titulo_romaji" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Título Ingles:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="titulo_ingles" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Título Jápones:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="titulo_japones" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Url de Acceso:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="slug" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Sinopsis:</label>
            <div class="col-lg-8">
                <textarea class="form-control" rows="5" name="sinopsis"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Tipo:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select name="tipo" class="form-control">
                @foreach ($tipos as $tipo)
                  <option value="{{$tipo}}">{{$tipo}}</option>
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
                  <option value="{{$estado}}">{{$estado}}</option>
                @endforeach
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Cantidad de Episodios:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="total_episodios" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Fuente del Video:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select name="fuente" class="form-control">
                @foreach ($fuentes as $fuente)
                  <option value="{{$fuente}}">{{$fuente}}</option>
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
                  <option value="{{$dia_emision}}">{{$dia_emision}}</option>
                @endforeach
                </select>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">En Emisión:</label>
            <div class="col-lg-8">
              <label class="separadores"><input type="radio" name="en_emision" value="0"
                  checked>No</label>
              <label class="separadores"><input type="radio" name="en_emision" value="1"
                  >Si</label>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Temporada:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select name="temporada_id" class="form-control">
                @foreach ($temporadas as $temporada)
                  <option value="{{$temporada->id}}">{{$temporada->nombre}}</option>
                @endforeach
                </select>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Resoluciones:</label>
            <div class="col-lg-8">
                <label class="separadores"><input type="checkbox" name="resoluciones[]" value="resolucion_1080p"
                  >1080p</label>
                <label class="separadores"><input type="checkbox" name="resoluciones[]" value="resolucion_720p"
                  >720p</label>
                <label class="separadores"><input type="checkbox" name="resoluciones[]" value="resolucion_576p"
                  >576p</label>
                <label class="separadores"><input type="checkbox" name="resoluciones[]" value="resolucion_480p"
                  >480p</label>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Contenedores de Video:</label>
            <div class="col-lg-8">
                <label class="separadores"><input type="checkbox" name="contenedores_de_video[]" value="contenedor_mp4"
                  >MP4</label>
                <label class="separadores"><input type="checkbox" name="contenedores_de_video[]" value="contenedor_mkv"
                  >MKV</label>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Idioma del Audio:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select name="idioma" class="form-control">
                @foreach ($idiomas_audio as $idioma)
                  <option value="{{$idioma}}">{{$idioma}}</option>
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
                  <option value="{{$subtitulo}}">{{$subtitulo}}</option>
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
                  <option value="{{$traductor->usuario->id}}">{{$traductor->usuario->name}}</option>
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
                  <option value="{{$karaoker->usuario->id}}">{{$karaoker->usuario->name}}</option>
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
                  <option value="{{$editor->usuario->id}}">{{$editor->usuario->name}}</option>
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
                  <option value="{{$corrector->usuario->id}}">{{$corrector->usuario->name}}</option>
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
                  <option value="{{$encoder->usuario->id}}">{{$encoder->usuario->name}}</option>
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
                  <option value="{{$uploader->usuario->id}}">{{$uploader->usuario->name}}</option>
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
                  >MP4 1080p</label>
              <label class="separadores"><input type="checkbox" name="archivos[]" value="mp4_720p"
                  >MP4 720p</label>
              <label class="separadores"><input type="checkbox" name="archivos[]" value="mp4_576p"
                  >MP4 576p</label>
              <label class="separadores"><input type="checkbox" name="archivos[]" value="mp4_720pSD"
                  >MP4 720pSD</label>
              <br>
              <label class="separadores"><input type="checkbox" name="archivos[]" value="mkv_1080p"
                  >MKV 1080p</label>
              <label class="separadores"><input type="checkbox" name="archivos[]" value="mkv_720p"
                  >MKV 720p</label>
              <label class="separadores"><input type="checkbox" name="archivos[]" value="mkv_576p"
                  >MKV 576p</label>
              <label class="separadores"><input type="checkbox" name="archivos[]" value="mkv_480p"
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
              <input type="submit" class="btn btn-primary" value="Agregar Proyecto">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancelar">
            </div>
          </div>

      </div>

    </div>

{!! Form::close() !!}
</div>
@endsection
