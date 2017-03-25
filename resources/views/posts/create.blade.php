@extends('dashboard')
@section('title', '| Nowy post')
@section('stylesheets')
  <link rel="stylesheet" href="/css/main.css">


@endsection


@section('content')


  <div class="row p-2">
    <div class="col-md-8">
      <h1>Nowy Post</h1>

    </div>
    <div class="col-md-2">
      <a href="{{ route('posts.index')}}"><button type="button" name="button" class="btn btn-primary">Anuluj</button></a>

    </div>
  </div>
  <div class="row margin-top">

    <div class="col-md-8">


      <form  action="{{route('posts.store')}}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}" >
        <h4>Tytuł</h4>
        <input type="text" class="form-control" name="title">
        <h4 class="margin-top">Treść</h4>
        <textarea name="body" rows="12" class="form-control  "></textarea>
        <h5>Slug</h5>
        <input type="text" name="slug" class="form-control">
        <input type="submit"  value="Stwórz post" class="btn btn-primary form-control margin-top">


      </form>

    </div>
  </div>






@endsection
