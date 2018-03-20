@extends('layouts.master')

@section('content')
<div class="row-fluid">
               <div class="span12">
                  <div class="widget">
                        <div class="widget-title">
                           <h4><i class="icon-bullhorn"></i> Curso</h4>
                        </div>
                        <div class="widget-body">
                            <div class="span3">
                                <div class="text-center profile-pic">
                                          <img class="border" width="300"src="{{$curso->img}}" alt="{{$curso->descricao}}">
                                </div>
                            </div>
                            <div class="span6">
                                <h4>{{$curso->nome}}</h4>
                                <table class="table table-borderless">
                                    <tbody>
                                    <tr>
                                        <td class="span2">Duração:</td>
                                        <td>{{$curso->duracao}}</td>
                                    </tr>
                                    <tr>
                                        <td class="span2">Carga Horaria:</td>
                                        <td>{{$curso->ch_total}}</td>
                                    </tr>
                                    <tr>
                                        <td class="span2">Disciplinas:</td>
                                        <td>{{$curso->disciplinas->count()}}</td>
                                    </tr>
                                    </tbody>
                                </table>
																<br>
																<br>
                                <hr class="clearfix" />
                                <h4>Descricao:</h4>
                                <textarea name="name" rows="10" class="span12" disabled>{{$curso->descricao}}</textarea>
                            </div>
                            <div class="space5"></div>
                            <hr class="clearfix" />
														<a type="button" href="{{route('adm.curso')}}" class="btn" name="button"> <span class="icon-chevron-left"></span> Voltar</a>
														<a type="button" href="{{route('adm.curso.editar',$curso->id)}}" class="btn" name="button"> <span class="icon-edit"></span> Editar</a>

                        <hr class="clearfix" />

                        </div>
										</div>
                  </div>
               </div>
            </div>
@endsection
