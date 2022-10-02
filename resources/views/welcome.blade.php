<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portal DGA</title>
    <link rel="icon" type="icon"
        href="{{asset('img/logoBarra.png')}}">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<style>
    

    @media (min-width: 768px)
    {
    .col-md-5-5 {
        flex: 0 0 auto;
        width: 48%;
    }
}

    .bg-green,
    .btn-outline-success:hover,
    .btn-outline-success:focus {
        background: #143038;
        background: linear-gradient(171deg, #143038 0%, #194b32 93%);
    }
    
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
    /* @media (min-width: 768px)
    {
    .titulo-post {
        height: 4.9rem;
    }
}
@media (max-width: 390px)
    {
    .titulo-post {
        height: 4rem;
    }
} */


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

    .form-control:focus{
        color: #212529;
        background-color: #fff;
        border-color: rgb(85, 142, 0);
        outline: 0;
        box-shadow: 0 0 0 0.25rem #00ff08;
}


    
</style>

<body class="bg-dark">

    {{-- <nav class="navbar navbar-expand-lg navbar-dark bg-green fixed-top shadow">
        <div class="container-fluid">
            <a class="navbar-brand d-lg-none" href="#"> <img
                    src="{{asset('img/logo.webp')}}"
                    alt="" class="d-inline-block align-text-top col-10 image-navbar"></a>
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand d-none d-lg-block col-md-1" href="#"> <img
                        src="{{asset('img/logo.webp')}}"
                        alt="" class="d-inline-block align-text-top image-navbar mt-1 col-12"></a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                </ul>
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
                <div class="dropdown text-start ms-3">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="mdo" width="35" height="35" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end text-small">
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
    </nav> --}}

    @extends('layouts.header')

    @section('content')
        
    <div class="container mt-5">

        <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide col-lg-6" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="btn" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
               
                    
                
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="{{route('post.show', $posts_carousel[0]->id)}}" class="text-decoration-none mt-2 m-auto col-12 pb-2 rounded text-center text-light post">
                            <div  class="col-12 m-auto fundo-image-destaque rounded shadow">
                                <img class="col-12 rounded image-destaque"
                                    src={{$posts_carousel[0]->url_image}}
                                    alt="">
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12 col-12 m-auto my-auto">
                                    <div class="text-decoration-none text-start text-light">
                                        <h2 class="titulo-post">{{$posts_carousel[0]->titulo}}
                                        </h2>
                                    </div>
                                    <div class="text-start"><a class="btn btn-outline-success" href="#!">Programação</a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                        <div class="carousel-item">
                            <a href="{{route('post.show', $posts_carousel[1]->id)}}" class="text-decoration-none mt-2 m-auto col-12 pb-2 rounded text-center text-light post">
                                <div  class="col-12 m-auto fundo-image-destaque rounded shadow">
                                    <img class="col-12 rounded image-destaque"
                                        src="{{$posts_carousel[1]->url_image}}""
                                        alt="">
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12 col-12 m-auto my-auto">
                                        <div class="text-decoration-none text-start text-light">
                                            <h2 class="titulo-post">{{$posts_carousel[1]->titulo}}
                                            </h2>
                                        </div>
                                        <div class="text-start"><a class="btn btn-outline-success" href="#!">Programação</a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="{{route('post.show', $posts_carousel[2]->id)}}" class="text-decoration-none mt-2 m-auto col-12 pb-2 rounded text-center text-light post">
                                <div  class="col-12 m-auto fundo-image-destaque rounded shadow">
                                    <img class="col-12 rounded image-destaque"
                                        src="{{$posts_carousel[2]->url_image}}""
                                        alt="">
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12 col-12 m-auto my-auto">
                                        <div class="text-decoration-none text-start text-light">
                                            <h2 class="titulo-post">{{$posts_carousel[2]->titulo}}
                                            </h2>
                                        </div>
                                        <div class="text-start"><a class="btn btn-outline-success" href="#!">Programação</a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                </div>
                
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="col-lg-6 mt-md-2 d-none d-lg-block">
                <div class="row">
                    <div class="col-md-12 mt-3 m-auto pb-2 rounded text-light mb-md-3">
                        <div class="row">
                            <a href="#!" class="ms-md-3 col-md-4">
                                <img class="image-destaque-2 rounded col-12"
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGg3-rhU96SKw0LFDR60KXUbdi3ymZlZ8Ucw&usqp=CAU'"
                                    alt="">
                            </a>
                            <a href="#!" class="col-md-7 text-decoration-none link-light my-auto">
                                <h4 class="titulo-post-2 me-5">Notícia destaque teste do Portal de Notícias de TI DGA
                                </h4>
                            </a>

                        </div>
                    </div>

                    <div class="col-md-12 mt-3 pb-2 rounded text-light mb-3 d-none d-lg-block">
                        <div class="row">
                            <!-- <a class="ms-3 col-md-4 fundo-image-destaque-2 rounded shadow"
                                style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGg3-rhU96SKw0LFDR60KXUbdi3ymZlZ8Ucw&usqp=CAU');">
                            </a> -->
                            <a href="#!" class="ms-md-3 col-md-4 ">
                                <img class="image-destaque-2 rounded col-12"
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGg3-rhU96SKw0LFDR60KXUbdi3ymZlZ8Ucw&usqp=CAU'"
                                    alt="">
                            </a>
                            <a href="#!" class="col-md-7 text-decoration-none link-light my-auto">
                                <h4 class="titulo-post-2 me-5">Notícia destaque teste do Portal de Notícias de TI DGA
                                </h4>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            {{-- @foreach ($posts as $post)
            <div class="col-md-6">
                <a href="#!" class="text-decoration-none m-auto mt-2 me-md-3 h-100 p-5 text-bg-dark rounded-3 bg-green">
                    <h2 class="titulo-post-2"></h2>
                    <p class="descricao-post-2">{{$post->descricao}}</p>
                    <a href="#!" class="btn btn-outline-success">{{$post->tipo}}</a>
                </a>
            </div>
            
            @endforeach --}}
            @foreach ($posts as $post)
                
            <a href="{{route('post.show', $post->id)}}" class="text-decoration-none posts-2-h mt-3 col-md-6">
                <div class="text-decoration-none bg-green h-100 p-5 posts-2 text-light rounded-3 col-12" >
                  <h2 class="titulo-post-2">{{$post->titulo}}</h2>
                  <p class="descricao-post-2">{{$post->descricao}}</p>
                  <button class="btn btn-outline-success" type="button">{{$post->tipo}}</button>
                </div>
            </a>
            @endforeach
              
        </div>
        

        <h2 class="text-light">Mais acessados</h2>

        <div class="bg-green mt-2 col-md-5 col-12 pb-2 rounded text-center shadow-lg text-light post">
            <div class="col-12 fundo-image rounded-top"
                style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5jjoGFsJEbuqEjEGSKgpijeFlLj56nhe6mA&usqp=CAU');">
            </div>
            <div class="row mt-2">
                <div class="col-md-11 col-11 m-auto my-auto">

                    <div class="col-4">
                        <div class="row">
                            <!-- <a href="perfil.php?action=show&id=" class="col-2"><img src="il'] ?>" alt="img_perfil" class="col-12 rounded-circle img_perfil"></a> -->

                            <a href="#!"
                                class="col-8 mt-1 text-decoration-none text-start link-light username">@usuario</a>
                        </div>
                    </div>
                    <hr>
                    <div class="text-start">
                        <h2 class="titulo-post">Post teste</h2>
                    </div>

                    <!-- <div class="col-md-8 col-8 m-auto">
                          <img src="" alt="img_post" class="img_post col-12 rounded-circle">
                      </div> -->
                    <div class="descricao text-start col-sm-7 col-12">
                        Lorem Ipsum é simplesmente um texto fictício da indústria tipográfica e de impressão. Lorem
                        Ipsum
                        tem sido o texto fictício padrão da indústria desde os anos 1500, quando um impressor
                        desconhecido
                        pegou uma cozinha de tipos e embaralhou-a para fazer um livro de espécimes de tipos. Ele
                        sobreviveu
                        não apenas cinco séculos, mas também o salto para a composição eletrônica, permanecendo
                        essencialmente inalterado. Foi popularizado na década de 1960 com o lançamento de folhas
                        Letraset
                        contendo passagens de Lorem Ipsum e, mais recentemente, com software de editoração eletrônica
                        como
                        Aldus PageMaker, incluindo versões de Lorem Ipsum.
                    </div>
                    <div class="text-start"><a class=" text-decoration-none link-light ver-mais" href="#!">Ver
                            mais</a></div>
                </div>

            </div>
        </div>
    </div>
    @endsection


</body>

</html>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>