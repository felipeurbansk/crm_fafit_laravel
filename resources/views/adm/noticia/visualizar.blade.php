@extends('layouts.master')

@section('content')
<div class="row-fluid">
    <div class="span12">
        <div class="widget">
            <div class="widget-title">
            <h4><i class="icon-bullhorn"></i> Notícia</h4>
            </div>
            <div class="widget-body">
                <div class="span3">
                    <div class="text-center profile-pic">
                        @foreach($noticia->midias as $img)
                            @if($img->destaque == 1)
                                <img class="border" width="300"src="{{$img->caminho}}" alt="{{$noticia->descricao}}">
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="span6">
                    <h4>{{$noticia->titulo}}</h4>
                        <table class="table table-borderless">
                            <tbody>
                            <tr>
                                <td class="span2">Titulo:</td>
                                <td>{{$noticia->titulo}}</td>
                            </tr>
                            <tr>
                                <td class="span2">Resumo:</td>
                                <td>{{$noticia->resumo}}</td>
                            </tr>
                            <tr>
                                <td class="span2">Data:</td>
                                <td>{{$noticia->data}}</td>
                            </tr>
                            <tr>
                                <td class="span2">Palavras-chaves:</td>
                                <td>{{$noticia->palavras_chaves}}</td>
                            </tr>
                            </tbody>
                        </table>
                    <br>
                    <br>
                    <hr class="clearfix" />
                    <h4>Corpo</h4>
                    <p class="push">{{$noticia->corpo}}</p>
                </div>
                <div class="space5"></div>
                <hr class="clearfix" />
                <a type="button" href="{{route('adm.noticia')}}" class="btn" name="button"> <span class="icon-chevron-left"></span> Voltar</a>
                <a type="button" href="{{route('adm.noticia.editar',$noticia->id)}}" class="btn" name="button"> <span class="icon-edit"></span> Editar</a>

                <hr class="clearfix" />
                <h3 class="text-center">Galeria</h3>
                <div class="row-fluid">
                    @foreach($noticia->midias as $img)
                    <div class="span2">
                        <div class="thumbnail">
                            <div class="item">
                                <a class="fancybox-button" data-rel="fancybox-button" href="#">
                                    <div class="zoom">
                                        <img src="{{$img->caminho}}" alt="{{$img->destaque == 1 ? 'Imagem destaque' : 'Imagem não é de destaque'}}" />
                                    <div class="zoom-icon"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
