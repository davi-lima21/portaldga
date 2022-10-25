@extends('layouts.app')

@section('content')

<style>
    .card-text {
            min-height:4rem;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
        }
</style>
    <div class="container mt-5">
        <div class="text-center">

            <h1>Tutoriais</h1>
            <div class="col-md-8 m-auto">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                a type specimen book.
            </div>
        </div>
        <hr>
        <div class="col-12 mt-5">

            <div class="row">

                @foreach ($tutoriais as $tutorial)
                    
                <div class="col-md-4">
                    <div class="card bg-dark  mb-4 box-shadow">
                        <img class="card-img-top"
                            data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                            alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"
                            src="{{$tutorial->url_image}}"
                            data-holder-rendered="true">
                        <div class="card-body">
                            <h5 class="card-text my-auto">{{$tutorial->titulo}}</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{route('tutorial.show', $tutorial->id)}}" class="btn btn-sm btn-outline-secondary">Ver mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        </div>
@endsection
