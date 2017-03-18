@extends('dashboard')


@section('content')



<div class="row p-4">
<div class="col-md-10">
    <h1>All posts</h1>

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
              <td class="table-title">
                <a href="{{route('posts.edit', $post->id)}}"><button type="button" name="button" class="btn btn-info">Edytuj</button></a>
                <button type="button" name="button" class="btn btn-danger">Usuń</button>

              </td>



					@endforeach
				</tbody>

			</table>



	</div>






@endsection
