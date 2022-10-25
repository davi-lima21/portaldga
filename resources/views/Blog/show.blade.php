@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="col-12">
            
            Postado por: 
            <a class="col-12 text-secondary" href="{{route('userinfo.show', $blog->users_id)}}"><img class="rounded-circle" width="40" src="{{$userInfo->img_perfil}}" alt="img_perfil">
            {{$userInfo->name}} 
        </a>em {{$blog->created_at}}
        <div class="text-end float-end d-none d-lg-block">
            <a class="btn btn-outline-light text-end" href="{{route('blog.index')}}">Voltar</a>
        </div>
        </div>
        <hr>
        
        <h2 class="text-center mb-2 mb-md-5">{{$blog->titulo}}</h2>
        <div class="row">
            <div class="col-md-6 h-100">
                <div class="h-100 my-3 col-md-12 m-auto">
                    <h5 class="my-auto" style="text-align: justify">{{$blog->descricao}}</h5>
                </div>
                
            </div>
            <div class="col-md-6">
                <img class="col-12 rounded shadow" src="{{$blog->url_image}}" alt="">
            </div>
        </div>
    </div>

@endsection