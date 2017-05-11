@extends('dashboard')
@section('title', 'Komentarze')
@section('stylesheets')
  {{ Html::style('font-awesome/css/font-awesome.min.css') }}
@endsection

@section('content')

  <div class="row p-4">
    <div class="col-md-8">
      <h2 class="pb-2">Komentarze ({{$comments->total() }})</h2>
      @foreach($comments as $comment)
        {{$comment->id}}
      <h6>{{$comment->name}}</h6>
      <h6>{{$comment->email}}</h6>
      <p>{{$comment->comment}}</p>
      <a href="{{route('comments.edit', $comment->id)}}"><i class="fa fa-pencil fa-lg" aria-hidden="true"></i></a>
      <a href="{{route('comments.delete', $comment->id)}}"><i class="fa fa-trash fa-lg" style="color:red;" aria-hidden="true"></i></a>

      <hr>

    @endforeach
<div class="d-flex justify-content-center"> {!! $comments->links()!!}</div>
    </div>
  </div>

@endsection
