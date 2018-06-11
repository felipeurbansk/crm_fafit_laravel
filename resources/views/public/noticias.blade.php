@extends('layouts.site.master')
@section('content')
    <!-- Page Title bar -->
    <section class="defult-page-title overlay-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-box">
                        <h2>Todas <span>Notícias</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Start -->
    <section class="blog-section">
        <div class="container">
            <div class="row">
                @foreach($noticias as $n)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="blog-col">
                            <div class="blog-img">
                                @foreach($n->midias as $img)
                                    <img src="{{$img->caminho}}" alt="$n->titulo">
                                @endforeach
                                <div class="post-date">
                                    <h3>27 June, <span>2018</span></h3>
                                </div>
                                <div class="overlay"></div>
                            </div>
                            <h4><a href="{{route('site.noticia',$n->id)}}">{{$n->titulo}}</a></h4>
                            <p>{{str_limit($n->resumo,350)}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="my-pagination">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                {{$noticias->links()}}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection