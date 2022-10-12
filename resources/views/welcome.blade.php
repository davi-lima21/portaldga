@extends('layouts.app')

@section('content')
    <div class="container my-5">

        @if (isset($message))
            <div id="msgErro" class="alert alert-{{ $message[1] }} alert-dismissible fade show" role="alert">
                {{ $message[0] }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="my-3">

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
        </div>


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
                                    <img class="col-12 rounded image-destaque" src="{{ $posts_carousel[2]->url_image }}""
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
            <a href="{{ route('post.show', $post->id) }}" class="text-decoration-none posts-2-h mt-3 col-md-6">
                <div class="text-decoration-none bg-green h-100 p-5 posts-2 text-light rounded-3 col-12">
                    <h2 class="titulo-post-2">{{ $post->titulo }}</h2>
                    <p class="descricao-post-2">{{ $post->descricao }}</p>
                    <button class="btn btn-outline-light" type="button">{{ $post->tipo }}</button>
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
