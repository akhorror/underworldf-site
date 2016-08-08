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

{{ Form::model($reclutamiento, array('route' => array('admin.reclutamiento.update', $reclutamiento->id),
  'method' => 'PUT',
  'class' => 'form-horizontal', 'role' => 'form',
  )) }}


    <h1>Editar Reclutamiento</h1>
    <hr>

    <div class="row">

    <!-- edit form column -->
      <div class="col-md-12 personal-info">

        <h3>Información del Reclutamiento</h3>


          <div class="form-group">
            <label class="col-lg-3 control-label">Nombre:</label>
            <div class="col-lg-8">
              <span class="form-control">{{$reclutamiento->nombre}}</span>
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-lg-3 control-label">Nick:</label>
            <div class="col-lg-8">
              <span class="form-control">{{$reclutamiento->nick}}</span>
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-lg-3 control-label">Correo:</label>
            <div class="col-lg-8">
              <span class="form-control">{{$reclutamiento->email}}</span>
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-lg-3 control-label">País:</label>
            <div class="col-lg-8">
              <span class="form-control">{{$reclutamiento->pais}}</span>
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-lg-3 control-label">Biografia:</label>
            <div class="col-lg-8">
              <span class="form-control">{{$reclutamiento->biografia}}</span>
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-lg-3 control-label">Fecha de Nacimiento:</label>
            <div class="col-lg-8">
              <span class="form-control">{{$reclutamiento->fecha_nacimiento}}</span>
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-lg-3 control-label">Sexo:</label>
            <div class="col-lg-8">
              <span class="form-control">{{$reclutamiento->sexo}}</span>
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-lg-3 control-label">Puesto:</label>
            <div class="col-lg-8">
              <span class="form-control">{{$reclutamiento->puesto}}</span>
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-lg-3 control-label">Experiencia:</label>
            <div class="col-lg-8">
              <span class="form-control">{{$reclutamiento->experiencia}}</span>
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-lg-3 control-label">Tiempo de Dedicación:</label>
            <div class="col-lg-8">
              <span class="form-control">{{$reclutamiento->tiempo_dedicacion}}</span>
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-lg-3 control-label">Días Disponibles:</label>
            <div class="col-lg-8">
              <span class="form-control">{{$reclutamiento->dias_disponibles}}</span>
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-lg-3 control-label">Días Disponibles:</label>
            <div class="col-lg-8">
              <span class="form-control">{{$reclutamiento->comentarios}}</span>
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-lg-3 control-label">Team:</label>
            <div class="col-lg-8">
              <span class="form-control">{{$reclutamiento->team}}</span>
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-lg-3 control-label">Fecha Reclutamiento:</label>
            <div class="col-lg-8">
              <span class="form-control">{{$reclutamiento->created_at}}</span>
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
