@extends('dashboard')

@section('title', '|Kategorie')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h1>Kategorie</h1>

			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th> </th>
					</tr>
				</thead>

				<tbody>
					@foreach($categories as $category)
						<tr>
							<th>{{$category->id }}</th>
							<td>{{$category->name}}</td>
							  <td class="text-sm-right">
									{!! Form::open(['route' => ['categories.destroy', $category->id ], 'method' => 'DELETE' ]) !!}
	                {!! Form::submit('Usuń', ['class'=> 'btn btn-danger']) !!}
	                {!! Form::close() !!}

	              </td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>   {{-- end of .md-8 --}}




		<div class="col-md-3">
			<div class="well">
				{!! Form::open(['route' => 'categories.store', 'method' => 'POST'])!!}
				<h2>Nowa kategoria</h2>
				{{ Form::label('name', 'Nazwa :') }}
				{{ Form::text('name', null, ['class' => 'form-control']) }}

				{{ Form::submit('Zapisz', ['class' => 'btn btn-primary btn-block margin-top']) }}

				{!! Form::close()!!}
			</div>
		</div>
	</div>


@stop
