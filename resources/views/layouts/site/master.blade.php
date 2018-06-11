@include('layouts.site._include.header')
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>

    <!-- Main Header Start -->
    <header class="main-herader">
        <!-- Header top start -->
        <div class="header-topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-sm-8">
                        <div class="header-topbar-col clearfix">
                            <ul>
                                <li>
                                    <p><i class="fa fa-phone" aria-hidden="true"></i>{{config('app.telefone')}}</p>
                                </li>
                                <li>
                                    <p><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="#">{{config('app.email')}}</a>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 ml-auto col-md-6 col-sm-4">
                        <div class="header-topbar-col clearfix">
                            <div class="social-link-group">
                                <a href="{{config('app.facebook')}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="{{config('app.twitter')}}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="{{config('app.linkedin')}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header top end -->

        <!-- Navigation -->
        <nav class="navbar navbar-expand-md nav navbar-dark">
          <div class="container">
            <a class="navbar-brand" href="{{route('site.index')}}">
                <img src="images/logo_fafit.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                
                <li class="nav-item active dropdown">
                    <a class="nav-link" href="{{route('site.index')}}">Inicio <i aria-hidden="true"></i></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{route('site.cursos')}}">Cursos<i aria-hidden="true"></i></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="{{route('site.professores')}}">Professores<i aria-hidden="true"></i></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="{{route('site.noticias')}}">Notícias<i aria-hidden="true"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('site.contato')}}">Fale conosco</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
    </header>
<!-- Conteudo -->
    @yield('content')
<!-- Fim Conteudo -->

<!-- Footer Start -->
<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="footer-col">
                    <img class="footer-logo" src="images/logo_fafit_org.png" alt="">
                    <p class="top-para">As Faculdades Integradas de Itararé à FAFIT, projetadas em princípios éticos e humanísticos, têm por missão contribuir na formação integral de cidadãos, por meio da produção e difusão do conhecimento e da cultura, em um contexto de pluralidade.</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12">
                <div class="footer-col">
                    <h3>Links</h3>
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Sobre nós</a></li>
                        <li><a href="#">Cursos</a></li>
                        <li><a href="#">Noticias</a></li>
                        <li><a href="#">Contato</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="footer-col address-col">
                    <h3>Entre em contato</h3>
                    <p>Caso tenha duvidas entre em contato com a gente ou venha até a nossa instituição conhecê-la melhor e fazer parte desse grupo.</p>
                    <ul>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>{{config('app.endereco')}} {{config('app.cidade')}}</li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i>{{config('app.email')}}</li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i> {{config('app.telefone')}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Copyright Start -->

<section class="copyright-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright-col text-center">
                    <p>©2018. Desenvolvido por <a href="www.fafit.com.br" target="_blank">Fafit.</a> Todos direitos reservados.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<a href="#" class="scrollup">
    <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
</a>


@include('layouts.site._include.footer')