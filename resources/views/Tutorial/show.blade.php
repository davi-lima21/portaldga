<div class="container">
    <h1 class="text-center">{{$tutorial->titulo}}</h1>

    <div class="row">
        <div class="col-md-5">
            <img src="" alt="" class="col-12">
        </div>
        <div class="col-md-5">
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