<!DOCTYPE html>
<html lang="pl">
<head>
  @include('partials._header')
</head>
<body>
  @include('partials._headnav')
  @include('partials._messages')
  @yield('content')
  @include('partials._footer_content')
  @include('partials._footer')

</body>
</html>
