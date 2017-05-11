


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
        <a class="nav-link " href="/news">Nowość</a>
      </li>
      <li class="nav-item {{ Request::is('it')? "active" : "" }}">
        <a class="nav-link" href="/it">IT</a>
      </li>
      <li class="nav-item {{ Request::is('blog')? "active" : "" }}">
        <a class="nav-link" href="/blog">Blog</a>
      </li>
      <li class="nav-item {{ Request::is('inne')? "active" : "" }}">
        <a class="nav-link" href="#">Inne</a>
      </li>
      <li class="nav-item {{ Request::is('kontakt')? "active" : "" }}">
        <a class="nav-link" href="#">Kontakt</a>
      </li>
    </ul>


    <ul class="navbar-nav">
      @if(Auth::check())
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Zalogowany</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{route('logout')}}">Wyloguj</a>
            <a class="dropdown-item" href="{{route('posts.index')}}">Panel</a>
          </div>
        </li>
      @else
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Panel</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{route('login')}}">LOGOWANIE</a>
            <a class="dropdown-item" href="{{route('register')}}">REJESTRACJA</a>
          </div>
        </li>
      @endif
    </ul>
  </div>
</nav>
