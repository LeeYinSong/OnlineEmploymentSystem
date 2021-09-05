<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<style>
        body{
            background: #eee;
            padding-bottom: 75px;
        }
    </style>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/ico" href="images/Briefcase.png">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sunrise Street') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<!------------------------------------------------------------------ Navigation(Start) ---------------------------------------------------------------------------------->            

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}" >
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
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('user/home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('ViewRecruitment') }}">Job list</a>
                        </li>
                        
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('Resume') }}">
                                        Insert Resume
                                    </a>
                                    <a class="dropdown-item" href="{{ route('editResume', ['id' => Auth::user()->id]) }}">
                                        Edit Resume
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div>

<!------------------------------------------------------------------ Navigation(End) ---------------------------------------------------------------------------------->            

<!-------------------------------------------------------------------- Content(Start) ---------------------------------------------------------------------------------->            

    <div class="p-4 ml-0 container" style= "background-image:linear-gradient(to right, rgba(128,128,128, 0.63), rgba(192,192,192, 0.82)); width: 65%; height: 90%; position: absolute">

    <strong style="font-family:verdana;" >
        <h1>About us</h1>
        </strong>
        <strong><p>What's our purpose?</p></strong>
            <p>The purpose of our website is for the students to find the freelance job or some part time to enrich themself and gain more working experience.</p>
        <strong><p>Where is the idea form?</p></strong>
        The idea of this website is came form the students between 18 to 25 years old student. we gather the idea with using the questionnaire to know the requirement form them.</p>
        <strong><p>Why our website name is called Sunrise Street?</p></strong>
        <p>Here i will tell you, this is because Sunrise is represent to the young generation and Street is represent a platform that let people find the jobs.
         Sunrise represent the young generation is because the young generation just like the sun that just came out form the horizon is fresh and ignorant.
        the street will represent to the platform that let people find jobs is because in our website we have a lot of jobs and all the jobs can combine to become a street. That's why our website is called Sunrise Street.</p>
        
    </div>
</div>
        <main class="py-4">
            @yield('content')
        </main>

<!-------------------------------------------------------------------- Content(End) ---------------------------------------------------------------------------------->            

<!------------------------------------------------------------------- Footer(Start) ---------------------------------------------------------------------------------->            

<div class="container-fluid">
        <nav class="navbar fixed-bottom navbar-expand-md navbar-light bg-white shadow-sm" Style="height: 7%">       
                    <img src="{{ asset('images/Logo1.png')}}" alt="" class="img-fluid" width=100px>      
                    <p class="m-1 copyright-text">&copy;Southern University College. 2021 </p>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarCollapse" overflow= "hidden">
                        <ul class="navbar-nav mr-auto"></ul>

                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link twitter" href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link facebook" href="#">
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link instagram" href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        
<!------------------------------------------------------------------- Footer(End) ---------------------------------------------------------------------------------->            

</body>
</html>