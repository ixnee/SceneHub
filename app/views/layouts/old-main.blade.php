<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <title>@yield('title')</title>
  @section('head')
  <link href="{{ URL::asset('_css/main.css') }}" rel="stylesheet" media="screen, projection">
  @show
</head>
<body>
@yield('header')
@yield('body')
</body>
</html>