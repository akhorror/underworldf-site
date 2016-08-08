@extends('layouts.admin')

@section('content')
<div class="container spark-screen">

@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif

{{ Html::ul($errors->all()) }}

{{ Form::model($descarga, array('route' => array('admin.descarga.update', $descarga->id),
  'method' => 'PUT',
  'class' => 'form-horizontal', 'role' => 'form',
  )) }}

    <h1><b>{{$anime->titulo_romaji}}</b> : Editar Descarga</h1>
    <hr>

    <div class="row">

      <div class="form-group">
        <label class="col-lg-3 control-label">Nombre:</label>
        <div class="col-lg-8">
          <input class="form-control" type="text" name="nombre" value="{{$descarga->nombre}}">
        </div>
      </div>

<script>
function agregar(formato_resolucion){

  var nueva_descarga = '<select name="' + formato_resolucion + '_servidores[]" class="form-control">' +
              @foreach($servidores as $servidor)
              '<option value="{{$servidor}}">{{$servidor}}</option>' +
              @endforeach
            '</select><input class="form-control" type="text" name="' + formato_resolucion + '_archivos[]" value="">';

}

</script>

      @if($anime->mp4_1080p == true)
      <div class="form-group">
        <label class="col-lg-3 control-label">MP4 1080p:</label>
        <div class="col-lg-8">
          @foreach($servidores as $servidor)
          <label>{{$servidor}} :</label>
          <input class="form-control" type="text" placeholder="Link de {{$servidor}}"
            name="mp4_1080p_{{$servidor}}" value="{{$mp4_1080p[$servidor]}}" >
          @endforeach
        </div>
      </div>
      @endif

      @if($anime->mp4_720p == true)
      <div class="form-group">
        <label class="col-lg-3 control-label">MP4 720p:</label>
        <div class="col-lg-8">
          @foreach($servidores as $servidor)
          <label>{{$servidor}} :</label>
          <input class="form-control" type="text" placeholder="Link de {{$servidor}}"
            name="mp4_720p_{{$servidor}}" value="{{$mp4_720p[$servidor]}}" >
          @endforeach
        </div>
      </div>
      @endif

      @if($anime->mp4_576p == true)
      <div class="form-group">
        <label class="col-lg-3 control-label">MP4 576p:</label>
        <div class="col-lg-8">
          @foreach($servidores as $servidor)
          <label>{{$servidor}} :</label>
          <input class="form-control" type="text" placeholder="Link de {{$servidor}}"
            name="mp4_576p_{{$servidor}}" value="{{$mp4_576p[$servidor]}}" >
          @endforeach
        </div>
      </div>
      @endif

      @if($anime->mp4_720pSD == true)
      <div class="form-group">
        <label class="col-lg-3 control-label">MP4 720pSD:</label>
        <div class="col-lg-8">
          @foreach($servidores as $servidor)
          <label>{{$servidor}} :</label>
          <input class="form-control" type="text" placeholder="Link de {{$servidor}}"
            name="mp4_720pSD_{{$servidor}}" value="{{$mp4_720pSD[$servidor]}}" >
          @endforeach
        </div>
      </div>
      @endif


      @if($anime->mkv_1080p == true)
      <div class="form-group">
        <label class="col-lg-3 control-label">MKV 1080p:</label>
        <div class="col-lg-8">
          @foreach($servidores as $servidor)
          <label>{{$servidor}} :</label>
          <input class="form-control" type="text" placeholder="Link de {{$servidor}}"
            name="mkv_1080p_{{$servidor}}" value="{{$mkv_1080p[$servidor]}}" >
          @endforeach
        </div>
      </div>
      @endif

      @if($anime->mkv_720p == true)
      <div class="form-group">
        <label class="col-lg-3 control-label">MKV 720p:</label>
        <div class="col-lg-8">
          @foreach($servidores as $servidor)
          <label>{{$servidor}} :</label>
          <input class="form-control" type="text" placeholder="Link de {{$servidor}}"
            name="mkv_720p_{{$servidor}}" value="{{$mkv_720p[$servidor]}}" >
          @endforeach
        </div>
      </div>
      @endif

      @if($anime->mkv_576p == true)
      <div class="form-group">
        <label class="col-lg-3 control-label">MKV 576p:</label>
        <div class="col-lg-8">
          @foreach($servidores as $servidor)
          <label>{{$servidor}} :</label>
          <input class="form-control" type="text" placeholder="Link de {{$servidor}}"
            name="mkv_576p_{{$servidor}}" value="{{$mkv_576p[$servidor]}}" >
          @endforeach
        </div>
      </div>
      @endif

      @if($anime->mkv_480p == true)
      <div class="form-group">
        <label class="col-lg-3 control-label">MKV 480p:</label>
        <div class="col-lg-8">
          @foreach($servidores as $servidor)
          <label>{{$servidor}} :</label>
          <input class="form-control" type="text" placeholder="Link de {{$servidor}}"
            name="mkv_480p_{{$servidor}}" value="{{$mkv_480p[$servidor]}}" >
          @endforeach
        </div>
      </div>
      @endif


      <div class="form-group">
        <label class="col-md-3 control-label"></label>
        <div class="col-md-8">
          <input type="submit" class="btn btn-primary" value="Guardar Cambios">
          <span></span>
          <input type="reset" class="btn btn-default" value="Cancelar">
        </div>
      </div>

    </div>

{!! Form::close() !!}

</div>


@endsection
