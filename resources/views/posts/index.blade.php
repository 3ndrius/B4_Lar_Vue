@extends('dashboard')


@section('content')



<div class="row p-4">
<div class="col-md-10">
    <h1>Wszystkie posty</h1>

</div>
<div class="col-md-2">
  <a href="{{route('posts.create')}}"><button type="button" name="button" class="btn btn-primary">Nowy post</button></a>

</div>
</div>
  <div class="row">

		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Title</th>
					<th>Body</th>
					<th>Created At:</th>
					<th></th>


				</thead>

				<tbody>
					@foreach($posts as $post)

						<tr>

                <th class="table-id">{{ $post->id }}</th>
  							<td class="table-title">{{ $post->title }}</td>
                <td class="table-body">{{ substr($post->body, 0, 200)}} {{strlen($post->body)> 50 ? " ... " : ""}}</td>
                <td class="table-date">{{ $post->created_at}}</td>
							</a>
              <td class="table-button">
                <a href="{{ route('posts.show', $post)}}"><button class="btn btn-secondary">Pokaż</button></a>
                <a href="{{route('posts.edit', $post->id)}}"><button type="button" name="button" class="btn btn-info">Edytuj</button></a>


                {!! Form::open(['route' => ['posts.destroy', $post->id ], 'method' => 'DELETE' ]) !!}
                {!! Form::submit('Usuń', ['class'=> 'btn btn-danger']) !!}
                {!! Form::close() !!}

              </td>



					@endforeach
				</tbody>

			</table>

<div class="d-flex justify-content-center"> {!! $posts->links()!!}</div>


	</div>






@endsection
