@extends('layouts.app')
@section('content')

<style>
    footer{
        bottom: 0;
    }
</style>
    
<div class="container mt-5">
    <h1 class="text-center">Cadastrar dados!</h1>

<form action="{{route('userinfo.store')}}" class="col-md-8 m-auto" method="post">
    <div class="row">
        @csrf
        <div class="mb-3">
            <label for="id-input-id" class="form-label">ID</label>
            <input type="text" class="form-control" id="id-input-id" aria-describedby="idHelp" placeholder="#" disabled>
          </div>
        <div class="mb-3">
            <label for="id-input-img" class="form-label">Imagem de perfil</label>
            <input type="text" class="form-control" id="id-input-img" name="profileImg" placeholder="Digite a url da imagem de capa..." required>
        </div>
        <div class="mb-3">
            <label for="id-input-img-capa" class="form-label">Imagem de capa</label>
            <input type="text" class="form-control" id="id-input-img-capa" name="img_capa" placeholder="Digite a url da imagem de capa..." required>
        </div>
        <div class="mb-3 col-md-6">
            <label for="id-rede_socia" class="form-label">Link de alguma rede social</label>
            <input type="text" class="form-control" id="id-rede_socia" name="rede_social" placeholder="Digite o link de alguma rede social" required>
        </div>
        <div class="mb-3 col-md-6">
            <label for="id-input-data" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="id-input-data" name="telefone" placeholder="Digite um número de celular" required>
        </div>
    </div>
    <a href="#!" class="btn btn-outline-light">Voltar</a>
    <input class="btn btn-outline-light" type="submit" value="Enviar">
</form>
</div>
<br><br><br><br>
@endsection