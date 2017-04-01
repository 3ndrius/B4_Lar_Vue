@extends('dashboard')
@section('title', '| Edytuj')

@section('content')


  <div class="row p-4">
    <div class="col-md-8">
      <h1>Edytuj post</h1>

    </div>
    <div class="col-md-2">
      <a href="{{ route('posts.index')}}"><button type="button" name="button" class="btn btn-primary">Anuluj</button></a>

    </div>
  </div>
  <div class="row ">

    <div class="col-md-8">


      {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}

        {{Form::label('title', 'Tytuł:')}}
        {{Form::text('title', null, ['class' => 'form-control'])}}



        {{ Form::label('body', 'Tresc:', ['class' => 'margin-top'])}}
        {{Form::textarea('body', null, ['class' => 'form-control'])}}

        {{Form::label('category_id', 'Category: ')}}
        {{Form::select('category_id', $categories, null, ['class' => 'form-control'])}}


        {{ Form::submit('Aktualizuj', ['class' => 'btn btn-success btn-block margin-top']) }}


      {!! Form::close()!!}

    </div>
  </div>


@endsection
