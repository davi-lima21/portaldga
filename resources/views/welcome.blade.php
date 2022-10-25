@extends('layouts.app')

@section('content')
    <style>
        .img_tutoriais {
            min-height: 10rem;
        }

        .post-2:hover,
        .post-2:focus {
            background: rgb(0, 0, 0);
            background: linear-gradient(351deg, rgba(0, 0, 0, 1) 0%, rgba(13, 68, 40, 1) 86%);
        }
    </style>
    <div class="container my-5">

        @guest
            <div class="text-center">

                <h2>Bem vindo ao portal tecnológico DGA Tech!</h2>
                <div class="col-md-8 m-auto">
                    Aqui você poderá cadastrar notícias, ver tutoriais, criar um perfil para acessar o nosso blog e acessar
                    perfil de outros usuários
                </div>
            </div>
            <hr>
        @endguest


        @if (isset($message))
            <div id="msgErro" class="alert alert-{{ $message[1] }} alert-dismissible fade show" role="alert">
                {{ $message[0] }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        {{-- <div class="my-3">

            <form class="d-flex" role="search">
                <div class="input-group">

                    <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                        list="itens">
                    <datalist id="itens">
                        <option value="Programação"></option>
                        <option value="Geral"></option>
                        <option value="Hardware"></option>
                        <option value="Educação"></option>
                        
                    </datalist>
                    <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div> --}}


        <div class="row">


            @if (count($posts_carousel) >= 3)
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
                            <a href="{{ route('post.show', $posts_carousel[0]->id) }}"
                                class="text-decoration-none mt-2 m-auto col-12 pb-2 rounded text-center text-light post">
                                <div class="col-12 m-auto fundo-image-destaque rounded shadow">
                                    <img class="col-12 rounded image-destaque" src={{ $posts_carousel[0]->url_image }}
                                        alt="">
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12 col-12 m-auto my-auto">
                                        <div class="text-decoration-none text-start text-light">
                                            <h2 class="titulo-post">{{ $posts_carousel[0]->titulo }}
                                            </h2>
                                        </div>
                                        <div class="text-start"><a class="btn btn-outline-success"
                                                href="#!">{{ $posts_carousel[0]->tipo }}</a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="{{ route('post.show', $posts_carousel[1]->id) }}"
                                class="text-decoration-none mt-2 m-auto col-12 pb-2 rounded text-center text-light post">
                                <div class="col-12 m-auto fundo-image-destaque rounded shadow">
                                    <img class="col-12 rounded image-destaque" src="{{ $posts_carousel[1]->url_image }}"
                                        alt="">
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12 col-12 m-auto my-auto">
                                        <div class="text-decoration-none text-start text-light">
                                            <h2 class="titulo-post">{{ $posts_carousel[1]->titulo }}
                                            </h2>
                                        </div>
                                        <div class="text-start"><a class="btn btn-outline-success"
                                                href="#!">{{ $posts_carousel[1]->tipo }}</a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="{{ route('post.show', $posts_carousel[2]->id) }}"
                                class="text-decoration-none mt-2 m-auto col-12 pb-2 rounded text-center text-light post">
                                <div class="col-12 m-auto fundo-image-destaque rounded shadow">
                                    <img class="col-12 rounded image-destaque" src="{{ $posts_carousel[2]->url_image }}"
                                        alt="">
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12 col-12 m-auto my-auto">
                                        <div class="text-decoration-none text-start text-light">
                                            <h2 class="titulo-post">{{ $posts_carousel[2]->titulo }}
                                            </h2>
                                        </div>
                                        <div class="text-start"><a class="btn btn-outline-success"
                                                href="#!">{{ $posts_carousel[2]->tipo }}</a>
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
            @endif

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
        @foreach ($posts as $post)
        <?php
            $data = explode(" ", $post->created_at);
        ?>
            <a href="{{ route('post.show', $post->id) }}" class="text-decoration-none  posts-2-h mt-3 col-md-6">
                <div
                    class="text-decoration-none bg-dark h-100 p-5 border border-success post-2 shadow-lg text-light rounded-3 col-12">
                    <h2 class="titulo-post-2">{{ $post->titulo }}</h2>
                    <p class="descricao-post-2">{{ $post->descricao }}</p>
                    <div class="btn-group">
                        <button class="btn btn-outline-success" type="button">{{ $post->tipo }}</button>
                        <button class="btn btn-outline-success"><i class="fa-solid fa-eye"></i></button>
                    </div>
                    <div class="text-end float-end my-auto text-muted mt-2">
                        {{$data[0]}}
                    </div>
                </div>
            </a>
        @endforeach

    </div>




    <h2 class="text-light my-5">Tutoriais</h2>

    <div class="row">
        @foreach ($tutoriais as $tutorial)
            <div class="col-md-5 shadow m-auto rounded mt-2">
                <a class="col-3 text-decoration-none text-light text-center"
                    href="{{ route('tutorial.show', $tutorial->id) }}">
                    <h3 class="col-12">{{ $tutorial->titulo }}</h3>
                    <iframe class="rounded col-12" height="300" src="{{ $tutorial->url_video }}">
                    </iframe>
                </a>
            </div>
        @endforeach
    </div>


    </div>
@endsection
