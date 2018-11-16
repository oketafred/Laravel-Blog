<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!--Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }} ">

    @yield('styles')

    <title>Laravel Blog | @yield('title') </title>
  </head>
  <body>
    @include('layouts/navbar')

    <!-- Jumbotron -->
      <div class="container">
        @include('layouts/messages')

        @yield('content')
      </div> <!--End of the container-->

    <hr>
    
    @include('layouts/footer')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    @yield('scripts')

  </body>
</html> 