<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Oi Mãe</title>
    <!-- Meta Share -->
    <meta property="og:title" content="OiMãe - Seu bebê sempre cuidado"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="images/screen.jpg"/>
    <!-- CSS Files -->
    <link href="https://fonts.googleapis.com/css?family=Product+Sans:300,400,700" rel="stylesheet">
    <!-- build:css css/app.min.css -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('landing/css/global/bootstrap.min.css')}}">
    <!-- Plugins -->
    <link rel="stylesheet" href="{{asset('landing/css/global/plugins/icon-font.css')}}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('landing/css/style.css')}}">
    <!-- /build -->
</head>

<body>
<header class="bg-light" id="home">

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-transparent">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{asset('landing/images/oimaefull.png')}}" class="w-50" alt="OiMãe">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav"
                    aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="site-nav">
                <ul class="navbar-nav text-sm-left ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Funcionalidades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">Preços</a>
                    </li>

                    @if(!Auth::check())
                        <li class="nav-item text-center">
                            <a href="{{route('login')}}"
                               class="btn align-middle btn-outline-primary my-2 my-lg-0">Login</a>
                        </li>
                        <li class="nav-item text-center">
                            <a href="{{route('register')}}"
                               class="btn align-middle btn-primary my-2 my-lg-0">Cadastrar</a>
                        </li>
                    @else
                        <li class="nav-item text-center">
                            <a href="{{route('dashboard')}}"
                               class="btn align-middle btn-outline-primary my-2 my-lg-0">Ir para minha área</a>
                        </li>
                    @endif
                </ul>

            </div>
        </div>
    </nav>
    <!-- // end navbar -->


    <!-- hero -->
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="display-4">O melhor App no melhor momento da vida.</h1>
            <p class="lead my-4">O OiMãe acompanha as mamães durante toda a gravidez, auxiliando para que esse período
                seja o melhor possível.</p>
            <p>
                <a href="{{route('register')}}" class="btn btn-lg btn-primary">Cadastre-se gratuitamente</a>
                <a href="#features" class="btn btn-lg btn-outline-primary">Conheça mais</a>
            </p>
        </div>

    </section>
    <!-- // end hero -->

    <div class="split-bg">
        <div class="macbook-hero">
            <img src="{{asset('landing/images/macbook.png')}}" alt="macbook" class="img-fluid"/>
            <div class="macbook-screen"><img src="{{asset('landing/images/screen_landing.png')}}" alt="screen" class="img-fluid"/>
            </div>
        </div>
        <!-- // end .macbook-hero -->
    </div>

</header>
<!-- // end #services.section -->
<div class="section bg-light py-lg">
    <div class="container">

        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="media">

                    <!-- // end .di -->
                    <div class="media-body text-center">
                        <div class="color-icon mb-3">
                            <i class="pe-7s-date pe-3x"></i>
                        </div>
                        <h5 class="mt-0">Acompanhe sua gravidez</h5>
                        Das primeiras semanas até o nascimento, receba acompanhamento do nosso bot inteligente ao longo
                        do período.
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="media">
                    <!-- // end .di -->
                    <div class="media-body text-center">
                        <div class="color-icon mb-3"><i class="pe-7s-chat pe-3x"></i></div>
                        <h5 class="mt-0">Praticidade</h5>
                        O nosso assistente inteligente pode falar com você na principais plataformas de mensagem, como
                        por exemplo o WhatsApp e o Messenger.
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="media">
                    <!-- // end .di -->
                    <div class="media-body text-center">
                        <div class="color-icon mb-3"><i class="pe-7s-cloud-upload pe-3x"></i></div>
                        <h5 class="mt-0">Tudo conectado</h5>
                        Mantenha em um só lugar, todos os registros importantes da sua gravidez e utilize esses dados
                        para apresentar aos seus médicos. Tudo sempre sincronizado.
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<!-- Features -->
<div class="section" id="features">

    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-8">
                <div class="browser-window limit-height my-5 mr-0 mr-sm-5">
                    <div class="top-bar">
                        <div class="circles">
                            <div class="circle circle-red"></div>
                            <div class="circle circle-yellow"></div>
                            <div class="circle circle-blue"></div>
                        </div>
                    </div>
                    <div class="content">
                        <img src="{{asset('landing/images/screen_landing.png')}}" alt="image">
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="media">
                    <div class="media-body">
                        <div class="media-icon mb-3"><i class="pe-7s-like2 pe-3x"></i></div>
                        <h3 class="mt-0">Painel simples</h3>
                        <p>
                            As informações sobre a sua gravidez resumidas em um painel simples e objetivo, sem
                            complicações.
                        </p>
                    </div>
                </div>
            </div>

        </div>


        <div class="row align-items-center mt-5">

            <div class="col-sm-4">
                <div class="media">
                    <div class="media-body">
                        <div class="media-icon mb-3"><i class="pe-7s-graph1 pe-3x"></i></div>
                        <h3 class="mt-0">Alertas e dicas importantes</h3>
                        <p> Receba alerta e dicas importantes para as mamães. Sabemos que nem sempre é fácil lembrar de
                            tudo, não é mesmo?</p>
                    </div>
                </div>
            </div>


            <div class="col-sm-8">
                <img src="{{asset('landing/images/8-04.png')}}" alt="image" class="img-fluid cast-shadow my-5">
            </div>


        </div>
    </div>


</div>

<!-- Pricing -->
<div class="section bg-light py-lg" id="pricing">
    <div class="container">

        <div class="section-title text-center mt-0 mb-5">
            <h3>Escolha o seu plano</h3>
            <p>Preços simples, sem taxas escondidas. Escolha o melhor plano para você.</p>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="card pricing">
                    <div class="card-body">
                        <small class="text-muted">Mamãe Básica</small>
                        <h5 class="card-title">GRÁTIS</h5>
                        <p class="card-text">
                        <ul class="list-unstyled">
                            <li>1 Filho</li>
                            <li class="plan-muted">Acesso para a família</li>
                            <li class="plan-muted">Chatbot via WhatsApp</li>
                            <li>1 usuário</li>
                        </ul>
                        </p>
                        <a href="#" class="btn btn-xl btn-outline-primary">Escolher este plano</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card pricing">
                    <div class="card-body">
                        <small class="text-muted">Mamãe Plus</small>
                        <h5 class="card-title">R$ 29</h5>
                        <p class="card-text">
                        <ul class="list-unstyled">
                            <li>2 filhos</li>
                            <li>Acesso para a família</li>
                            <li>Chatbot via WhatsApp</li>
                            <li>2 usuários</li>
                        </ul>
                        </p>
                        <a href="#" class="btn btn-xl btn-primary">Escolher este plano</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card pricing">
                    <div class="card-body">
                        <small class="text-muted">Mamãe Super</small>
                        <h5 class="card-title">R$ 50</h5>
                        <p class="card-text">
                        <ul class="list-unstyled">
                            <li>Todos os filhos</li>
                            <li>Acesso para a família</li>
                            <li>Chatbot via WhatsApp</li>
                            <li>Usuários ilimitados</li>
                        </ul>
                        </p>
                        <a href="#" class="btn btn-xl btn-outline-primary">Escolher este plano</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- // end Pricing -->

<div class="section bg-dark mt-4" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <img src="{{asset('landing/images/oimaefull.png')}}" class="logo-dark img-fluid" alt="OiMãe Logo"/>
                <!-- // end .lead -->
            </div>
            <!-- // end .col-sm-3 -->
            <div class="col-sm-2">
                <ul class="list-unstyled footer-links ml-1">
                    <li><a href="#features">Funcionalidades</a></li>
                    <li><a href="#pricing">Preço</a></li>
                </ul>
            </div>
            <!-- // end .col-sm-3 -->
            <div class="col-sm-2">
                <ul class="list-unstyled footer-links ml-1">
                    <li><a href="#">Termos</a></li>
                    <li><a href="#">Privacidade</a></li>
                </ul>
            </div>
            <!-- // end .col-sm-3 -->
            <div class="col-sm-2">
                <ul class="list-unstyled footer-links ml-1">
                    <li><a href="https://www.facebook.com/oimaeapp/">Facebook</a></li>
                </ul>
            </div>
            <!-- // end .col-sm-3 -->
            <div class="col-sm-2">
                <a href="#home" class="btn btn-sm btn-outline-primary ml-1">Ir ao topo</a>
            </div>
            <!-- // end .col-sm-3 -->
        </div>
        <!-- // end .row -->
        <div class=" text-center mt-4">
            <small class="text-muted">Copyright ©
                <script type="text/javascript">
                    document.write(new Date().getFullYear());
                </script>
                Todos os direitos reservados. OiMãe
            </small>
        </div>
    </div>
    <!-- // end .container -->
</div>
<!-- // end #about.section -->
<!-- // end .agency -->
<!-- JS Files -->
<!-- build:js js/app.min.js -->
<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="{{asset('landing/js/global/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('landing/js/global/bootstrap.bundle.min.js"')}}"></script>
<!-- Main JS -->
<script src="{{asset('landing/js/script.js')}}"></script>
<!-- /build -->
</body>

</html>
