@extends('layouts.site.master')
@section('content')
    <!-- Page Title bar -->
    <section class="defult-page-title defult-page-title-curso overlay-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-box">
                        <h2>Nossos <span>Cursos</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Course Start -->
    <section class="course-area">
        <div class="container">
            <div class="row">
                @foreach($cursos as $c)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="course-col">
                            <div class="course-item">
                                <div class="course-image">
                                    <img src="{{$c->img}}" alt="{{$c->nome}}">
                                    <div class="course-cost">
                                        <h2>Duração {{$c->duracao}}</h2>
                                    </div>
                                    <div class="over-shadow"></div>
                                </div>
                                <h4><a href="{{route('site.curso',$c->id)}}">{{$c->nome}}</a></h4>
                                <p>{{str_limit($c->descricao,350)}}</p>
                                <a class="btn btn-primary my-btn" href="{{route('site.curso',$c->id)}}" role="button">Detalhes</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="my-pagination">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                    {{ $cursos->links() }}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection