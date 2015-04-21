@include('includes.head')

<body>
  
  @include('includes.header')
  
  <div class="jumbotron">
    <div class="container">
      @if (Session::has('flash_message'))
      {{ Session::get('flash_message') }}
      @endif
    </div>
    <div class="container">
      @yield('content')
    </div>
  </div>

    @include('includes.footer')

</body>
</html>