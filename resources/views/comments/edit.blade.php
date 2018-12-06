@extends('dashboard')
@section('title', 'Edytuj komentarz')

@section('content')

  <div class="row p-4">
    <div class="col-md-10">
      <h2 class="pb-2">EYDTUJ: </h2>


      {!! Form::model($comment, ['route' => ['comments.update', $comment->id], 'method' => 'PUT']) !!}
        <div class="form-group">
        {{Form::label('name', 'Imie: ')}}
        {{Form::text('name', null, array('class' => 'form-control', 'disabled' => 'disabled') )}}
        </div>
        <div class="form-group">
        {{Form::label('email', 'Email:')}}
        {{Form::text('email', null, array('class'=>'form-control', 'disabled' => 'disabled') )}}
        </div>
        <div class="form-group">
        {{Form::label('comment', 'Komentarz:')}}
        {{Form::textarea('comment', null, array('class' => 'form-control'))}}
        </div>

        {{Form::submit('Aktualizuj', array(' class' => 'btn btn-success btn-block'))}}
      {!! Form::close()!!}

    </div>
  </div>

@endsection
