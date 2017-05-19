@extends('main')
@section('title', "CategoryShow ")


@section('content')

	<div class="row p-4">
		<div class="col-md-2">

		</div>
		<div class="col-md-8 p-2">
			<h1 >{{ $category->name }} Category <small>{{ $category->posts()->count() }} Postów</small></h1>
		</div>


	</div>

		<div class="row">
			<div class="col-md-2">

			</div>
			<div class="col-md-8">
				@foreach($category->posts as $post)

						<a href="{{route('blog.single', $post->slug)}}">


							<h2>{{$post->title}}</h2>
								<br>
								<p >{{$post->body}}</p>
						</a>


				@endforeach

			</div>
		</div>

@endsection
