@extends('dashboard')
@section('title', '| Edytuj')

@section('stylesheets')

  {!! Html::style('/css/select2.min.css') !!}
  <script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea', menubar:'false' });</script>
  {!! Html::style('css/parsley.css') !!}

@endsection

@section('content')
.<div class="container-fluid pb-4">


  <div class="row p-2">
    <div class="col-md-8">
      <h1>EDYTUJ POST</h1>

    </div>
    <div class="col-md-2">
      <a href="{{ route('posts.index')}}"><button type="button" name="button" class="btn btn-warning">Anuluj</button></a>

    </div>
  </div>
  <div class="row ">

    <div class="col-md-8">


      {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'files' => true, 'data-parsley-validate' => '']) !!}

        {{Form::label('title', 'TYTUŁ:')}}
        {{Form::text('title', null, ['class' => 'form-control', 'required'=>'', 'maxlength' =>'255'])}}



        {{ Form::label('body', 'TREŚĆ:', ['class' => 'margin-top' ])}}
        {{Form::textarea('body', null, ['class' => 'form-control','required' => '', 'maxlength' => '25555'])}}

        {{ Form::label('slug', 'URL (slug):', ['class' => 'margin-top'])}}
        {{Form::text('slug', null, ['class' => 'form-control', 'required'=>'', 'maxlength' =>'255'])}}

        {{Form::label('category_id', 'KATEGORIE:', ['class' => 'margin-top'])}}
        {{Form::select('category_id', $categories, null, ['class' => 'form-control', 'required'=>''])}}

        {{ Form::label('tags' , 'TAGI:', ['class' => 'margin-top']) }}
  			{{ Form::select('tags[]', $tags, null, ['class' => 'select2-multi form-control' , 'multiple' => 'multiple']) }}
        <br><br>
        {{ Form::label('featured_image', 'ZAKTUALIZUJ ZDJĘCIE:')}}
        {{ Form::file('featured_image', ['class' => 'form-control'])}}

        {{ Form::submit('Aktualizuj', ['class' => 'btn btn-success btn-block margin-top', 'style' => 'cursor:pointer;']) }}


      {!! Form::close()!!}

    </div>
  </div>
</div>


@endsection

@section('scripts')

  <script
    src="https://code.jquery.com/jquery-3.2.1.slim.js"
    integrity="sha256-tA8y0XqiwnpwmOIl3SGAcFl2RvxHjA8qp0+1uCGmRmg="
    crossorigin="anonymous"></script>
    {!!Html::script('javascript/parsley.min.js')!!}
{!! Html::script('js/select2.min.js') !!}
<script>
	$('.select2-multi').select2();
	$('.select2-multi').select2().val({!! json_encode($post->tags()->allRelatedIds() ) !!}).trigger('change');




</script>


@endsection
