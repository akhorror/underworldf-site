@extends('layouts.admin')

@section('content')
<div class="container spark-screen">

{{ Html::ul($errors->all()) }}

{{ Form::model($noticia, array('route' => array('admin.noticias.update', $noticia->id),
  'method' => 'PUT',
  'class' => 'form-horizontal', 'role' => 'form',
  )) }}

    <h1>Editar Noticia</h1>
    <hr>

    <div class="row">

      <div class="form-group">
        <label class="col-lg-3 control-label">Título:</label>
        <div class="col-lg-8">
          <input class="form-control" type="text" name="titulo" value="{{$noticia->titulo}}">
        </div>
      </div>

      <div class="form-group">
        <label class="col-lg-3 control-label">Descripción:</label>
        <div class="col-lg-8">
          <textarea class="form-control" rows="10" name="descripcion" id="description">{{$noticia->descripcion}}</textarea>
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

{!! Form::close() !!}

</div>

<script src='//cdn.tinymce.com/4/tinymce.min.js'></script>
<script>
tinymce.init({
    selector: 'textarea',
    height: 500,
    theme: 'modern',
    plugins: [
        'advlist autolink lists link image charmap print preview hr anchor pagebreak',
        'searchreplace wordcount visualblocks visualchars code fullscreen',
        'insertdatetime media nonbreaking save table contextmenu directionality',
        'emoticons template paste textcolor colorpicker textpattern imagetools'
    ],
    toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
    toolbar2: 'print preview media | forecolor backcolor emoticons',
    image_advtab: true,
    templates: [
        {
            title: 'Test template 1',
            content: 'Test 1'
        },
        {
            title: 'Test template 2',
            content: 'Test 2'
        }
    ],
    content_css: [
        '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
        '//www.tinymce.com/css/codepen.min.css'
    ]
});
</script>
@endsection
