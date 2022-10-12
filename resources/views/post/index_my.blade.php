@extends('layouts.app')

@section('content')
<style>
    .row > * {
    flex-shrink: ;
    max-width: 100%;
    padding-right: 0;
    padding-left: 0;
    margin-top: var(--bs-gutter-y);
}
</style>

    <div class="container mt-5">
        <h1 class="text-center my-3">Meus posts</h1>

        @if (count($posts)<1)
    <style>
        footer{
            bottom: 0;
            position: fixed;
            width: 100%;
        }
    </style>

<div class="alert alert-dark" role="alert">
    Você ainda não tem postagens!
  </div>
@endif

        <div class="row">


            @foreach ($posts as $post)
                <div class="bg-green m-auto mt-2 col-md-5 col-12 pb-2 rounded text-center shadow-lg post">
                    <a href="{{route("post_my.show", $post->id)}}" class="text-decoration-none text-light">
                        <div class="col-12 fundo-image rounded-top" style="background-image: url('{{ $post->url_image }}');">
                        </div>
                        <div class="col-md-11 col-11 m-auto my-auto">

                            <div class="col-12 ms-2">
                                <div class="row my-auto">
                                    <!-- <a href="perfil.php?action=show&id=" class="col-2"><img src="il'] ?>" alt="img_perfil" class="col-12 rounded-circle img_perfil"></a> -->

                                    <p class="col-12 text-decoration-none text-start link-light data mt-3 mb-1">
                                        Postado em: {{ $post->created_at }}
                                    </p>
                                </div>
                            </div>
                            
                            <div class="text-start">
                                <h2 class="titulo-post">{{ $post->titulo }}</h2>
                            </div>
                            <div class="descricao text-start col-sm-7 col-12">
                                {{ $post->descricao }}
                            </div>
                        </div>
                    </a><hr>
                    <a href="{{route('post.destroy', $post->id)}}" class="btn btn-outline-light rounded-circle col-1 me-auto"><i class="fa-solid fa-trash"></i></a>
                    <a href="{{route('post.edit', $post->id)}}" class="btn btn-outline-light rounded-circle col-1"><i class="fa-solid fa-pen-to-square"></i></a>
                </div>


            @endforeach
        </div>

    </div>
@endsection
