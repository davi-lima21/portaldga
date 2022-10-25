@extends('layouts.app')

@section('content')
<style>

  .pedidos{
      background-color: #008080;
  }
  .container{
        
       }

       .card{

        width: 380px;
        border: none;
        border-radius: 15px;
        padding: 8px;
        background-color: #fff;
        position: relative;
        height: 370px;
       }

       .upper{

        height: 100px;

       }

       .upper img{

        width: 100%;
        height: 150px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;

       }

       .user{
        position: relative;
       }

       .profile img{

        
        height: 80px;
        width: 80px;
        margin-top:2px;

       
       }

       .profile{

        position: absolute;
        top:-50px;
        left: 38%;
        height: 90px;
        width: 90px;
        border:3px solid #fff;

        border-radius: 50%;

       }

       .follow{

        border-radius: 15px;
        padding-left: 20px;
        padding-right: 20px;
        height: 35px;
       }

       .stats span{

        font-size: 29px;
       }
  
</style>

<div class="container mt-5 d-flex justify-content-center align-items-center">
             
  <div class="card text-dark my-5">

   <div class="upper">

     <img class="col-12" src="{{$userInfo->img_capa}}" class="img-fluid">
     
   </div>

   <div class="user text-center">

     <div class="profile">

       <img src="{{$userInfo->img_perfil}}" class="rounded-circle" width="80">
       
     </div>

   </div>


   <div class="mt-5 text-center">

     <h4 class="mb-0">{{$name_user->name}}</h4>
     <span class="text-muted d-block mb-2">Entrou em {{$userInfo->created_at}}</span>

     <a href="{{route('post_user.index', $userInfo->Users_id)}}" class="btn btn-dark btn-sm follow">Ver postagens</a>
     <hr>

     <div class="d-flex justify-content-between align-items-center mt-4 px-4">
       <div class="stats">
         <h6 class="mb-0">Postagens</h6>
         <span>{{$total_posts[0]->total}}</span>

       </div>
       <div class="stats">
        <h6 class="mb-0">Blogs</h6>
        <span>{{$total_blogs[0]->total}}</span>

      </div>
      <div class="stats">
        <h6 class="mb-0">Interações</h6>
        <span>{{$total_interacoes}}</span>

      </div>
       
     </div>
     
   </div>
    
  </div>

</div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content bg-dark">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Remover Dados</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Tem certeza que deseja remover o Dados?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Cancelar</button>
              <form id="id-form-destroy" class="d-inline-block col-12 col-md-2" action="{{route("userinfo.destroy", $userInfo->Users_id)}}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Remover" class="btn btn-outline-danger">
            </form>
            </div>
          </div>
        </div>
      </div>  
@endsection

