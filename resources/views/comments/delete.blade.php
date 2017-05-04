@extends('dashboard')
@section('title', 'Edytuj komentarz')

@section('content')

  <div class="row p-4">
    <div class="col-md-8">
      <h2 class="pb-2">Usuń komentarz !! </h2>
      <h6>{{$comment->name}}</h6>
      <h6>{{$comment->email}}</h6>
      <p>{{$comment->comment}}</p>
      {!! Form::model($comment, ['route' => ['comments.destroy', $comment->id], 'method' => 'DELETE']) !!}
        {{Form::submit('Usuń', array(' class' => 'btn btn-danger btn-block'))}}
      {!! Form::close()!!}

    </div>
  </div>

@endsection
