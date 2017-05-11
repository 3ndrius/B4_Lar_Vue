@extends('dashboard')
@section('title', '| Nowy post')
@section('stylesheets')
  <link rel="stylesheet" href="/css/main.css">

    {!! Html::style('css/parsley.css') !!}

  {!! Html::style('/css/select2.min.css') !!}


  <script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea', menubar:'false' });</script>





@endsection


@section('content')


  <div class="row p-2">
    <div class="col-md-8">
      <h1>Nowy Post</h1>

    </div>
    <div class="col-md-2">
      <a href="{{ route('posts.index')}}"><button type="button" name="button" class="btn btn-primary">Anuluj</button></a>

    </div>
  </div>
  <div class="row margin-top">

    <div class="col-md-8">


      <form  action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data" data-parsley-validate='' >
        <input type="hidden" name="_token" value="{{csrf_token()}}" >

        <h4>Tytuł</h4>
        <input type="text" class="form-control" name="title" required="" ,maxlength = "255">

        <h4 class="margin-top">Treść</h4>
        <textarea name="body" rows="12" class="form-control" required="" , maxlength = "25555"></textarea>

        <h5>Slug</h5>
        <input type="text" name="slug" class="form-control">
        {{Form::label('category_id', 'Kategorie:')}}
        <select class="form-control" name="category_id">
						@foreach($categories as $category)
							<option value="{{ $category->id }}"> {{$category->name}}</option>
						@endforeach
					</select>

          {{Form::label('tags', 'Tags:')}}

  					<select class="form-control select2-multi" name="tags[]" multiple="multiple">
  						@foreach($tags as $tag)
  							<option value="{{ $tag->id }}"> {{$tag->name}}</option>
  						@endforeach
  					</select>
            <br>
            <br>

            {{ Form::label('featured_image', 'Załaduj swoje zdjęcie:')}}
            {{ Form::file('featured_image', ['class' => 'form-control'])}}

        <input type="submit"  value="Stwórz post" class="btn btn-primary form-control margin-top">


      </form>

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
</script>

@endsection
