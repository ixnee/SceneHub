<!DOCTYPE html>
<html>
<head>
  @include('includes.head')
</head>
<body>

<div id="wrap">
  
  {{-- <header class="row"> --}}
  <div class="container">
    @include('includes.header')
  {{-- </header> --}}
  
  {{-- <div class="row"> --}}
    @yield('content')
  {{-- </div> --}}
  </div>
  </div>
  {{-- <footer class="row"> --}}
    @include('includes.footer')
  {{-- </footer> --}}


</body>
</html>