@extends('main')
@section('title', '| Blog')
@section('stylesheets')
    {{ Html::style('font-awesome/css/font-awesome.min.css') }}
    {{ Html::style('/css/style.css') }}
    {{ Html::style('/css/main.css') }}

@endsection

@section('content')
<div class="container pb-4">

  <div class="row pt-4">
		<div class=" col-md-12 p-4 ">
      <img class= "mb-4" src="{{asset('images/'.$post->image)}}" alt="Header image" width="1100" height="600">

      <h1 class="p-1"><b>{{$post->title}}</b></h1>
      @if(isset($post->category->name))
        <span class="badge badge-pill badge-default single-cat-link">
          <a href="{{route('categories.show',$post->category->name)}}">{{$post->category->name}}</a>
        </span>
          | <span class="badge badge-pill badge-default">
        {{ date(' d M Y, G:i:s' , strtotime($post->created_at)) }}

        </span>
      @else
        ... |
        <span class="badge badge-pill badge-default">
            {{ date(' d M Y' , strtotime($post->created_at)) }}
        </span>

      @endif
      <hr>

			<p>{!!$post->body!!}</p>


    </div>

    <div class="col-md-12 pb-5 pt-2">
      <hr>
      <h2> <i class="fa fa-commenting-o fa-lg" aria-hidden="true"></i> Komentarze ({{$post->comment()->count()}})</h2>
    </div>
    <div class="col-md-10 col-md-offset-1">
      @foreach($post->comment as $comment)
        <div class="media">
					 <img class="img-avatar " src="{{" https://www.gravatar.com/avatar/". md5(strtolower(trim($comment->email))). "?d=monsterid" }}" alt="Unknown" style="border-radius:45%; padding-right:10px;">
					 <div class="comment-body">
					    <h3 class="comment-head" >{{ $comment->name }}</h3>
						<h6 class="comment-date">{{ date(' d M Y, G:i:s' , strtotime($comment->created_at)) }}</h6>

					   <p class="comment-content">{{$comment->comment}}</p>
					 </div>
					 <div class="clear"></div>
					 <hr>
				</div>
      @endforeach
			</div>
	</div>

  <div class="row">
    <div class="card p-2">


    <div class="comment-form col-md-12 ">
			{{ Form::open(['route' =>['comments.store', $post->id], 'method' => 'POST']) }}
      <div class="row">
					<div class="col-md-6">
						{{ Form::label('name' , 'Name:') }}
						{{ Form::text('name', null, ['class' => 'form-control']) }}
					</div>
					<div class="col-md-6">

						{{ Form::label('email', 'Email:') }}
						{{ Form::text('email', null, ['class' =>'form-control']) }}
					</div>
					<div class="col-md-12 ">
						{{ Form::label('comment', 'Komentarz:') }}
						{{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '10']) }}

						{{ Form::submit('Dodaj komentarz', ['class' => 'btn btn-secondary', 'style' => 'margin-top:10px;'])}}
					</div>
			</div>
				{{Form::close()}}
		</div>
	</div>
  </div>
</div>


@endsection
