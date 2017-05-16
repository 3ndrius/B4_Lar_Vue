@extends('dashboard')

@section('style')
    {{ Html::style('font-awesome/css/font-awesome.min.css') }}
    {{ Html::style('/css/main.css')}}

    <link href="https://fonts.googleapis.com/css?family=Raleway:300" rel="stylesheet">
@endsection

@section('content')



<div class="row p-4">
<div class="col-md-10">
  <h1>WSZYSTKIE POSTY</h1>
</div>

<div class="col-md-2">
  <a href="{{route('posts.create')}}"><button type="button" name="button" class="btn btn-secondary hand-pointer"> <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
 NOWY POST</button></a>
</div>

</div>
  <div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>#</th>
					<th>TYTUŁ</th>
					<th>TREŚĆ</th>
					<th>DATA UTWORZENIA:</th>
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
                <a href="{{ route('posts.show', $post)}}">
                  <button class="btn btn-secondary hand-pointer">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                  </button>
                </a>

                  <a href="{{route('posts.edit', $post->id)}}">
                    <button type="button" name="button" class="btn btn-info hand-pointer"><i class="fa fa-pencil" aria-hidden="true"></i>

                    </button>
                  </a>

                {!! Form::open(['route' => ['posts.destroy', $post->id ], 'method' => 'DELETE' ]) !!}
                {!! Form::submit('Usuń', ['class'=> 'btn btn-danger hand-pointer']) !!}
                {!! Form::close() !!}
              </td>
					@endforeach
				</tbody>
			</table>

      <div class="d-flex justify-content-center link"> {!! $posts->links()!!}</div>
	</div>
@endsection
