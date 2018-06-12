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
               </div>
               
             </div>
</div>
@endsection
