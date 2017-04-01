<!DOCTYPE html>
<html lang="pl">
<head>
  @include('partials._header')
  <link rel="stylesheet" href="/css/dashboard.css">

</head>
<body>

{{-- @include('partials._headnav')

  @yield('content') --}}

  <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
       <button class="navbar-toggler navbar-toggler-right hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <a class="navbar-brand" href="/">Panel administracyjny</a>

       <div class="collapse navbar-collapse" id="navbarsExampleDefault">
         <ul class="navbar-nav mr-auto">
           <li class="nav-item active">
             <a class="nav-link" href="#">Jesteś adminem <span class="sr-only">(current)</span></a>
           </li>
         </ul>

         <ul class="navbar-nav pull-right">
           <li class="nav-item active">
             <a class="nav-link" href="#">Witaj <span class="sr-only">(current)</span></a>
           </li>

         </ul>

       </div>
     </nav>

      <div class="container-fluid">
        <div class="row">
          <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
            <ul class="nav nav-pills flex-column">
              <li class="nav-item ">
                <a class="nav-link " href="/">Start</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active" href="{{ route('posts.index')}}">Wszystkie posty<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('posts.create') }}">Nowy post</a>
              </li>

            </ul>

            <ul class="nav nav-pills flex-column">
              <li class="nav-item">
                <a class="nav-link" href="{{route('categories.index')}}">Kategorie</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Tagi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Komentarze</a>
              </li>

            </ul>

          </nav>

          <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3 ">


              @yield('content')

          </main>
        </div>
      </div>











  @include('partials._footer')

</body>
</html>
