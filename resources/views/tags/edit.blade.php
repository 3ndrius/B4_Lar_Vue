@extends('dashboard')
@section('title', '| Edytuj Tag')

@section('content')

<div class="row">
  <div class="col-md-8">
    {!! Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'PUT']) !!}
      {{ Form::label('name', 'Nazwa: ') }}
      {{ Form::text('name', null, [ 'class' => 'form-control' ] ) }}
      {{ Form::submit('Zapisz', ['class' => 'btn btn-success btn-block ', 'style' => 'margin-top:10px;'])}}
    {!! Form::close()!!}

  </div>
</div>
@endsection
