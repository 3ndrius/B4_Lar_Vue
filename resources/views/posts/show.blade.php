@extends('dashboard')
@section('title', '| Post')

@section('content')

  <div class="container-fluid p-4">
    <div class="row">

      <div class="col-md-8 p-2">
        <div class="row">
          <div class="col-md-6">
            <h6>Utworzono: {{ $post->created_at}}</h6>
          </div>

          <div class="col-md-6">
            <h6>Ostatnia aktualizacja: {{ $post->updated_at}}</h6>
          </div>
        </div>



      </div>
      <div class="col-md-4">
        <a href="{{route('posts.edit', $post->id)}}"><button type="button" name="button" class="btn btn-info">Edytuj</button></a>
        <a href="{{route('posts.index')}}"><button type="button" name="button" class="btn btn-danger">Anuluj</button></a>

      </div>
    </div>
    <div class="row pt-4">
      <div class="col-md-9 col-md-offset-3">
        <h2>{{ $post->title }}</h2>
        <p class="lead">{{ $post->body }}</p>

      </div>
    </div>


  </div>

@endsection
