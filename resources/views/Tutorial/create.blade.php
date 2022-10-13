@extends('layouts.app')

@section('content')
    


<div class="container mt-5">
    <form action="{{route('tutorial.store')}}" method="post">
        @csrf
        <div class="mb-2">
            <label for="titulo">Título</label>
            <input required class="form-control" type="text" name="titulo" id="titulo">
        </div>
        <div class="mb-2">
            <label for="descricao">Descrição</label>
            <textarea required class="form-control" type="text" name="descricao" id="descricao"></textarea>
        </div>
        <div class="mb-2">
            <label for="url_image">URL da imagem</label>
            <input required class="form-control" type="text" name="url_image" id="url_image">
        </div>
        <div class="mb-2">
            <label for="titulo_2">Titulo 2</label>
            <input required class="form-control" type="text" name="titulo_2" id="titulo_2">
        </div>
        <div class="mb-2">
            <label for="conteudo">Conteúdo</label>
            <textarea required class="form-control" type="text" name="conteudo" id="conteudo"></textarea>
        </div>
        <div class="mb-2">
            <label for="url_video">URL do vídeo</label>
            <input required class="form-control" type="text" name="url_video" id="titulo_2">
        </div>
        <input type="submit" class="btn btn-outline-light" value="Cadastrar">
        
    </form>
</div>

@endsection