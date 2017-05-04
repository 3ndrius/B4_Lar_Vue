@extends('main')

@section('title', '| Wszystkie posty')

@section('content')
  <div class="container mt-5">
<h1>Wszystkie posty</h1>

  <div class="row mt-3">
    <div class="col-md-10 mt-2">
  @foreach ($posts as $post)



          <h2>{{$post->title}}</h2>
          <br>
          <p>{{strip_tags($post->body)}}</p>

          <a  href="{{ route('blog.single', $post->slug) }}" > <button class="btn btn-primary">Więcej</button></a>
          <hr>



  @endforeach
  </div>
    <div class="col-md-2">
      @foreach($tags as $tag)
        <span class="badge badge-info">{{$tag->name}}</span>
      @endforeach
    </div>

      </div>


<div class="d-flex justify-content-center"> {!! $posts->links()!!}</div>



      </div>



@endsection
