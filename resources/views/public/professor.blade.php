@extends('layouts.site.master')
@section('content')
    <!-- Page Title bar -->
    <section class="defult-page-title defult-page-title-professores overlay-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-box">
                        <h2>Prof. <span>{{$professor->nome}}</span> </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Teachers Single Start -->
    <section class="teacher-single-area">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5">
                    <div class="teacher-single-col">
                        <img src="{{$professor->img}}" alt="{{$professor->nome}}">
                    </div>
                </div>
                <div class="col-md-7 col-sm-7">
                    <div class="teacher-single-col">
                        <div class="teacher-biography">
                            <ul>
                                <li><strong>Nome : </strong> {{$professor->nome}}</li>
                                <li><strong>Titulação : </strong> {{$professor->titulacao}}</li>
                                <li><strong>Coordenador : </strong> {{($professor->coordenador == 1 ? 'Sim' : 'Não')}}</li>
                                <li><strong>Rede social : </strong>
                                    <a href="{{$professor->facebook}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="{{$professor->linkedin}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                            <p>{{$professor->descricao}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Teachers Start -->
    <section class="teachers-area pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-8">
                    <div class="section-title">
                        <div class="title-style">
                            <h2>Outros Professores</h2>
                            <div class="title-icon">
                                <i class="icofont icofont-hat"></i>
                            </div>
                        </div>
                        <p>Veja também outros professores de nossa instituição.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($professores as $ps)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="teachers-col">
                            <div class="teacher-img">
                                <img src="{{$ps->img}}" alt="{{$ps->nome}}">
                                <div class="social-group">
                                    <ul>
                                        <li><a href="{{$ps->facebook}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="{{$ps->linkedin}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <a href="{{route('site.professor',$ps->id)}}"><i class="fa fa-plus link" aria-hidden="true"></i></a>
                            </div>
                            <h4><a href="{{route('site.professor',$ps->id)}}">{{$ps->nome}}</a></h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection