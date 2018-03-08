<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title></title>
   <base href="{{url('')}}" />
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="Fafit - Faculdades integradas de itararé" name="description" />
   <meta content="Felipe Urbanski" name="author" />
   <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />

   <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="css/style.css" rel="stylesheet" />
   <link href="css/style_responsive.css" rel="stylesheet" />
   <link href="css/style_default.css" rel="stylesheet" id="style_color" />

   <link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
   <link rel="stylesheet" type="text/css" href="assets/chosen-bootstrap/chosen/chosen.css" />

   <link rel="stylesheet" href="assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
   <link href="css/style_w2net.css" rel="stylesheet" />

   <script src="js/jquery-1.8.3.min.js"></script>
   <script src="js/jquery.inputmask.bundle.min.js"></script>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
   <div id="header" class="navbar navbar-inverse navbar-fixed-top">
       <!-- BEGIN TOP NAVIGATION BAR -->
       <div class="navbar-inner">
           <div class="container-fluid">
               <!-- BEGIN LOGO -->
               <a class="brand" href="index.html">
                   <img src="" alt="" />
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
                       <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               <span class="username">Usuario</span>
                               <b class="caret"></b>
                           </a>
                           <ul class="dropdown-menu">
                               <li><a href="#"><i class="icon-user"></i> Alterar Senha</a></li>
                               <li class="divider"></li>
                               <li><a href="#>"><i class="icon-key"></i> Sair</a></li>
                           </ul>
                       </li>
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

         <div class="sidebar-toggler hidden-phone"></div>

         <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
         <div class="navbar-inverse">
            <form class="navbar-search visible-phone">
               <input type="text" class="search-query" placeholder="Search" />
            </form>
         </div>
         <!-- END RESPONSIVE QUICK SEARCH FORM -->
         <!-- BEGIN SIDEBAR MENU -->
         <ul class="sidebar-menu">
           <li class=""><a class="" href="{{url('adm')}}"><span class="icon-box"><i class="icon-home"></i></span>Home</a></li>
           <li class=""><a class="" href="{{url('adm/curso')}}"><span class="icon-box"><i class="icon-book"></i></span>Cursos</a></li>
           <li class=""><a class="" href="{{url('adm/cpa')}}"><span class="icon-box"><i class="icon-star"></i></span>CPA</a></li>
           <li class=""><a class="" href="{{url('adm/noticia')}}"><span class="icon-box"><i class="icon-list"></i></span>Notícias</a></li>
           <li class=""><a class="" href="{{url('adm/professor')}}"><span class="icon-box"><i class="icon-user"></i></span>Professores</a></li>
           <li class=""><a class="" href="{{url('adm/calendario')}}"><span class="icon-box"><i class="icon-calendar"></i></span>Calendario</a></li>
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
                     Página de teste
                     <small>Testando ADMin Lab</small>
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

            <!-- Conteudo -->
            @yield('content')
          </div>
       <!-- END PAGE CONTAINER-->
    </div>
    <!-- END PAGE -->
 </div>
 <!-- END CONTAINER -->
 <!-- BEGIN FOOTER -->
 <div id="footer">
    <div class="span pull-right">
       <span class="go-top"><i class="icon-arrow-up"></i></span>
    </div>
 </div>
 <!-- END FOOTER -->
 <!-- BEGIN JAVASCRIPTS -->
 <!-- Load javascripts at bottom, this will reduce page load time -->
 <script src="assets/bootstrap/js/bootstrap.min.js"></script>
 <script src="js/jquery.blockui.js"></script>
 <!-- ie8 fixes -->
 <!--[if lt IE 9]>
 <script src="js/excanvas.js"></script>
 <script src="js/respond.js"></script>
 <![endif]-->
 <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
 <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
 <script src="assets/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
 <script type="text/javascript" src="assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
 <script src="js/scripts.js"></script>
 <script>
    jQuery(document).ready(function() {
       // initiate layout and plugins
       App.init();

    });
 </script>
 <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
