@extends('main')
@section('title', '| Blog')

@section('content')

  <div class="container mt-5">
    <div class="row">
      <h1>{{$post->title}}</h1>

      <p class="mt-2">{{$post->body}}</p>

    </div>

  </div>
@endsection
