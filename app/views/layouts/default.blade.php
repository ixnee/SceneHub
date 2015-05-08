{{--

 Author:          Lisa Balogh
 Revision Date:   May 7, 2014
 File Name:       default.blade.php
 Description:     Default blade template for entire site

--}}

@include('includes.head')

<body>
  
@include('includes.header')

<div class="container-fluid">

  <div class="container">
  @if (Session::has('flash_message'))
    <p class="text-danger">{{ Session::get('flash_message') }}</p>
  @endif
  </div>

  <div class="container">
    @yield('content')
  </div>

</div>

@include('includes.footer')

</body>

</html>