@extends('layouts.site.master')
@section('content')
<!-- Page Title bar -->
    <section class="defult-page-title defult-page-title-faleconosco overlay-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-box">
                        <h2><span>Fale</span> conosco</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <!-- Contact Start -->
    <section class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="contact-col contact-infobox">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <p>{{config('app.email')}}</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="contact-col contact-infobox">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <p>{{config('app.telefone')}}</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="contact-col contact-infobox">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <p>{{config('app.endereco')}}</p>
                        <p>{{config('app.cidade')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection