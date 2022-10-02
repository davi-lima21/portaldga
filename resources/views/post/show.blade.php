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
        min-height: 75rem;
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
    
</style>
<body class="bg-dark text-bg-dark">

    @extends('layouts.header')

    @section('content')
    <div class="container mt-2">
        <h1 class="text-center mb-3">{{$post->titulo}}</h1>
        <img class="col-12 shadow rounded img-post" src="{{$post->url_image}}" alt="">
        <p>{{$post->descricao}}</p>
        <p class="data text-end">Criado em {{$post->created_at}}</p>
        <div class="rounded col-md-6 data text-end ms-auto">
            Publicado por
            <a href="#!" class="text-decoration-none">
                <img src="https://i.pinimg.com/originals/23/61/5c/23615ce774a4264fc334b1a5cd422de4.jpg" alt="" class="rounded-circle col-1 col-md-1">
               <a href="#! link-light" class="text-decoration-none usuario">@DLR_2105</a> 
            </a>
        </div>
</div>
    @endsection
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</html>