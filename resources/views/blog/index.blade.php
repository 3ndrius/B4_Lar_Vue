@extends('main')

@section('title', '| Wszystkie posty')

@section('content')
  <div class="container mt-5">
<h1>Wszystkie posty</h1>

  <div class="row mt-3">
  @foreach ($posts as $post)


        <div class="col-md-10 mt-2">
          <h2>{{$post->title}}</h2>
          <br>
          <p>{{$post->body}}</p>

          <a  href="{{ route('blog.single', $post->slug) }}" > <button class="btn btn-primary">Więcej</button></a>
          <hr>
        </div>


  @endforeach

      </div>


<div class="d-flex justify-content-center"> {!! $posts->links()!!}</div>



      </div>



@endsection
