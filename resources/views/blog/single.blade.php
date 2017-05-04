@extends('main')
@section('title', '| Blog')
@section('stylesheets')
  {{ Html::style('font-awesome/css/font-awesome.min.css') }}
    {{ Html::style('/css/style.css') }}
@endsection

@section('content')
<div class="container">

  <div class="row pt-4">
		<div class="col-md-12 p-4 ">
      <h1 class="p-2">{{$post->title}}</h1>
				<p>{!!$post->body!!}</p>
        <hr>
        @if(isset($post->category->name))
          <h5>Kategoria <span class="badge badge-pill badge-default">{{$post->category->name}}</span></h5>
        @else
          <h5>Kategorie - brak</h5>
        @endif
    </div>

    <div class="col-md-12 pb-5 pt-2">
      <hr>
      <h2> <i class="fa fa-commenting-o fa-lg" aria-hidden="true"></i> Komentarze</h2>
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

						{{ Form::submit('Dodaj komentarz', ['class' => 'btn btn-success btn-block btn-lg ', 'style' => 'margin-top:10px;'])}}
					</div>
			</div>
				{{Form::close()}}
		</div>
	</div>
</div>


@endsection
