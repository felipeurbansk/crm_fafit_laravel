@extends('layouts.site.master')
@section('content')
    <!-- Page Title bar -->
    <section class="defult-page-title overlay-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-box">
                        <h2>Nossos <span>professores</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Teachers Start -->
    <section class="teachers-area">
        <div class="container">
            <div class="row">
                @foreach($professores as $p)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="teachers-col">
                            <div class="teacher-img">
                                <img src="{{$p->img}}" alt="{{$p->nome}}">
                                <div class="social-group">
                                    <ul>
                                        <li><a href="{{$p->facebook}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="{{$p->linkedin}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <a href="{{route('site.professor',$p->id)}}"><i class="fa fa-plus link" aria-hidden="true"></i></a>
                            </div>
                            <h4><a href="{{route('site.professor',$p->id)}}">{{$p->nome}}</a></h4>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="my-pagination">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                {{$professores->links()}}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection