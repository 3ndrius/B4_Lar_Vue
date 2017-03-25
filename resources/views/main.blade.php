<!DOCTYPE html>
<html lang="pl">
<head>
  @include('partials._header')

</head>
<body>
<div class="container-fluid">


</div>
@include('partials._headnav')

  @yield('content')









  @include('partials._footer_content')

  @include('partials._footer')

</body>
</html>
