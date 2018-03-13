@extends('layouts.master')

@section('content')


<div class="row-fluid">
             <div class="span12">
                <!-- BEGIN INLINE NOTIFICATIONS widget-->
                <div class="widget">
                  <div class="row-fluid">
                     <div class="pricing-title">
                         <h2>Cursos de graduação</h2>
                     </div>
                  </div>
                   <div class="widget-body">
                        <div class="row-fluid">
                          @foreach($cursos as $c)
                           <div class="span3">
                              <div class="pricing-table">
                                  <div class="pricing-head" >
                                      <h3 style="background:#9f6060;"><strong>{{$c->nome}}</strong></h3>
                                      <h4 style="background:#00bfff;">
                                          <span class="note"></span>{{$c->disciplinas()->count()}}<span>Disciplinas</span></h4>
                                  </div>
                                  <ul>
                                      <li><strong>{{$c->duracao}} Semestres</strong></li>
                                  </ul>
                              </div>
                           </div>
                         @endforeach
                        </div>
                   </div>
                </div>
                <!-- END INLINE NOTIFICATIONS widget-->
             </div>
          </div>
@endsection
