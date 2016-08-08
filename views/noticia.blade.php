@extends('layouts.app')

@section('title', $noticia->titulo . ' | Underworld Fansub')

@section('head_scripts')
<link href="/css/contacto.css" rel="stylesheet" type="text/css">
@endsection

@section('content')

<div class="container">



    <div class="content_full">

        <h1><i>{{$noticia->titulo}}</i></h1>

        {!! $noticia->descripcion !!}

    </div>
</div>
@endsection
