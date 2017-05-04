@extends('dashboard')
@section('title', '| Nowy post')
@section('stylesheets')
  <link rel="stylesheet" href="/css/main.css">
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


      <form  action="{{route('posts.store')}}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}" >

        <h4>Tytuł</h4>
        <input type="text" class="form-control" name="title">

        <h4 class="margin-top">Treść</h4>
        <textarea name="body" rows="12" class="form-control  "></textarea>

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

        <input type="submit"  value="Stwórz post" class="btn btn-primary form-control margin-top">


      </form>

    </div>
  </div>






@endsection

@section('scripts')
{!! Html::script('js/select2.min.js') !!}
{!!Html::script('javascript/parsley.min.js')!!}

<script>
	$('.select2-multi').select2();
</script>

@endsection
