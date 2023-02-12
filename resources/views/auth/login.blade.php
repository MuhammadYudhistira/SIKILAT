<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-color: #013555;">
    <div id="login" class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card py-5">
                    <div class="card-body py-5">

                        <div class="row justify-content-center"  >
                            <img  src="{{ asset('img/logo.png') }}" alt="logo puskesmas" style="width:150px; ">
                        </div>
                        <div>
                            <h1 align="center"><b>SIRAMA</b> </h1>
                            <h3 align="center">( Sistem Informasi Asrama BPSDM )</h3>
                        </div> <br><br>
                        @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{session('success')}}
                            <button type="button" class="btn-close" data-bs-dismiss = "alert" aria-label="close"></button>
                        </div>
                        @endif

                        @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{session('loginError')}}
                            {{-- <button type="button" class="btn-close" data-bs-dismiss = "alert" aria-label="close"></button> --}}
                        </div>
                        @endif

                        <form method="POST" action="/auth/login" class="mt-5">
                            @csrf

                            <div class="form-group row justify-content-center">
                                <div class="col-md-8 col-sm-8" style="margin-bottom:10px ; margin-top:150px">
                                    <!-- <label for="username" class="form-label">Username</label> -->
                                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan email" name="email" value="{{ old('email') }}" required autofocus >

                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row justify-content-center mt-3">
                                <div class="col-md-8 col-sm-8" style="margin-bottom:20px">
                                    <!-- <label for="password" class="form-label">Password</label> -->
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Masukkan Password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row justify-content-center">
                                <button type="submit" class="btn btn-success px-5 mt-2" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:10px">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
