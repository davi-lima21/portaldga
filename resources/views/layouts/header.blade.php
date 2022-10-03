<style>
    body {
        
        padding-top: 3.5rem;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-green fixed-top shadow">
    <div class="container-fluid">
        <a class="navbar-brand d-lg-none col-4 col-sm-2" href="{{route('welcome.home')}}"> <img
                src="{{asset('img/logo.webp')}}"
                alt="" class="d-inline-block align-text-top col-12 image-navbar"></a>
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand d-none d-lg-block col-md-1" href="{{route('welcome.home')}}"> <img
                    src="{{asset('img/logo.webp')}}"
                    alt="" class="d-inline-block align-text-top image-navbar mt-1 col-12"></a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
            </ul> 
            <div class="d-none d-lg-block">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                    list="itens">
                <button class="btn btn-outline-success" type="submit">Search</button>
                <datalist id="itens">
                    <option value="Programação"></option>
                    <option value="Geral"></option>
                    <option value="Hardware"></option>
                    <option value="Educação"></option>
                </datalist>
            </form>
        </div>
            <div class="dropdown text-start ms-md-3">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="mdo" width="35" height="35" class="rounded-circle">
                </a>
                <ul class="dropdown-menu dropdown-menu-start dropdown-menu-lg-end text-small">
                    <li><a class="dropdown-item" href="{{route('post.create')}}">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Criar Post</font>
                            </font>
                        </a></li>
                    <li><a class="dropdown-item" href="#">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Definições</font>
                            </font>
                        </a></li>
                    <li><a class="dropdown-item" href="#">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Perfil</font>
                            </font>
                        </a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Sair</font>
                            </font>
                        </a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<main>
    @yield('content')
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
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-facebook-f"></i
            ></a>
      
            <!-- Twitter -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-twitter"></i
            ></a>
      
            <!-- Google -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-google"></i
            ></a>
      
            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-instagram"></i
            ></a>
      
            <!-- Linkedin -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-linkedin-in"></i
            ></a>
      
            <!-- Github -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-github"></i
            ></a>
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
</main>