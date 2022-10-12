@extends('layouts.app')

@section('content')
    <style>
        html,

        body {}

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

        input::placeholder {
            color: rgba(2, 2, 2, 0.375);
        }

        .form-control:focus {
            color: #212529;
            border-color: #194b32;
            outline: 0;
            box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, .5);
        }

        .request-password{
            font-size: 0.5
        }



        footer {
            position: fixed;
            bottom: 0;
            right: 0;
            left: 0;
            z-index: 1030;
        }
    </style>
    <div class="container mt-5">

        <main class="form-signin col-12 m-auto">
            <form class="m-auto" method="POST" action="{{ route('login') }}">
                @csrf



                <img class="mb-4 col-12 rounded" src="{{ asset('img/logo.webp') }}">
                <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
                <div class="form-floating">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <label for="floatingInput" class="text-secondary">Email address</label>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-floating">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">
                    <label for="floatingPassword" class="text-secondary">Password</label>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="col-md-6 my-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>

                <div class="">
                    @if (Route::has('password.request'))
                            <a class="link-light request-password" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                        <button type="submit" class="btn btn-success bg-green w-100 mt-3">
                            {{ __('Login') }}
                        </button>
                </div>
            </form>
        </main>

    </div>
@endsection
