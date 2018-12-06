@extends('dashboard')
@section('title', "Tag - $tag->name ")


@section('content')
.<div class="container-fluid">


	<div class="row p-4">
		<div class="col-md-8 p-2">
			<h2 >{{ $tag->name }} Tag <small>{{ $tag->posts()->count() }} Posts</small></h2>
		</div>

		<div class="col-md-2">
			<a href="{{route('tags.edit', $tag->id)}}" class="btn btn-primary pull-right form-spacing-top btn-block">Edit</a>
		</div>
		<div class="col-md-2">
			{{Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE'])}}
			{{Form::submit('Delete', ['class' => 'btn btn-danger btn-block form-spacing-top'])}}
		</div>
	</div>

		<div class="row">
		  <div class="col-md-12">

				<table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>Tytuł</th>
							<th>Tagi</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($tag->posts as $post)
							<tr>
								<th class="pr-4">{{ $post->id }}</th>
								<td>{{ $post->title }}</td>
								<td>
								@foreach($post->tags as $tag)

										<a href="{{route('tags.show', $tag->id)}}"><span class="badge badge-default">{{ $tag->name }}</span></a>

								@endforeach
								<td>
									<a href="{{ route('posts.show', $post->id)}}" class="btn btn-secondary pull-right">Pokaż</a>
								</td>
							</tr>

						@endforeach
					</tbody>
				</table>

			</div>
		</div>
</div>

@endsection
