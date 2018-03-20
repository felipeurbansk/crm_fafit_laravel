@extends('layouts.master')

@section('content')
<div class="row-fluid">
               <div class="span12">
                  <div class="widget">
                        <div class="widget-title">
                           <h4><i class="icon-user"></i>Perfil</h4>
                           <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                           </span>
                        </div>
                        <div class="widget-body">
                            <div class="span3">
                                <div class="text-center profile-pic">
                                    <img  width="400" src="{{$professor->img}}" alt="">
                                </div>
                                <ul class="nav nav-tabs nav-stacked">
                                    <li><a href="javascript:void(0)"><i class="icon-facebook"></i> Facebook</a></li>
                                    <li><a href="javascript:void(0)"><i class="icon-twitter"></i> Twitter</a></li>
                                    <li><a href="javascript:void(0)"><i class="icon-linkedin"></i> LinkedIn</a></li>
                                    <li><a href="javascript:void(0)"><i class="icon-github"></i> Github</a></li>
                                </ul>
                            </div>
                            <div class="span6">
                                <h4>{{$professor->nome}} <br/><small>@if($professor->coordenador == 1) Coordenador @else Professor @endif</small></h4>
                                <table class="table table-borderless">
                                    <tbody>
                                    <tr>
                                        <td class="span2">Nome:</td>
                                        <td>
                                            {{$professor->nome}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="span2">Titulação :</td>
                                        <td>
                                            {{$professor->titulacao}}
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
																<br>
																<br>
                                <h4>Descrição</h4>

                                <p class="push">{{$professor->descricao}}</p>

                            </div>
                            <div class="space5"></div>
														<a type="button" href="{{route('adm.professor')}}" class="btn" name="button"> <span class="icon-chevron-left"></span> Voltar</a>
														<a type="button" href="{{route('adm.professor.editar',$professor->id)}}" class="btn" name="button"> <span class="icon-edit"></span> Editar</a>
                        </div>
                  </div>
               </div>
            </div>
@endsection
