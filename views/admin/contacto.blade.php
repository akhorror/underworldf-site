@extends('layouts.admin')

@section('content')
<div class="container spark-screen">

    <div class="row">


        <div class="panel panel-default">
           <div class="panel-heading">Contactos</div>
           <!--div class="panel-body">
              <p></p>
           </div-->
           <table class="table">
              <thead>
                 <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Fecha</th>
                    <th>Opciones</th>
                 </tr>
              </thead>
              <tbody>

                @foreach($contactos as $contacto)
                <tr>
                    <th scope="row">{{$contacto->id}}</th>
                    <td><a href="/admin/contacto/{{$contacto->id}}">{{$contacto->nombre}}</a></td>
                    <td><a href="/admin/contacto/{{$contacto->id}}">{{$contacto->created_at}}</a></td>
                    <td>
                        <a href="/admin/contacto/{{$contacto->id}}">Ver Detalles</a>
                    </td>
                </tr>
                @endforeach
              </tbody>
           </table>
        </div>



    </div>

</div>
@endsection
