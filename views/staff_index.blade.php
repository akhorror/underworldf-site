@extends('layouts.app')

@section('title', 'Underworld Fansub | Staff')

@section('head_scripts')
<link href="/css/staff.css" rel="stylesheet" type="text/css">
@endsection

@section('content')

<div class="content content_avatar">
    <div class="content_avatar">

        @if (count($staffs_activo) > 0)

        <div class="title">
            <h2>Activos</h2>
        </div>

        @foreach ($staffs_activo as $staff)
        <a href="/staff/{{$staff['name']}}">
        <div class="item_avatar">
            <img src="/images/staff_avatars/{{$staff['avatar']}}">
            <div class="text_container">
                        <div class="text_content">
                            <span><h3>{{$staff['name']}}</h3></span>
                        </div>
            </div>
        </div>
        </a>
        @endforeach

        <div class="clearfix"></div>

        @endif


        @if (count($staffs_caido) > 0)

        <div class="title">
            <h2>Caidos en acción</h2>
        </div>

        @foreach ($staffs_caido as $staff)
        <a href="/staff/{{$staff['name']}}">
        <div class="item_avatar">
            <img src="/images/staff_avatars/{{$staff['avatar']}}">
            <div class="text_container">
                        <div class="text_content">
                            <span><h3>{{$staff['name']}}</h3></span>
                        </div>
            </div>
        </div>
        </a>
        @endforeach

        @endif

    </div>
</div>

@endsection
