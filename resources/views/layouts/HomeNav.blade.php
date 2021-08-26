<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/ico" href="images/Briefcase.png">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<!----------------------------------------------------------------- Navigation(Start) ---------------------------------------------------------------------------------->            

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/Logo1.png')}}" alt="" class="img-fluid" width=145px>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        
                    </ul>
                </div>
            </div>
        </nav>
<!----------------------------------------------------------------- Navigation(End) ---------------------------------------------------------------------------------->            

<!----------------------------------------------------------------- Slide Show(Start) ----------------------------------------------------------->

<body class="antialiased" style="background-color: black">
<div class="container-fluid" >
   <div class="row1" Style="margin-left: -15px ">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" margin="auto" Style = "width: 101%;">
            <div class="carousel-inner" style="position: relative;">
                <div class="carousel-item active" data-interval="4000">
                <img src="images/banner1.3.png" class="d-block w-100" alt="..." style ="height:20%; width: 100%; postition: relative;">
                <a href="{{ url('user/Studentlogin') }}" class="button"><button class="btn btn-danger" style="border-radius: 20em; margin-left: 35%; margin-top: -35%; postition: absolute;" type="button">Become Student</button></a>
            </div>
            
            <div class="carousel-item" style="position: relative;" data-interval="4000">
                <img src="images/banner3.jpg" class="d-block w-100" alt="..." style ="height:20%; width: 100%; postition: relative;">
                <a href="{{ url('Employer/EmployerLogin') }}" class="button"><button class="btn btn-danger" style="border-radius: 20em; margin-left: 35%; margin-top: -35%; postition: absolute;" type="button">Become Employer</button></a>
            </div>
        </div>

            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
<!----------------------------------------------------------------- Slide Show(End) ----------------------------------------------------------->
        <main class="py-4">
            @yield('content')
        </main>
    </body>
</html>