@extends('layouts.admin')

@section('content')

<div class="container spark-screen">

@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif

{{ Html::ul($errors->all()) }}

{{ Form::model($user, array('route' => array('admin.usuario.update', $user->id),
  'method' => 'PUT', 'files' => true,
  'class' => 'form-horizontal', 'role' => 'form',
  )) }}


    <h1>Editar Usuario</h1>
    <hr>

    <div class="row">

    <!-- left column -->
      <div class="col-md-3">

        <h3>Avatar</h3>
        <div class="text-center">
          <img src="/images/staff_avatars/{{$user->avatar}}" class="avatar" alt="Avatar" style="max-width: 100%;">
          <h6>Sube un nuevo Avatar...</h6>
          <input type="file" class="form-control" name="avatar">
        </div>

        <h3>Banner</h3>
        <div class="text-center">
          <img src="/images/staff_banners/{{$user->banner}}" class="banner" alt="Banner" style="width: 100%;">
          <h6>Sube un nuevo Banner...</h6>
          <input type="file" class="form-control" name="banner">
        </div>

      </div>

    <!-- edit form column -->
      <div class="col-md-9 personal-info">

        <h3>Información del Usuario</h3>


          <div class="form-group">
            <label class="col-lg-3 control-label">Nombre:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="name" value="{{$user->name}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="email" name="email" value="{{$user->email}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Edad:</label>
            <div class="col-lg-8">
              <input class="form-control" type="number" min="0" name="edad" value="{{$user->edad}}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Sexo:</label>
            <div class="col-lg-8">
                <select name="sexo" class="form-control">
                @foreach ($sexos as $sexo)
                  <option value="{{$sexo}}" @if($sexo == $user->sexo)selected @endif>{{$sexo}}</option>
                @endforeach
                </select>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Ubicación:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="ubicacion" value="{{$user->ubicacion}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Zodiaco Oriental:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="zodiaco_oriental" value="{{$user->zodiaco_oriental}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Zodiaco Occidental:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="zodiaco_occidental" value="{{$user->zodiaco_occidental}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Miembro desde:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="miembro_desde" value="{{$user->miembro_desde}}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Sobre mi:</label>
            <div class="col-lg-8">
                <textarea class="form-control" rows="5" name="descripcion">{{$user->descripcion}}</textarea>
            </div>
          </div>


        <h3>Waifus</h3>

          <div class="form-group" id="waifus_lista">
            @foreach ($waifus as $waifu)

            <div class="media" id="personaje_{{$waifu->anilista_id}}">
               <div class="media-left">
                    <a href="http://www.anilista.com/personaje/{{$waifu->anilista_id}}/{{$waifu->anilista_slug}}" target="_blank">
                        <img class="media-object" alt="{{$waifu->nombre}}" src="http://www.anilista.com/img/dir/personaje/mediano/{{$waifu->anilista_id}}.jpg" style="width: 54px; height: 64px;">
                    </a>
                </div>
               <div class="media-body">
                  <h4 class="media-heading">
                    <a href="http://www.anilista.com/personaje/{{$waifu->anilista_id}}/{{$waifu->anilista_slug}}" target="_blank">{{$waifu->nombre}}</a></h4>
                    <a href="javascript:eliminar_personaje({{$waifu->anilista_id}},true)" class="btn btn-default">Eliminar</a>
                    <br>
               </div>
            </div>

            @endforeach
          </div>


          <div class="form-group">
            <label class="col-lg-3 control-label">Buscar Waifus:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" id="txt_nombre_personaje" value="">
              <a href="javascript:buscar_personaje();" class="btn btn-success">Buscar</a>
            </div>
          </div>

           <div class="form-group" id="resultados_personajes_contenedor" style="display:none;">
            <label class="col-lg-3 control-label">Resultados:</label>
            <div id="resultados_personajes" style="max-height: 310px;overflow-y: auto;">

            </div>
          </div>

          <div style="display:none;" id="personajes_inputs">

          </div>


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


@section('footer_scripts')
<script>

function generar_plantilla(item){
  var html = '' +
              '<div class="media" id="personaje_'+item['id']+'">'+
              '   <div class="media-left">'+
              '        <a href="http://www.anilista.com/personaje/'+item['id']+'/'+item['slug']+'" target="_blank">'+
              '            <img class="media-object" alt="'+item['nombre']+'" src="http://www.anilista.com/img/dir/personaje/mediano/'+item['id']+'.jpg" style="width: 54px; height: 64px;">'+
              '        </a>'+
              '    </div>'+
              '   <div class="media-body">'+
              '      <h4 class="media-heading">'+
              '        <a href="http://www.anilista.com/personaje/'+item['id']+'/'+item['slug']+'" target="_blank">'+item['nombre']+'</a></h4>'+
              '        <a href="javascript:agregar_personaje('+item['id']+');" class="btn btn-default">Agregar</a>'+
              '        <br>'+
              '   </div>'+
              '</div>';
  return html;
}

function generar_plantilla_borrar(item){
  var html = '' +
              '<div class="media" id="personaje_'+item['id']+'">'+
              '   <div class="media-left">'+
              '        <a href="http://www.anilista.com/personaje/'+item['id']+'/'+item['slug']+'" target="_blank">'+
              '            <img class="media-object" alt="'+item['nombre']+'" src="http://www.anilista.com/img/dir/personaje/mediano/'+item['id']+'.jpg" style="width: 54px; height: 64px;">'+
              '        </a>'+
              '    </div>'+
              '   <div class="media-body">'+
              '      <h4 class="media-heading">'+
              '        <a href="http://www.anilista.com/personaje/'+item['id']+'/'+item['slug']+'" target="_blank">'+item['nombre']+'</a></h4>'+
              '        <a href="javascript:eliminar_personaje('+item['id']+',false);" class="btn btn-default">Eliminar</a>'+
              '        <br>'+
              '   </div>'+
              '</div>';
  return html;
}

var personajes = [];

function buscar_personaje(){
  var nombre = $("#txt_nombre_personaje").val();
  $.get('/admin/usuario/buscar_personaje/'+nombre, function(data) {
    var html = '';

    $.each(data.items, function(k, item) {
      personajes[item.id] = item;
      html = html + generar_plantilla(item);
    });

    $("#resultados_personajes").html(html);
    $("#resultados_personajes_contenedor").show();
  });
}

function agregar_personaje(id){
  var item = personajes[id];
  //var html = $("#personaje_"+id);
  var html = generar_plantilla_borrar(item);
  $("#waifus_lista").append(html)

  var html_input =  '' +
                    '<input class="personaje_'+item['id']+'" name="personaje_agregar_id[]" type="hidden" value="'+item['id']+'">' +
                    '<input class="personaje_'+item['id']+'" name="personaje_agregar_nombre[]" type="hidden" value="'+item['nombre']+'">' +
                    '<input class="personaje_'+item['id']+'" name="personaje_agregar_slug[]" type="hidden" value="'+item['slug']+'">';
  $("#personajes_inputs").append(html_input);

  limpiar_personajes();
}

function eliminar_personaje(id, db){
  $("#personaje_"+id).remove();

  if(db == true){
    var html_input =  '<input name="personaje_eliminar_id[]" type="hidden" value="'+id+'">';
    $("#personajes_inputs").append(html_input);
  }else{
    $(".personaje_"+id).remove();
  }

  limpiar_personajes();
}

function limpiar_personajes(){
  personajes = [];
  $("#resultados_personajes").html('');
  $("#resultados_personajes_contenedor").hide();
  $("#txt_nombre_personaje").val('');
}

$(function() {
  $('#txt_nombre_personaje').keypress(function(event){

    if (event.keyCode == 10 || event.keyCode == 13){
        buscar_personaje();
        event.preventDefault();
    }

  });
});

</script>
@endsection
