@extends('layouts.admin')

@section('content')
<div class="container spark-screen">

    <div class="row">


        <div class="panel panel-default">
           <div class="panel-heading">Noticias</div>
           <!--div class="panel-body">
              <p></p>
           </div-->
           <table class="table">
              <thead>
                 <tr>
                    <th>#</th>
                    <th>Título</th>
                    <th>Opciones</th>
                 </tr>
              </thead>
              <tbody>

                @foreach($noticias as $noticia)
                <tr>
                    <th scope="row">{{$noticia->id}}</th>
                    <td><a href="/admin/noticias/{{$noticia->id}}/edit">{{$noticia->titulo}}</a></td>
                    <td>
                        <a href="/admin/noticias/{{$noticia->id}}/edit">Editar</a> |
                        <a href="/noticias/{{$noticia->id}}">Leer</a>
                    </td>
                </tr>
                @endforeach
              </tbody>
           </table>
        </div>


    </div>

</div>
@endsection
