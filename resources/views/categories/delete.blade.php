@extends('dashboard')
@section('title', 'Edytuj komentarz')

@section('content')

  <div class="row p-4">
    <div class="col-md-8">
      <h2 class="pb-2">Usuń komentarz !! </h2>
      <h6>{{$category->id}}</h6>
      <h6>{{$category->name}}</h6>

      {!! Form::model($category, ['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) !!}
        {{Form::submit('Usuń', array(' class' => 'btn btn-danger btn-block'))}}
      {!! Form::close()!!}

    </div>
  </div>

@endsection
