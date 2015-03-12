<!DOCTYPE html>
<html>
<head>
  @include('includes.head')
</head>
<body>

  
  {{-- <header class="row"> --}}
    @include('includes.header')
  {{-- </header> --}}
  
  <div class="jumbotron">
    <div class="container">
      @yield('content')
    </div>
  </div>

  {{-- <footer class="row"> --}}
    @include('includes.footer')
  {{-- </footer> --}}


</body>
</html>