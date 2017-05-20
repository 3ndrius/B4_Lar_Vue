@extends('main')

@section('title', '| Wszystkie posty')
@section('stylesheets')
    {{ Html::style('font-awesome/css/font-awesome.min.css') }}
    {{ Html::style('/css/style.css') }}
    {{ Html::style('/css/main.css') }}
@endsection

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
    <div class="col-md-2 aside">
      <div class="alert  text-center" role="alert">
        <i class="fa fa-tag fa-lg" aria-hidden="true"></i>
        <strong> TAGI </strong>
      </div>

      @foreach($tags as $tag)

          <span class="badge badge-default"><a href="{{route('pages.showtag', $tag->name)}}">{{$tag->name}}</a></span>

      @endforeach

      <div class="alert text-center mt-4" role="alert">
      <i class="fa fa-bookmark fa-lg" aria-hidden="true"></i> <strong>KATEGORIE</strong>
      </div>
      @foreach($categories as $category)
          <span class="badge badge-default"><a href="{{route('categories.show', $category->name)}}">{{$category->name}}</a></span>

      @endforeach

    </div>
      <hr>


    </div>
    </div>


<div class="d-flex justify-content-center"> {!! $posts->links()!!}</div>



      </div>



@endsection
