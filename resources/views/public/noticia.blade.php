@extends('layouts.site.master')
@section('content')
    <!-- Page Title bar -->
    <section class="defult-page-title defult-page-title-noticia overlay-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-box">
                        <h2><span>{{$noticia->titulo}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Single Start -->
    <section class="blog-single-field">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <div class="blog-single-col">
                        @foreach($noticia->midias as $img)
                            <img src="{{$img->caminho}}" alt="{{$noticia->titulo}}">
                        @endforeach
                        <h2>Resumo</h2>
                        <p>{{$noticia->resumo}}</p>
                        <h2>Notícia</h2>
                        <p>{{$noticia->corpo}}</p>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="sidebar-col">
                        <div class="sidebar-search-box">
                            <form>
                                <div class="input-group">
                                    <input placeholder="Search..." class="form-control" name="search-field" type="text">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-post">
                            <div class="sidebar-title">
                                <h3>Outras notícias</h3>
                            </div>
                            <ul>
                                @foreach($noticias as $n)
                                    <li>
                                        @foreach($n->midias as $img)
                                            <img src="{{$img->caminho}}" alt="{{$n->titulo}}">
                                        @endforeach
                                        <h4><a href="{{route('site.noticia',$n->id)}}">{{$n->titulo}}</a></h4>
                                        <p>{{$n->data}}</p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection