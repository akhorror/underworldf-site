@extends('layouts.admin')

@section('content')
<style>
.form-control{
    height: auto;
}
</style>
<div class="container spark-screen">

@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif

{{ Html::ul($errors->all()) }}

{{ Form::model($contacto, array('route' => array('admin.contacto.update', $contacto->id),
  'method' => 'PUT',
  'class' => 'form-horizontal', 'role' => 'form',
  )) }}


    <h1>Editar Contacto</h1>
    <hr>

    <div class="row">

    <!-- edit form column -->
      <div class="col-md-12 personal-info">

        <h3>Información del Contacto</h3>


          <div class="form-group">
            <label class="col-lg-3 control-label">Nombre:</label>
            <div class="col-lg-8">
              <span class="form-control">{{$contacto->nombre}}</span>
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-lg-3 control-label">Nick:</label>
            <div class="col-lg-8">
              <span class="form-control">{{$contacto->nick}}</span>
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-lg-3 control-label">Correo:</label>
            <div class="col-lg-8">
              <span class="form-control">{{$contacto->email}}</span>
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-lg-3 control-label">Página / Facebook:</label>
            <div class="col-lg-8">
              <span class="form-control">{{$contacto->pagina_facebook}}</span>
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-lg-3 control-label">Comentarios:</label>
            <div class="col-lg-8">
              <span class="form-control">{{$contacto->comentarios}}</span>
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-lg-3 control-label">Fecha Contacto:</label>
            <div class="col-lg-8">
              <span class="form-control">{{$contacto->created_at}}</span>
            </div>
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
