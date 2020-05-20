<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>
            @yield('title')
        </title>

        <!-- Styles -->
        <link href="{{asset('css/page.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <!-- Favicons -->
        <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
        <link rel="icon" href="{{asset('img/favicon.png')}}">
    </head>

    <body>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light navbar-stick-dark" data-navbar="sticky">
            <div class="container">
    
            <div class="navbar-left">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="logo-dark" src="{{asset('img/logo-dark.png')}}" alt="logo">
                    <img class="logo-light" src="{{asset('img/logo-light.png')}}" alt="logo">
                </a>
            </div>
            <a class="btn btn-xs btn-round btn-success" href="{{ route('login')}}">Login</a>
    
            </div>
        </nav><!-- /.navbar -->
  
        @yield('content')
        
        <!-- Footer -->
        <footer class="footer">
            <div class="container">
            <div class="row gap-y align-items-center">
    
                <div class="col-6 col-lg-6">
                <a href="{{ url('/') }}"><img src="{{asset('img/logo-dark.png')}}" alt="logo"></a>
                </div>
    
                <div class="col-6 col-lg-6 text-right order-lg-last ml-auto">
                <div class="social">
                    <a class="social-facebook" href=""><i class="fa fa-facebook"></i></a>
                    <a class="social-twitter" href=""><i class="fa fa-twitter"></i></a>
                    <a class="social-instagram" href=""><i class="fa fa-instagram"></i></a>
                    <a class="social-dribbble" href=""><i class="fa fa-dribbble"></i></a>
                </div>
                </div>
    
            </div>
            </div>
        </footer><!-- /.footer -->
    
    
        <!-- Scripts -->
        <script src="{{asset('js/page.min.js')}}"></script>
        <script src="{{asset('js/script.js')}}"></script>
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ec38c8c018e806d"></script>
    </body>
</html>