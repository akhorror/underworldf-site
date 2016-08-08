@extends('layouts.admin')

@section('content')
<div class="container spark-screen">

    <div class="row">


        <div class="panel panel-default">
           <div class="panel-heading">Staffs Activos</div>
           <!--div class="panel-body">
              <p></p>
           </div-->
           <table class="table">
              <thead>
                 <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Opciones</th>
                 </tr>
              </thead>
              <tbody>

                @foreach($staff_activos as $usuario)
                <tr>
                    <th scope="row">{{$usuario->id}}</th>
                    <td><a href="/admin/staff/{{$usuario->id}}/edit">{{$usuario->name}}</a></td>
                    <td>
                        <a href="/admin/staff/{{$usuario->id}}/edit">Editar</a> |
                        <a href="/staff/{{$usuario->name}}">Ver Perfil</a>
                    </td>
                </tr>
                @endforeach
              </tbody>
           </table>
        </div>

        <div class="panel panel-default">
           <div class="panel-heading">Staffs Caidos</div>
           <!--div class="panel-body">
              <p></p>
           </div-->
           <table class="table">
              <thead>
                 <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Opciones</th>
                 </tr>
              </thead>
              <tbody>

                @foreach($staff_caidos as $usuario)
                <tr>
                    <th scope="row">{{$usuario->id}}</th>
                    <td><a href="/admin/staff/{{$usuario->id}}/edit">{{$usuario->name}}</a></td>
                    <td>
                        <a href="/admin/staff/{{$usuario->id}}/edit">Editar</a> |
                        <a href="/staff/{{$usuario->name}}">Ver Perfil</a>
                    </td>
                </tr>
                @endforeach
              </tbody>
           </table>
        </div>


    </div>

</div>
@endsection
