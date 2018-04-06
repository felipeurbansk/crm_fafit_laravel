@include('layouts._include.header')
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
   <div id="header" class="navbar navbar-inverse navbar-fixed-top">
       <!-- BEGIN TOP NAVIGATION BAR -->
       <div class="navbar-inner">
           <div class="container-fluid">
               <!-- BEGIN LOGO -->
               <a class="brand" href="{{route('inicio')}}">
                   <img src="" alt=""/>
               </a>
               <!-- END LOGO -->
               <!-- BEGIN RESPONSIVE MENU TOGGLER -->
               <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="arrow"></span>
               </a>
               <!-- END RESPONSIVE MENU TOGGLER -->
               <div id="top_menu" class="nav notify-row">
                   <!-- BEGIN NOTIFICATION -->

               </div>
               <!-- END  NOTIFICATION -->
               <div class="top-nav ">
                   <ul class="nav pull-right top-menu" >
                       <!-- BEGIN USER LOGIN DROPDOWN -->
                       @if(Auth::guest())

                       @else
                           <li class="dropdown">
                               <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                   <span class="username"><i class="icon-user"></i> {{Auth::user()->name}}</span>
                                   <b class="caret"></b>
                               </a>
                               <ul class="dropdown-menu">
                                   <li><a href="{{route('login.reset')}}"><i class="icon-user"></i> Alterar Senha</a></li>
                                   <li class="divider"></li>
                                   <li><a href="{{route('login.logout')}}"><i class="icon-key"></i> Sair</a></li>
                               </ul>
                           </li>
                       @endif
                       <!-- END USER LOGIN DROPDOWN -->
                   </ul>
                   <!-- END TOP NAVIGATION MENU -->
               </div>
           </div>
       </div>
       <!-- END TOP NAVIGATION BAR -->
   </div>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
      <div id="sidebar" class="nav-collapse collapse">
  			<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
  			<div class="sidebar-toggler hidden-phone"></div>
  			<!-- BEGIN SIDEBAR TOGGLER BUTTON -->

  			<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
  			<div class="navbar-inverse">
  				<form class="navbar-search visible-phone">
  					<input type="text" class="search-query" placeholder="Search" />
  				</form>
  			</div>
  			<!-- END RESPONSIVE QUICK SEARCH FORM -->
  			<!-- BEGIN SIDEBAR MENU -->
        <ul class="sidebar-menu">
           <li><a class="" href="{{route('inicio')}}"><span class="icon-box"><i class="icon-dashboard"></i></span>Dashboard</a></li>
           <li><a class="" href="{{route('adm.curso')}}"><span class="icon-box"><i class="icon-book"></i></span>Cursos</a></li>
           <li><a class="" href="{{route('adm.disciplina')}}"><span class="icon-box"><i class="icon-beaker"></i></span>Disciplinas</a></li>
           <li><a class="" href="{{route('adm.professor')}}"><span class="icon-box"><i class="icon-user"></i></span>Professores</a></li>
           <li><a class="" href="{{route('adm.cpa')}}"><span class="icon-box"><i class="icon-star"></i></span>CPA</a></li>
           <li><a class="" href="{{route('adm.noticia')}}"><span class="icon-box"><i class="icon-bullhorn"></i></span>Notícias</a></li>
           <li><a class="" href="{{route('adm.calendario')}}"><span class="icon-box"><i class="icon-calendar"></i></span>Calendario</a></li>
         </ul>
         <!-- END SIDEBAR MENU -->
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->
      <div id="main-content">
      	<!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     {{substr(config('app.instituicao'),0,5)}}
                     <small>{{substr(config('app.instituicao'),6)}}</small>
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       <li>
                           <a href="#">Teste</a> <span class="divider">&nbsp;</span>
                       </li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->

               </div>
            </div>

            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div id="message_info">
              @if(session('erro'))
                <div class="alert alert-error">
                  <strong>Erro!</strong>
                  <ul>
                    {{session('erro')}}
                  </ul>
                </div>
              @endif
              @if(session('sucesso'))
                <div class="alert alert-success">
                  <strong>Sucesso!</strong>
                  <ul>
                    {{session('sucesso')}}
                  </ul>
                </div>
              @endif
            </div>
            <!-- Conteudo -->
              @yield('content')
            <!-- Fim Conteudo -->
          </div>
       <!-- END PAGE CONTAINER-->
    </div>
    <!-- END PAGE -->
 </div>
 <!-- END CONTAINER -->
@include('layouts._include.footer')
