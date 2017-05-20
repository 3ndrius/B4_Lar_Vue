
<div class="container-fluid mt-5 pt-5 footer">
  <div class="container">


<div class="row pb-5">
  <div class="col-md-4">
    <ul>
      <li>test</li>
      <li>test</li>
      <li>test</li>
      <li>test</li>
      <li>test</li>
      <li>test</li>
      <li>test</li>
      <li>test</li>
    </ul>
  </div>
  <div class="col-md-4">

    <div class="alert " role="alert">
    <i class="fa fa-bookmark fa-lg" aria-hidden="true"></i>
     <strong> KATEGORIE</strong>
    </div>
    @foreach($categories as $category)
        <span class="badge badge-default"><a href="{{route('categories.show', $category->name)}}">{{$category->name}}</a></span>

    @endforeach


  </div>
  <div class="col-md-4">
    <div class="alert  " role="alert">
      <i class="fa fa-tag fa-lg" aria-hidden="true"></i>
      <strong> TAGI </strong>
    </div>

    @foreach($tags as $tag)

        <span class="badge badge-default"><a href="{{route('pages.showtag', $tag->name)}}">{{$tag->name}}</a></span>

    @endforeach
  </div>

</div>

<hr >
<div class="row">
<div class="col-md-6">
<p >&copy Wszystkie prawa zastrzeżone 2017</p>
</div>
  <div class="col-md-6">

<nav class="text-right">
  <a href="#" class="mr-2">START</a> |
  <a href="#" class="mr-2">IT</a> |
  <a href="#" class="mr-2">BLOG</a> |
  <a href="#" class="mr-2">KONTAKT</a>

</nav>
  </div>
</div>

</div>
</div>
