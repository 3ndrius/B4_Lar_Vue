@extends('main')
@section('title', '| Start')


@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-3">Fluid jumbotron</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
          </div>
        </div>
      </div>
    </div>

  <div class="row">
    <div class="col-md-10">
      <div class="card-columns">
        @foreach($posts as $post)
          <div class="card">

            <img class="card-img-top img-fluid" src="{{asset('images/'. $post->image)}}" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">{{$post->title}}</h4>
              <p class="card-text">{{substr(strip_tags($post->body),0,100) }} {{strlen(strip_tags($post->body))>100 ? " ... ":" "}}</p>
              <a href="{{route('blog.single', $post->slug)}}"><button type="button" class="btn btn-secondary ">Więcej</button></a>
            </div>
          </div>
        @endforeach
      </div>
    </div>
    <div class="col-md-2 ">
      {{-- @foreach($tags as $tag)
        <span class="badge badge-info">{{$tag->name}}</span>

      @endforeach --}}
      @foreach($tags as $tag)

          <span class="badge badge-info"><a href="{{route('pages.showtag', $tag->name)}}">{{$tag->name}}</a></span>

      @endforeach

    </div>
  </div>

  <div class="row">
    <div class="col-md-12">


    <div id="accordion" role="tablist" aria-multiselectable="true">

      <div class="card">
        <div class="card-header" role="tab" id="headingOne">
          <h5 class="mb-0">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
ddsds
            </a>
          </h5>
        </div>
        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
          <div class="card-block">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>


        <div class="card">
          <div class="card-header" role="tab" id="headingTwo">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Collapsible Group Item #2
              </a>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="card-block">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" role="tab" id="headingThree">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Collapsible Group Item #3
              </a>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="card-block">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
      </div>
    </div>
  <div class="row">
    <div class="col-md-12">
      hgey
      @foreach ($comments as $comment)
        {{$comment->id}}
{{$comment->name}}
{{$comment->comment}}
      @endforeach
    </div>
  </div>

</div>

@endsection
