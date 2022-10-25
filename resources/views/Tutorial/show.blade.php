@extends('layouts.app')

@section('content')


    
<div class="container mt-5">
    <h1 class="text-center mb-4">{{$tutorial->titulo}}</h1>

    <div class="row">
        <div class="col-md-5 m-auto">
            <img src="{{$tutorial->url_image}}" class="rounded col-12" alt="" height="300" class="col-12">
        </div>
        <div class="col-md-5 m-auto mt-3 mt-md-0">
            <iframe class="rounded col-12" height="300"
            src="{{$tutorial->url_video}}">
            </iframe>
        </div>
    </div>
    <div class="my-3">
        {{$tutorial->descricao}}
    </div>      
    <div>{{$tutorial->conteudo}}</div>
</div>
@endsection
