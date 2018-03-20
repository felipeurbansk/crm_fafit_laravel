@extends('layouts.master')

@section('content')
<div class="row-fluid">
               <div class="span12">
                  <div class="widget">
                        <div class="widget-title">
                           <h4><i class="icon-bullhorn"></i> CPA</h4>
                        </div>
                        <div class="widget-body">
                            <div class="span3">
                                <div class="text-center profile-pic">
                                          <img class="border" width="300"src="{{$membro->cpa->img}}" alt="{{$membro->cpa->descricao}}">
                                </div>
                            </div>
                            <div class="span6">
                                <h4>{{$membro->nome}}</h4>
                                <table class="table table-borderless">
                                    <tbody>
                                    <tr>
                                        <td class="span2">Cargo:</td>
                                        <td>{{$membro->cargos}}</td>
                                    </tr>
                                    </tbody>
                                </table>
																<br>
																<br>
                                <hr class="clearfix" />
                                <h4>Descricao:</h4>
                                <textarea name="name" rows="10" class="span12" disabled>{{$membro->cpa->descricao}}</textarea>
                            </div>
                            <div class="space5"></div>
                            <hr class="clearfix" />
														<a type="button" href="{{route('adm.cpa')}}" class="btn" name="button"> <span class="icon-chevron-left"></span> Voltar</a>
														<a type="button" href="{{route('adm.cpa.editar',$membro->id)}}" class="btn" name="button"> <span class="icon-edit"></span> Editar</a>

                        <hr class="clearfix" />

                        </div>
										</div>
                  </div>
               </div>
            </div>
@endsection
