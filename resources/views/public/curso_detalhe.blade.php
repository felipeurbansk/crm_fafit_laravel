@extends('layouts.site.master')
@section('content')
    <!-- Page Title bar -->
    <section class="defult-page-title overlay-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-box">
                        <h2><span>{{$curso->nome}}</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Course Single Start -->
    <section class="course-single-area">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="course-single-col">
                        <img src="{{$curso->img}}" alt="{{$curso->nome}}">
                        <h2>{{$curso->nome}}</h2>
                        <p>{{$curso->descricao}}</p>
                        <div class="course-features">
                            <h3>DETALHES DO CURSO</h3>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="course-features-col clearfix">
                                        <ul>
                                            <li>Curso : <span class="pull-right">{{$curso->nome}}</span></li>
                                            <li>Duração : <span class="pull-right">{{$curso->duracao}} Anos</span></li>
                                            <li>Carga Horaria Total: <span class="pull-right">{{$curso->ch_total}} Hrs</span></li>
                                            <li>Aulas: <span class="pull-right">Segunda - Sexta</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sidebar-col">
                        <div class="sidebar-search-box">
                            <form>
                                <div class="input-group">
                                    <input placeholder="Procurar" class="form-control" name="search-field" type="text">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <div class="categories">
                            <div class="sidebar-title">
                                <h3>Disciplinas</h3>
                            </div>
                            <ul class="clearfix">
                                @foreach($curso->disciplinas as $d)
                                    <li>{{$d->nome}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
