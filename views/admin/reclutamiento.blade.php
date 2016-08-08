@extends('layouts.admin')

@section('content')
<div class="container spark-screen">

    <div class="row">


        <div class="panel panel-default">
           <div class="panel-heading">Reclutamientos</div>
           <!--div class="panel-body">
              <p></p>
           </div-->
           <table class="table">
              <thead>
                 <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Nick</th>
                    <th>Puesto</th>
                    <th>Fecha</th>
                    <th>Opciones</th>
                 </tr>
              </thead>
              <tbody>

                @foreach($reclutamientos as $reclutamiento)
                <tr>
                    <th scope="row">{{$reclutamiento->id}}</th>
                    <td><a href="/admin/reclutamiento/{{$reclutamiento->id}}">{{$reclutamiento->nombre}}</a></td>
                    <td><a href="/admin/reclutamiento/{{$reclutamiento->id}}">{{$reclutamiento->nick}}</a></td>
					<td><a href="/admin/reclutamiento/{{$reclutamiento->id}}">{{$reclutamiento->puesto}}</a></td>
                    <td><a href="/admin/reclutamiento/{{$reclutamiento->id}}">{{$reclutamiento->created_at}}</a></td>
                    <td>
                        <a href="/admin/reclutamiento/{{$reclutamiento->id}}">Ver Detalles</a>
                    </td>
                </tr>
                @endforeach
              </tbody>
           </table>
        </div>



    </div>

</div>
@endsection
