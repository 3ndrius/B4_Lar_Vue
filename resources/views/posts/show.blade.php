@extends('dashboard')
@section('title', '| Post')
@section('stylesheets')
  {{ Html::style('font-awesome/css/font-awesome.min.css') }}
@endsection

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

    <div class="row pt-4 pb-4">
      <div class="col-md-9 col-md-offset-3">
        <img class="mb-4" src="{{asset('images/'. $post->image)}}" alt="Image" width="1100" height="600">
        <h1>{{ $post->title }}</h1>
        <p >{!! $post->body !!}</p>
        @if(isset($post->category->name))
        <h5>Kategoria <span class="badge badge-pill badge-default">{{$post->category->name}}</span></h5>

    @else
      <h5>Kategorie - brak</h5>
  @endif
        <h6>Tagi:
          @foreach($post->tags as $tag)
            <span class="badge badge-default">{{$tag->name}}</span>
          @endforeach
        </h6>
       </div>
    </div>
    <hr>
    <div class="row pt-4">
      <div class="col-md-12">
        <h4> <i class="fa fa-commenting-o fa-lg" aria-hidden="true"></i> Komentarze ({{$post->comment()->count()}})</h4>
      </div>
      <div class="col-md-8 pt-4">
        <table class="table">
          <thead>
            <tr>
              <th>
                Imie:
              </th>
              <th>
                E-mail:
              </th>
              <th>
                Treść:
              </th>
              <th>

            </th>
            </tr>
          </thead>
          <tbody>

            @foreach($post->comment as $comment)
              <tr>
                <td>
                  {{$comment->name}}
                </td>
                <td>
                  {{$comment->email}}
                </td>
                <td>
                  <p style="font-size:13px;">{{$comment->comment}}</p>
                </td>
                <td>
                  <a href="{{route('comments.edit', $comment->id)}}"><i class="fa fa-pencil fa-lg" aria-hidden="true"></i></a>
                  <a href="{{route('comments.delete', $comment->id)}}"><i class="fa fa-trash fa-lg" style="color:red;" aria-hidden="true"></i></a>
                </td>
              </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>


  </div>

@endsection
