<!DOCTYPE html>
<html>
<head>
  @include('includes.head')
</head>
<body>

  <header class="row">
    @include('includes.header')
  </header>
  
  <div class="container">
    <div class="row">
    
        <!-- main content -->
        <div class="col-md-8">
            @yield('content')
        </div>


        <!-- sidebar content -->
          <div class="col-md-4">
              @include('includes.sidebar')
          </div>

    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>
  </div>

</body>
</html>