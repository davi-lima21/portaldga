
    <div class="container">
        <h1 class="text-center">Editar post</h1>
        <form action="{{route("post.update", $post->id)}}" method="POST" class="col-md-8 m-auto">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="titulo">Titulo<b>*</b></label>
                <input type="text" name="titulo" id="titulo" class="form-control" value="{{$post->titulo}}" required>
            </div>
            <div class="row">

                <div class="mb-3 col-sm-6">
                    
                    <label for="url_image">Url da imagem<b>*</b></label>
                <input type="text" name="url_image" id="url_image" class="form-control" value="{{$post->url_image}}" required>
                </div>
                <div class="mb-3 col-sm-6">
                    <label for="tipo">Tópico<b>*</b></label>
                    <select name="tipo" id="tipo" class="form-select" required>
                        @foreach ($tipoPosts as $tipoPost)
                        @if ($post->Tipo_Posts_id == $tipoPost->id)    
                        <option value="{{$tipoPost->id}}" selected>{{$tipoPost->tipo}}</option>
                        @endif
                        <option value="{{$tipoPost->id}}">{{$tipoPost->tipo}}</option>
                        @endforeach
                    </select>
                    <input type="hidden" name="user_id" value="2">
                </div>
            </div>
            <div class="mb-3">
                <label for="descricao">Resumo<b>*</b></label>
                <textarea type="text" name="descricao" id="descricao" class="form-control" rows="5" required>{{$post->descricao}}</textarea>
            </div>
            <div class="mb-3">
                <label for="titulo2">Titulo 2 (opcional)</label>
                <input type="text" name="titulo_2" id="titulo_2" value="{{$post->titulo_2}}" class="form-control">
            </div>
            <div class="mb-3">
                <label for="conteudo">Conteúdo (opcional)</label>
                <textarea type="text" name="conteudo" id="conteudo" class="form-control" rows="5">{{$post->conteudo}}</textarea>
            </div>
            <div class="mb-3">
                <label for="img2">Imagem 2 (opcional)</label>
                <input type="text" name="url_image2" id="img2" value="{{$post->url_image2}}" class="form-control">
            </div>
            <div class="mb-3 col-sm-6">
                    
                <label for="fonte_link">Fonte<b>*</b></label>
                    <input type="text" name="fonte_link" id="fonte_link" class="form-control" value="{{$post->fonte_link}}" required>
                </div>
            <div class="mb-3">
                <a href="{{route("post_my.index", Auth::user()->id)}}" class="btn btn-outline-light">Voltar</a>
                <input type="submit" value="Cadastrar" class="btn btn-outline-light">
            </div>
        </form>
    </div>
