<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body class="bg-dark text-light">
    <div class="container">
        <h1 class="text-center">Criar post</h1>
        <form action="{{route("post.store")}}" method="POST" class="col-md-8 m-auto">
            @csrf
            <div class="mb-3">
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" id="titulo" class="form-control">
            </div>
            <div class="row">

                <div class="mb-3 col-sm-6">
                    
                    <label for="url_image">Url da imagem</label>
                <input type="text" name="url_image" id="url_image" class="form-control">
                </div>
                <div class="mb-3 col-sm-6">
                    <label for="tipo">Tópico</label>
                    <select name="tipo" id="tipo" class="form-select">
                        <option selected>Selecione o tópico do post</option>
                        @foreach ($tipoPosts as $tipoPost)    
                        <option value="{{$tipoPost->id}}">{{$tipoPost->tipo}}</option>
                        @endforeach
                    </select>
                    <input type="hidden" name="user_id" value="1">
                </div>
            </div>
            <div class="mb-3">
                <label for="descricao">Descrição</label>
                <textarea type="text" name="descricao" id="descricao" class="form-control" rows="5"></textarea>
            </div>
            <div class="mb-3">
                
                <a href="{{route("welcome.home")}}" class="btn btn-outline-light">Voltar</a>
                <input type="submit" value="Cadastrar" class="btn btn-outline-light">
            </div>
        </form>
    </div>
</body>
</html>