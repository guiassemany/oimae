<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>OiMãe - Login</title>
    <meta content="OiMãe" name="description"/>
    <meta content="OiMãe" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <!-- App Icons -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('backend/assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('backend/assets/css/style.css')}}" rel="stylesheet" type="text/css"/>

</head>


<body>

<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner"></div>
    </div>
</div>

<!-- Begin page -->
<div class="accountbg"></div>
<div class="home-btn d-none d-sm-block">
    <a href="{{route('home')}}" class="text-white"><i class="mdi mdi-home h1"></i></a>
</div>
<div class="wrapper-page">

    <div class="card">
        <div class="card-body">

            <div class="p-3">
                <div class="float-right text-right">
                    <h4 class="font-18 mt-3 m-b-5">Bem vindo novamente!</h4>
                    <p class="text-muted">Faça login para continuar.</p>
                </div>
                <a href="#" class="logo-admin">
                    <img src="{{asset('landing/images/oimaefull.png')}}" height="52" alt="logo">
                </a>
            </div>

            <div class="p-3">

                <form class="form-horizontal m-t-10" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="username">E-mail</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                               name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="userpassword">Senha</label>
                        <input id="password" type="password"
                               class="form-control @error('password') is-invalid @enderror" name="password" required
                               autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group row m-t-30">
                        <div class="col-sm-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customControlInline">
                                <label class="custom-control-label" for="customControlInline">Lembrar-me</label>
                            </div>
                        </div>
                        <div class="col-sm-6 text-right">
                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Entrar</button>
                        </div>
                    </div>

                    <div class="form-group m-t-30 mb-0 row">
                        <div class="col-12 text-center">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-muted"><i
                                        class="mdi mdi-lock"></i> Esqueceu sua senha?</a>
                            @endif

                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <div class="m-t-40 text-center text-white-50">
        <p>Ainda não tem uma conta ? <a href="{{route('register')}}" class="font-600 text-white"> Cadastre-se agora </a>
        </p>
        <p>© {{date('Y')}} OiMãe. Desenvolvido com <i class="mdi mdi-heart text-danger"></i> por Equipe OiMãe</p>
    </div>

</div>

<!-- jQuery  -->
<script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('backend/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('backend/assets/js/modernizr.min.js')}}"></script>
<script src="{{asset('backend/assets/js/waves.js')}}"></script>
<script src="{{asset('backend/assets/js/jquery.slimscroll.js')}}"></script>

<!-- App js -->
<script src="{{asset('backend/assets/js/app.js')}}"></script>

</body>
</html>
