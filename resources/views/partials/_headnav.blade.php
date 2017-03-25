


<nav class="navbar navbar-toggleable-md navbar-light  wrap_nav">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<div class="container ">
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-md-0">
      <li class="nav-item {{ Request::is('/') ? "active": "" }}">
        <a class="nav-link" href="/">Start <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item {{ Request::is('news') ? "active" : "" }}">
        <a class="nav-link " href="#">News</a>
      </li>
      <li class="nav-item {{ Request::is('it')? "active" : "" }}">
        <a class="nav-link" href="/it">IT</a>
      </li>
      <li class="nav-item {{ Request::is('inne')? "active" : "" }}">
        <a class="nav-link" href="#">Inne</a>
      </li>
      <li class="nav-item {{ Request::is('kontakt')? "active" : "" }}">
        <a class="nav-link" href="#">Kontakt</a>
      </li>
    </ul>

  </div>
  </div>
</nav>








{{--
    <div class="blog-masthead s ">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="container">
        <nav class="nav blog-nav ticky-top navbar-toggleable-md">
          <a class="nav-link active" href="#">Home</a>
          <a class="nav-link" href="#">News</a>
          <a class="nav-link" href="#">IT</a>
          <a class="nav-link" href="#">Różne</a>
          <a class="nav-link" href="#">Kontakt</a>
        </nav>
      </div>
    </div> --}}
