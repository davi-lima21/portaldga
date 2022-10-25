@extends('layouts.app')

@section('content')
<style>
    .titulo-blog {
            min-height:4rem;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
        }
</style>
    <div class="container mt-5">

        <div class="text-center">

            <h1>Blog</h1>
            <div class="col-md-8 m-auto">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                a type specimen book.
            </div>
        </div>
        <hr>
        <a class="btn btn-outline-light rounded-circle" href="{{route("blog.create")}}"><i class="fa-solid fa-plus"></i></a>
        <div class="row mt-5 mb-2">
            @foreach ($blogs as $blog)
            <?php 
                $timestamp = explode(" ",$blog->created_at);
                
            ?>
                
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2  text-muted">{{$timestamp[0]}}</strong>
                        <h3 class="mb-0 titulo-blog">{{$blog->titulo}}</h3>
                        <hr>
                        {{-- <p class="card-text mb-auto">{{$blog->descricao}}</p> --}}
                        <a href="{{route('blog.show', $blog->id)}}" class="stretched-link btn btn-sm btn-outline-secondary col-3">Ver mais</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                            <img width="200" height="250" src="{{$blog->url_image}}" alt="">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
