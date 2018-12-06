<div class="container pt-5">
<div class="row">
  <div class="col-md-4">
    <ul class="list-group">
      @foreach ($comments as $comment)


    <li class="list-group-item">

        <span style="font-size:8px;">{{$comment->id}}|
<h6>{{$comment->name}}</h6></span><br>
<span style="font-size:9px;"><p>{{$comment->comment}}</p></span>

    </li>

@endforeach
  </ul>

  </div>
  <div class="col-md-4">
    <ul class="list-group">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Morbi leo risus</li>
    <li class="list-group-item">Porta ac consectetur ac</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>

  </div>
  <div class="col-md-4">
    <ul class="list-group">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Morbi leo risus</li>
    <li class="list-group-item">Porta ac consectetur ac</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>

  </div>

</div>

</div>


<hr>
<footer >
<div class="container">
<p>  &copy Wszystkie prawa zastrzeżone 2017</p>
</div>

</footer>
