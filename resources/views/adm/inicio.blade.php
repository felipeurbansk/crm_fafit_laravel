@extends('layouts.master')

@section('content')
<div class="row-fluid">
             <div class="span12">
               <h3 class="text-center">Dashboard</h3>
               <div class="row-fluid circle-state-overview">
                 <div class="span2 responsive clearfix" data-tablet="span3" data-desktop="span2">
                       <div class="circle-wrap">
                           <div class="stats-circle gray-color">
                               <i class="icon-beaker"></i>
                           </div>
                           <p>
                               <strong>{{$cursos->count()}}</strong>
                               Cursos
                           </p>
                       </div>
                 </div>
                 <div class="span2 responsive clearfix" data-tablet="span3" data-desktop="span2">
                       <div class="circle-wrap">
                           <div class="stats-circle green-color">
                               <i class="icon-group"></i>
                           </div>
                           <p>
                               <strong>{{$professores->count()}}</strong>
                               Professores
                           </p>
                       </div>
                 </div>
                  <div class="span2 responsive clearfix" data-tablet="span3" data-desktop="span2">
                        <div class="circle-wrap">
                            <div class="stats-circle turquoise-color">
                                <i class="icon-briefcase"></i>
                            </div>
                            <p>
                                <strong>{{$membros->count()}}</strong>
                                Membros CPA
                            </p>
                        </div>
                  </div>
                  <div class="span2 responsive clearfix" data-tablet="span3" data-desktop="span2">
                        <div class="circle-wrap">
                            <div class="stats-circle blue-color">
                                <i class="icon-user"></i>
                            </div>
                            <p>
                                <strong>{{$usuarios->count()}}</strong>
                                Usuários Administrativos
                            </p>
                        </div>
                  </div>
                  <div class="span2 responsive clearfix" data-tablet="span3" data-desktop="span2">
                        <div class="circle-wrap">
                            <div class="stats-circle red-color">
                                <i class="icon-bullhorn"></i>
                            </div>
                            <p>
                                <strong>{{$noticias->count()}}</strong>
                                Notícias
                            </p>
                        </div>
                  </div>
                  <div class="span2 responsive clearfix" data-tablet="span3" data-desktop="span2">
                        <div class="circle-wrap">
                            <div class="stats-circle purple-color">
                                <i class="icon-calendar"></i>
                            </div>
                            <p>
                                <strong>5</strong>
                                Eventos
                            </p>
                        </div>
                  </div>
               </div>
               <!-- BEGIN SITE VISITS PORTLET-->
               <div class="widget">
                   <div class="widget-title">
                       <h4><i class="icon-bar-chart"></i> Line Chart</h4>
                       <span class="tools">
                       <a href="javascript:;" class="icon-chevron-down"></a>
                       <a href="javascript:;" class="icon-remove"></a>
                       </span>
                   </div>
                   <div class="widget-body">
                       <div id="site_statistics_loading">
                           <img src="img/loading.gif" alt="loading" />
                       </div>
                       <div id="site_statistics_content" class="hide">
                           <div id="site_statistics" class="chart"></div>
                       </div>
                   </div>
               </div>
             </div>
</div>
@endsection
