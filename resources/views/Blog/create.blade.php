@extends('layouts.app')

@section('content')
<style>
    footer{
        
    }
</style>
    <div class="container mt-5">
        <h1 class="text-center">Criar blog</h1>

        <form class="m-auto" action="{{route('blog.store')}}" method="post">
            @csrf

             <div class="mb-3">
                <label for="id-titulo">Titulo</label>
                <input required type="text" name="titulo" id="id-titulo" class="form-control">
            </div>
            <div class="mb-3">
                <label for="id-descricao">Descrição</label>
                <textarea required name="descricao" id="id-descricao"  rows="6" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label for="img">Imagem URL</label>
                <input required type="text" name="url_image" id="img" class="form-control">
            </div>

            <input class="btn btn-outline-success" type="submit" value="Enviar">
            <a class="btn btn-outline-success" href="{{route('blog.index')}}">Voltar</a>
        </form>
    </div>
@endsection