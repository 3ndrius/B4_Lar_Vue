<!DOCTYPE html>
<html lang="pl">
<head>
  @include('partials._header')
  <link rel="stylesheet" href="/css/dashboard.css">
  {{ Html::style('font-awesome/css/font-awesome.min.css') }}

</head>
<body>



  <nav class="navbar navbar-toggleable-md fixed-top">
       <button class="navbar-toggler navbar-toggler-right hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <a class="navbar-brand pl-2"  href="{{route('dashboard.start')}}">PANEL ADMINISTRACYJNY</a>

       <div class="collapse navbar-collapse" id="navbarsExampleDefault">
         <ul class="navbar-nav mr-auto">

           <li>

           </li>
         </ul>

         <ul class="navbar-nav pull-right">
           <li class="nav-item logout">
             <a class="nav-link" href="/"><i class="fa fa-home fa-lg" aria-hidden="true"></i>
     <span class="sr-only">(current)</span></a>
           </li>
           <li class="nav-item logout">
             <a class="nav-link" href="{{route('logout')}}"><i class="fa fa-sign-out fa-lg" aria-hidden="true"></i>
 <span class="sr-only">(current)</span></a>
           </li>

         </ul>
       </div>
     </nav>

      <div class="container-fluid">
        <div class="row">
          <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
              <ul class="nav nav-pills flex-column autor">
            <li class="nav-item text-center mt-2 ">
              <i class="fa fa-user-circle-o fa-3x" aria-hidden="true"></i>
 <a class="nav-link" href="#">Witaj {{ Auth::user()->name }} <span class="sr-only">(current)</span></a>
            </li>
          </ul>
<hr>
            <ul class="nav nav-pills flex-column">
              <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard')? "active" : "" }}" href="{{route('dashboard.start')}}"> <i class="fa fa-tachometer fa-lg" aria-hidden="true"> </i> START</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('posts/create')? "active" : "" }}" href="{{ route('posts.create') }}"><i class="fa fa-plus fa-lg" aria-hidden="true"></i>
 NOWY</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link {{ Request::is('posts')? "active" : "" }}" href="{{ route('posts.index')}}"><i class="fa fa-list-alt fa-lg" aria-hidden="true"></i>
 POSTY<span class="sr-only">(current)</span></a>
              </li>


            </ul>

            <ul class="nav nav-pills flex-column">
              <li class="nav-item">
                <a class="nav-link {{ Request::is('categories')? "active" : "" }}" href="{{route('categories.index')}}"><i class="fa fa-bookmark fa-lg" aria-hidden="true"></i>

 KATEGORIE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('tags')? "active" : "" }}" href="{{route('tags.index')}}"><i class="fa fa-tags fa-lg" aria-hidden="true"></i>
 TAGI</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('comment')? "active" : "" }}" href="{{route('comments.index')}}"><i class="fa fa-commenting fa-lg" aria-hidden="true"></i>
 KOMENTARZE</a>
              </li>

            </ul>

          </nav>

          <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3 ">

            @include('partials._messages_back')
              @yield('content')


          </main>
        </div>
      </div>











  @include('partials._footer')

</body>
</html>
