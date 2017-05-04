@extends('main')
@section('title', "Tagshow ")


@section('content')

	<div class="row p-4">
		<div class="col-md-2">

		</div>
		<div class="col-md-8 p-2">
			<h1 >{{ $tag->name }} Tag <small>{{ $tag->posts()->count() }} Posts</small></h1>
		</div>


	</div>

		<div class="row">
			<div class="col-md-2">

			</div>
			<div class="col-md-8">

				<table class="table">
					<thead>
						<tr>

							<th>Tytuł</th>
							<th>Tagi</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($tag->posts as $post)
							<tr>

								<td>{{ $post->title }}</td>
								<td>
								@foreach($post->tags as $tag)

										<a href="{{route('pages.showtag', $tag->id)}}"><span class="badge badge-default">{{ $tag->name }}</span></a>

								@endforeach
								<td>
									<a href="{{ route('test.showpost', $post->id)}}" class="btn btn-secondary pull-right">Pokaż</a>
								</td>
							</tr>

						@endforeach
					</tbody>
				</table>

			</div>
		</div>

@endsection
