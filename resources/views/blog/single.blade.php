@extends('main')
@section('title', '| Blog')

@section('content')

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">


      <h2>{{$post->title}}</h2>

      <p class="mt-2">{{$post->body}}</p>

      <hr>
      <p>{{$post->category->name}}</p>

</div>

    </div>

  </div>
@endsection
