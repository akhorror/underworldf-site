@extends('layouts.admin')

@section('content')

<div class="container spark-screen">

@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif

{{ Html::ul($errors->all()) }}

{{ Form::model($user, array('route' => array('admin.staff.update', $user->id),
  'method' => 'PUT',
  'class' => 'form-horizontal', 'role' => 'form',
  )) }}


    <h1>Editar Staff</h1>
    <hr>

    <div class="row">

    <!-- left column -->
      <div class="col-md-3">

        <h3>Avatar</h3>
        <div class="text-center">
          <img src="/images/staff_avatars/{{$user->avatar}}" class="avatar" alt="Avatar" style="max-width: 100%;">
        </div>

        <h3>Banner</h3>
        <div class="text-center">
          <img src="/images/staff_banners/{{$user->banner}}" class="banner" alt="Banner" style="width: 100%;">
        </div>

      </div>

    <!-- edit form column -->
      <div class="col-md-9 personal-info">

        <h3>Información del Usuario</h3>


          <div class="form-group">
            <label class="col-lg-3 control-label">Nombre:</label>
            <div class="col-lg-8">
              <span class="form-control">{{$user->name}}</span>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Estado:</label>
            <div class="col-lg-8">
                <select name="staff_activo" class="form-control">
                @foreach ($staff_activo_opciones as $staff_activo)
                  <option value="{{$staff_activo}}" @if($staff_activo == $user->staff_activo)selected @endif>{{$staff_activo}}</option>
                @endforeach
                </select>
            </div>
          </div>

        <h3>Asignación de Roles</h3>

          <div class="form-group">
            <label class="col-lg-3 control-label">Roles:</label>
            <div class="col-lg-8">
                @foreach ($roles as $rol)
                <label class="separadores"><input type="checkbox" name="roles[]"
                  value="{{$rol->id}}"
                  @if(in_array($rol->id, $user_roles_array))
                    checked
                  @endif
                  >{{$rol->nombre}}</label>
                @endforeach
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
