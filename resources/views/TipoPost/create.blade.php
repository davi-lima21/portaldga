<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar Tópico de Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body class="bg-dark text-light">
    <form action="{{route("tipopost.store")}}" method="post">
    @csrf
    <div class="form-group">
        <label for="">Tópico</label>
        <input type="text" name="tipo" id="topico" class="form-control" required>
    </div>
    <a href="{{route("tipopost.index")}}" class="btn btn-outline-light">Voltar</a>
    <input type="submit" class="btn btn-outline-light" value="Cadastrar">
    </form>

</body>
</html>