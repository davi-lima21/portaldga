@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-dark">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('tutorial.index')}}" class="btn btn-outline-success">Gerenciar Tutoriais</a>
                    <a href="{{route('tipopost.index')}}" class="btn btn-outline-success">Gerenciar Tipos de Posts</a>
                    <a href="#!" class="btn btn-outline-success">Gerenciar Posts</a>
                    <a href="{{url('/')}}" class="btn btn-outline-success">Voltar</a>
                </div>
                
                W]cQ*{t%2dvAM204
       
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection
