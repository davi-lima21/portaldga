@extends('layouts.app')
@section('content')
    
<div class="container">
    <h1 class="text-center">Editar dados do usuário</h1>
<form action="{{route('userinfo.update', $userInfo->Users_id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="row">

        <div class="mb-3">
            <label for="id-input-id" class="form-label">ID</label>
            <input type="text" class="form-control" id="id-input-id" aria-describedby="idHelp" placeholder="#" disabled>
          </div>
        <div class="mb-3">
            <label for="id-input-img" class="form-label">Imagem de perfil</label>
        <input type="text" class="form-control" id="id-input-img" name="profileImg" value="{{$userInfo->profileImg}}" placeholder="Digite a url da imagem..." required>
        </div>
        <div class="mb-3 col-md-5">
            <label for="id-input-data" class="form-label">Data de nascimento</label>
        <input type="date" class="form-control" id="id-input-data" name="dataNasc" value="{{$userInfo->dataNasc}}" placeholder="Digite a data de nascimento..." required>
        </div>
        <div class="mb-3 col-md-3">
            <label for="id-input-data" class="form-label">Status</label>
            <input type="text" class="form-control" id="id-input-data" name="status" value="Ativo" disabled>
        </div>
        <div class="mb-3 col-md-4">
            <label for="id-input-genero" class="form-label">Gênero</label>
            <select name="genero" id="id-input-genero" class="form-select">
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
                <option value="O">Outros</option>
            </select>
        </div>
    </div>
        <a href="#!" class="btn btn-outline-light">Voltar</a>
        <input class="btn btn-outline-light" type="submit" value="Enviar">
    </div>
</form>
    
</div>
@endsection
