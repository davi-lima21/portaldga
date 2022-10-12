<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{ asset('img/logoBarra.png') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <style>
         .bg-green,
    .btn-outline-success:hover,
    .btn-outline-success:focus {
        background: #143038;
        background: linear-gradient(171deg, #143038 0%, #194b32 93%);
    }
    
    .navbar-toggler:focus{
        box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, .5);
    }
    </style>
    <style>
        
        .posts-2:hover{
            transition-duration: 0.7s;
            background: rgb(25,75,50);
            background: linear-gradient(176deg, rgba(25,75,50,1) 41%, rgba(20,48,56,1) 100%);
        }
        
        .posts-2-h{
            height: 20rem;
        }
    
        .titulo-post {
           min-height: 5rem;
            overflow: hidden;
       text-overflow: ellipsis;
       display: -webkit-box;
       line-height: 2.5rem;     /* fallback */
            /* fallback */
       -webkit-line-clamp: 2; /* number of lines to show */
       -webkit-box-orient: vertical;
        }
    
        .titulo-post-2 {
            min-height: 5rem;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
        }
    
        .descricao {
            min-height: 2rem;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
        }
        .descricao-post-2 {
            min-height: 2rem;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
        }
    
        .fundo-image {
            min-height: 15rem;
            max-height: 15rem;
            min-width: 100%;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
    
        .image-destaque {
            min-height: 20rem;
            max-height: 20rem;
            min-width: 100%;
        }
        .posts-2{
            height: 20rem;
        }
    
        .image-destaque-2 {
            min-height: 8rem;
            height: auto;
        }
    
        .image-destaque-2:hover,
        .image-destaque:hover,
        .titulo-post:hover,
        .titulo-post-2:hover,
        .image-navbar:hover {
            filter: brightness(50%);
            transition-duration: 0.7s;
        }
    
        .btn-outline-success:hover {
            transition-duration: 0.5s;
        }
    
        .image-destaque-2:focus,
        .image-destaque:focus {}
        .form-control:focus {
            color: #212529;
            border-color: #194b32;
            outline: 0;
            box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, .5);
        }
    </style>
</head>

<body class="bg-dark text-light">
    <div id="app">
        <nav class="navbar bg-green navbar-expand-md navbar-dark shadow-sm fixed-top">
            <div class="container">
                <a class="navbar-brand col-6 col-md-2" href="{{ url('/') }}">
                    <img
                    src="{{ asset('img/logo.webp') }}" alt=""
                    class="my-auto col-10">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{ route('post.create') }}">
                                        Criar Post
                                    </a>
                                    <a class="dropdown-item" href="{{ route('post_my.index', Auth::user()->id) }}">
                                        Meus posts
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       Sair
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

        <main class="py-4">
            @yield('content')
        </main>
        <footer class="bg-dark text-center text-white">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
            {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/brands.min.css"> --}}
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
            {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/fontawesome.min.js"></script> --}}
            <!-- Grid container -->
            <div class="container p-4 pb-0">
                <!-- Section: Social media -->
                <section class="mb-4">
                    <!-- Facebook -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-facebook-f"></i></a>
    
                    <!-- Twitter -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-twitter"></i></a>
    
                    <!-- Google -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-google"></i></a>
    
                    <!-- Instagram -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-instagram"></i></a>
    
                    <!-- Linkedin -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-linkedin-in"></i></a>
    
                    <!-- Github -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-github"></i></a>
                </section>
                <!-- Section: Social media -->
            </div>
            <!-- Grid container -->
    
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2020 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
            </div>
            <!-- Copyright -->
        </footer>
    </div>
</body>

</html>
