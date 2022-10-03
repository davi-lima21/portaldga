<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<style>
    
    html,

body {  
  align-items: center;
}
.bg-green,
    .btn-outline-success:hover,
    .btn-outline-success:focus {
        background: #143038;
        background: linear-gradient(171deg, #143038 0%, #194b32 93%);
    }
.form-signin {
  max-width: 330px;
  padding: 15px;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
input::placeholder{
    color: rgba(2, 2, 2, 0.375);
}

.form-control:focus{
    color: #212529;
    border-color: #194b32;
    outline: 0;
    box-shadow: 0 0 0 0.25rem rgba(25,135,84, .5);
}



footer{
    position: fixed;
    bottom: 0;
    right: 0;
    left: 0;
    z-index: 1030;
}
</style>

<body class="bg-dark text-light">

    @extends('layouts.header')

    @section('content')
    <div class="container mt-5">

        <main class="form-signin col-12 m-auto">
            <form class="m-auto">
              <img class="mb-4 col-12 rounded" src="{{asset('img/logo.webp')}}">
              <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
          
              <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput" class="text-secondary">Email address</label>
              </div>
              <div class="form-floating">
                  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword" class="text-secondary">Password</label>
              </div>
          
              <div class="checkbox mb-3">
                <label>
                  <input class="form-check-input" type="checkbox" value="remember-me"> Remember me
                </label>
              </div>
              <button class="w-100 btn btn-lg btn-outline-success" type="submit">Sign in</button>
             
            </form>
        </main>
    </div>
        

      @endsection
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</html>