<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<style>

    .bg-green,
    .btn-outline-success:hover,
    .btn-outline-success:focus {
        background: #143038;
        background: linear-gradient(171deg, #143038 0%, #194b32 93%);
    }

    .img-post {
        max-height: 30rem;
    }

    .data {
        color: rgba(255, 255, 255, 0.603)
    }

    .usuario {
        color: rgba(255, 255, 255, 0.603)
    }

    .usuario:hover {
        color: rgba(255, 255, 255, 0.824)
    }

    .usuario:focus {}

    p {
        margin-bottom: 0
    }

    p {
        text-indent: 1.5em;
        margin-top: 0
    }

    .form-control:focus {
        color: #212529;
        border-color: #194b32;
        outline: 0;
        box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, .5);
    }

    .form-floating>.form-control,
    .form-floating>.form-control-plaintext,
    .form-floating>.form-select {
        height: auto;
        line-height: 1.25;
    }
</style>


    @extends('layouts.app')

    @section('content')
        <div class="container my-5">
            <h1 class="text-center my-3">{{ $post->titulo }}</h1>
            <img class="col-12 shadow rounded img-post" src="{{ $post->url_image }}" alt="">
            <div class="mt-3">{{ $post->descricao }}</div>
            <h3 class="my-3">{{ $post->titulo_2 }}</h3>
            <div class="mb-3">{{ $post->conteudo }}</div>
           
                <img class="col-10 m-auto d-block shadow rounded img-post mb-3" src="{{ $post->url_image2 }}" alt="">
            
            
            <a href="{{$post->fonte_link}}" target="_blank" class="link-light my-5"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-flag" viewBox="0 0 16 16">
                <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001M14 1.221c-.22.078-.48.167-.766.255-.81.252-1.872.523-2.734.523-.886 0-1.592-.286-2.203-.534l-.008-.003C7.662 1.21 7.139 1 6.5 1c-.669 0-1.606.229-2.415.478A21.294 21.294 0 0 0 3 1.845v6.433c.22-.078.48-.167.766-.255C4.576 7.77 5.638 7.5 6.5 7.5c.847 0 1.548.28 2.158.525l.028.01C9.32 8.29 9.86 8.5 10.5 8.5c.668 0 1.606-.229 2.415-.478A21.317 21.317 0 0 0 14 7.655V1.222z"/>
              </svg> Referência</a>
            <p class="data text-end">Criado em {{ $post->created_at }}</p>
            <div class="rounded col-md-6 data text-end ms-auto my-3">
                Publicado por
                <a href="#!" class="text-decoration-none">
                    <img src="https://i.pinimg.com/originals/23/61/5c/23615ce774a4264fc334b1a5cd422de4.jpg" alt=""
                        class="rounded-circle col-1 col-md-1">
                    <a href="#!" class="text-decoration-none usuario">@DLR_2105</a> 
                </a>
            </div>

            <h2>Comentários</h2>

            <div class="row">

                @if (count($interacoes) > 0)
                    <div class="col-md-6 mt-3">
                        <div class="list-group col-12">
                            @foreach ($interacoes as $interacao)
                                <a href="#"
                                    class="list-group-item bg-dark mb-1 text-light list-group-item-action d-flex gap-3 py-3 bg-dark"
                                    aria-current="true">
                                    <img src="https://igd-wp-uploads-pluginaws.s3.amazonaws.com/wp-content/uploads/2016/05/30105213/Qual-e%CC%81-o-Perfil-do-Empreendedor.jpg"
                                        alt="img-perfil-coment" width="38" height="38"
                                        class="rounded-circle flex-shrink-0">
                                    <div class="d-flex gap-2 w-100 justify-content-between">
                                        <div>
                                            <h6 class="mb-0">{{ $interacao->name }}</h6>
                                            <p class="mb-0 opacity-75">{{ $interacao->comentario }}</p>
                                        </div>
                                        <small class="opacity-50 text-nowrap">{{ $interacao->created_at }}</small>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                @else
                    <h6 class="my-4">Ainda não há comentários...</h6>
                @endif
                <form action="{{ route('interacao_post.store') }}" method="post" class="col-md-6">
                    @csrf
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <div class="form-floating">
                        <textarea class="form-control bg-dark text-light" name="comentario" id="floatingInput" placeholder="Coment..."
                            rows="3" minlength="2" maxlength="150" required></textarea>
                        <label for="floatingInput" class="text-secondary">Comentário</label>
                    </div>
                    <input class="btn btn-outline-success col-12 mt-2" type="submit" value="Enviar">
                </form>


            </div>
        </div>
    @endsection



</html>
