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
body {
        padding-top: 3.5rem;
    }
    .bg-green,
    .btn-outline-success:hover,
    .btn-outline-success:focus {
        background: #143038;
        background: linear-gradient(171deg, #143038 0%, #194b32 93%);
    }

    .img-post{
        max-height: 30rem;
    }
    .data{
        color: rgba(255, 255, 255, 0.603)
    }
    .usuario{
        color: rgba(255, 255, 255, 0.603)
    }
    .usuario:hover{
        color: rgba(255, 255, 255, 0.824)
    }
    .usuario:focus{
        
    }
    .form-control:focus{
    color: #212529;
    border-color: #194b32;
    outline: 0;
    box-shadow: 0 0 0 0.25rem rgba(25,135,84, .5);
}

.form-floating>.form-control, .form-floating>.form-control-plaintext, .form-floating>.form-select {
    height: auto;
    line-height: 1.25;
}
    
</style>
<body class="bg-dark text-bg-dark">

    @extends('layouts.header')

    @section('content')
    <div class="container mt-2">
        <h1 class="text-center mb-3">{{$post->titulo}}</h1>
        <img class="col-12 shadow rounded img-post" src="{{$post->url_image}}" alt="">
        <p class="mt-3">{{$post->descricao}}</p>
        <p class="data text-end">Criado em {{$post->created_at}}</p>
        <div class="rounded col-md-6 data text-end ms-auto my-3">
            Publicado por
            <a href="#!" class="text-decoration-none">
                <img src="https://i.pinimg.com/originals/23/61/5c/23615ce774a4264fc334b1a5cd422de4.jpg" alt="" class="rounded-circle col-1 col-md-1">
               <a href="#! link-light" class="text-decoration-none usuario">@DLR_2105</a> 
            </a>
        </div>

        <h2>Comentários</h2>

        <div class="row">

            @if (count($interacoes) > 0)
            <div class="col-md-6 mt-3">
                <div class="list-group col-12">
                    @foreach ($interacoes as $interacao)
                        
                    <a href="#" class="list-group-item bg-dark mb-1 text-light list-group-item-action d-flex gap-3 py-3 bg-dark" aria-current="true">
                      <img src="https://igd-wp-uploads-pluginaws.s3.amazonaws.com/wp-content/uploads/2016/05/30105213/Qual-e%CC%81-o-Perfil-do-Empreendedor.jpg" 
                      alt="img-perfil-coment" width="38" height="38"  class="rounded-circle flex-shrink-0">
                      <div class="d-flex gap-2 w-100 justify-content-between">
                        <div>
                          <h6 class="mb-0">{{$interacao->nome}}</h6>
                          <p class="mb-0 opacity-75">{{$interacao->comentario}}</p>
                        </div>
                        <small class="opacity-50 text-nowrap">{{$interacao->created_at}}</small>
                      </div>
                    </a>
                    @endforeach
                  </div>
            </div>
            
                
            @else
                
            <h6 class="my-4">Ainda não há comentários...</h6>
                          
            @endif
            <form action="{{route("interacao_post.store")}}" method="post" class="col-md-6">
                @csrf
                <input type="hidden" name="post_id" value="{{$post->id}}">
                <div class="form-floating">
                    <textarea class="form-control bg-dark text-light" name="comentario" id="floatingInput" placeholder="Coment..." rows="3" minlength="2"
                     maxlength="150"  required></textarea>
                    <label for="floatingInput" class="text-secondary">Comentário</label>
                  </div>
                  <input class="btn btn-outline-success col-12 mt-2" type="submit" value="Enviar">
            </form>

    
        </div>
</div>
    @endsection
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</html>