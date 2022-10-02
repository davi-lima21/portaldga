<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tópicos de posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <div class="container">
        <h1 class="text-center">Tópicos de posts</h1>
        <a href="{{route("tipopost.create")}}" class="btn btn-outline-light">Criar Tópico</a>
        <table class="table table-hover table-dark">
            <thead>
                <th>ID</th>
                <th>Tópico</th>
                <th>Data de criação</th>
                <th>Ultima atualização</th>
                <th>Ações</th>
            </thead>
            <tbody>
                @foreach ($tipoPosts as $tipoPost)
                <tr>
                    
                <td>{{$tipoPost->id}}</td>
                <td>{{$tipoPost->tipo}}</td>
                <td>{{$tipoPost->created_at}}</td>
                <td>{{$tipoPost->updated_at}}</td>
                <td>
                    <a href="#!" class="btn btn-outline-success">Editar</a>
                    <a href="#!" class="btn btn-outline-danger ms-2">Deletar</a>
                </td>
               
            </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</body>
</html>