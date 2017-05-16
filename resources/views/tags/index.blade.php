@extends('dashboard')

@section('title', '| Tags Index ')
@section('style')
    {{ Html::style('font-awesome/css/font-awesome.min.css') }}
    {{ Html::style('/css/main.css')}}


@endsection

@section('content')

  <div class="row">
    <div class="col-md-8">
      <h1>TAGI</h1>

      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th> </th>
          </tr>
          </thead>
        <tbody>
          @foreach($tags as $tag)
            <tr>
              <th>{{$tag->id }}</th>
              <td class="show-tag">
                <a href="{{route('tags.show', $tag->id)}}">{{$tag->name}}</a>
                <i class="fa fa-eye-slash" aria-hidden="true"></i>

              </td>

                <td class="text-sm-right">
                  {!! Form::open(['route' => ['tags.destroy', $tag->id ], 'method' => 'DELETE' ]) !!}
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
        {!! Form::open(['route' => 'tags.store', 'method' => 'POST'])!!}
        <h2>Nowy tag</h2>
        {{ Form::label('name', 'Nazwa :') }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}

        {{ Form::submit('Zapisz', ['class' => 'btn btn-primary btn-block margin-top']) }}

        {!! Form::close()!!}
      </div>
    </div>
  </div>

@endsection
