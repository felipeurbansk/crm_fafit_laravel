@extends('layouts.site.master')
@section('content')

    <!-- Slider Start -->
    <section class="main-slider-area">
        <ul class="main-slider slide">
            @foreach($slide as $s)
                <li class="slide__item item-bg" style="background-image:url({{$s->link}})">
                <div class="slide-caption">
                    <h2 class="slide-caption__title">{{$s->titulo}}</h2>
                    <p class="slide-caption__desc">{{$s->descricao}}</p>
                    <a href="{{$s->link}}" class="btn">Leia Mais</a>
                </div>
                </li>
            @endforeach
        </ul>
    </section>

    <!-- About Start -->
    <section class="about-section">
        <br>
        <div class="container">
            <div class="row animatedParent animateOnce">
                <div class="col-lg-7">
                    <div class="about-col animated fadeInLeftShort slow">
                        <h2>Instituição</h2>
                        <h5>Missão Institucional</h5>
                        <p class="para-space">As Faculdades Integradas de Itararé, projetadas em princípios éticos e humanísticos, têm por missão contribuir na formação integral de cidadãos, por meio da produção e difusão do conhecimento e da cultura, em um contexto de pluralidade.</p>
                        <div class="about-item">
                            <i class="icofont icofont-hat"></i>
                            <h4>Igualdade</h4>
                            <p>Todos os indivíduos são iguais perante a sociedade, com os mesmos direitos e deveres e serão possuidores, com igualdade, ao final de cada curso, do melhor conhecimento, na respectiva especialidade.</p>
                        </div>
                        <div class="about-item">
                            <i class="icofont icofont-hat"></i>
                            <h4>Qualidade</h4>
                            <p>O ensino e a vivência escolar são conduzidos de modo a criar as melhores e mais apropriadas oportunidades para que os indivíduos se desenvolvam na sua potencialidade, culturalmente, politicamente, socialmente, humanisticamente e profissionalmente.</p>
                        </div>
                        <div class="about-item">
                            <i class="icofont icofont-hat"></i>
                            <h4>Democracia</h4>
                            <p>A responsabilidade pelo cumprimento desta missão estáo dividida entre alunos, professores, funcionários, administradores e comunidade, que participando crítica e enfaticamente do processo acadêmico, promovem o exercício da plena cidadania.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-img animated fadeInRightShort slow">
                        <img src="images/fafit.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Start 
    <section class="video-section parallax overlay-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="video-col">
                        <h2>Our University Campus</h2>
                        <a class="demo" href="https://youtu.be/OOHxsbhvrUY"><i class="fa fa-play-circle" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    End Video Start-->

    <!-- Course Start -->
    <section class="course-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-8">
                    <div class="section-title">
                        <div class="title-style">
                            <h2>Nossos cursos</h2>
                            <div class="title-icon">
                                <i class="icofont icofont-hat"></i>
                            </div>
                        </div>
                        <p>Contamos com {{$curso->count()}} cursos.</p>
                    </div>
                </div>
            </div>
            <div class="row animatedParent animateOnce">
                @foreach($curso as $c)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="course-col animated fadeInUpShort slow">
                            <div class="course-item">
                                <div class="course-image">
                                    <img src="{{$c->img}}" alt="">
                                    <div class="course-cost">
                                        <h2>Duração {{$c->duracao}} anos</h2>
                                    </div>
                                    <div class="over-shadow"></div>
                                </div>
                                <h4><a href="course-single.html">{{$c->nome}}</a></h4>
                                <p>{{str_limit($c->descricao,350)}}</p>
                                <a class="btn btn-primary my-btn" href="#" role="button">Continuar lendo</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Counter Start -->
    <section class="counter-section parallax overlay-black">
        <div class="container">
            <div class="row animatedParent animateOnce">
                <div class="col-md-3 col-sm-6 col-6">
                    <div class="counter-col animated fadeInUpShort slow">
                        <div class="counter">
                            <i class="icofont icofont-certificate-alt-2"></i>
                            <div class="count">{{$curso->count()}}</div>
                        </div>
                        <p>Cursos</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6">
                    <div class="counter-col animated fadeInUpShort slow delay-500">
                        <div class="counter">
                            <i class="icofont icofont-education"></i>
                            <div class="count">{{$disciplina->count()}}</div>
                        </div>
                        <p>Disciplinas</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6">
                    <div class="counter-col animated fadeInUpShort slow delay-250">
                        <div class="counter">
                            <i class="icofont icofont-teacher"></i>
                            <div class="count">{{$professor->count()}}</div>
                        </div>
                        <p>Professores</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6">
                    <div class="counter-col animated fadeInUpShort slow delay-750">
                        <div class="counter">
                            <i class="icofont icofont-people"></i>
                            <div class="count">{{$cpa->count()}}</div>
                        </div>
                        <p>CPA</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Teachers Start -->
    <section class="teachers-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-8">
                    <div class="section-title">
                        <div class="title-style">
                            <h2>Professores</h2>
                            <div class="title-icon">
                                <i class="icofont icofont-hat"></i>
                            </div>
                        </div>
                        <p>Contamos com professores qualificados, aqui estão alguns.</p>
                    </div>
                </div>
            </div>
            <div class="row animatedParent animateOnce">
                @foreach($professor as $p)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="teachers-col animated fadeInUpShort slow">
                            <div class="teacher-img">
                                <img src="{{$p->img}}" alt="{{$p->nome}}">
                                <div class="social-group">
                                    <ul>
                                        <li><a href="{{$p->facebook}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="{{$p->linkedin}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <a href="teacher-single.html"><i class="fa fa-plus link" aria-hidden="true"></i></a>
                            </div>
                            <h4><a href="teacher-single.html">{{$p->nome}}</a></h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Separator Start 
    <section class="separator-section overlay-black">
        <div class="container">
            <div class="row justify-content-center animatedParent animateOnce">
                <div class="col-lg-5 col-md-5">
                    <div class="separator-col animated fadeInUpShort slow">
                        <img src="images/students.png" alt="">
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="separator-col">
                        <h4>REQUEST for a INFORMATION</h4>
                        <form> 
                            <div class="form-row">
                                <div class="col-md-6">
                                    <select class="custom-select">
                                      <option selected>Select Department</option>
                                      <option value="1">BBA</option>
                                      <option value="2">CSE</option>
                                      <option value="3">English</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select class="custom-select">
                                      <option selected>Academic Year</option>
                                      <option value="1">2017</option>
                                      <option value="2">2016</option>
                                      <option value="3">2015</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Your Name">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-default my-btn" type="submit">Submit Request</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    end separator-->

    <!-- Blog Start -->
    <section class="blog-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-8">
                    <div class="section-title">
                        <div class="title-style">
                            <h2>Últimas Notícias</h2>
                            <div class="title-icon">
                                <i class="icofont icofont-hat"></i>
                            </div>
                        </div>
                        <p>Aqui você fica por dentro das últimas notícias da instituição.</p>
                    </div>
                </div>
            </div>
            
            <div class="row animatedParent animateOnce">
                
                @foreach($noticia as $n)
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="blog-col animated fadeInUpShort slow delay-250">
                            <div class="blog-img">
                                @foreach($n->midias as $img)
                                <img src="{{$img->caminho}}" alt="{{$n->titulo}}">
                                @endforeach
                                <div class="post-date">
                                    <h3>28 June, <span>2018</span></h3>
                                </div>
                                <div class="overlay"></div>
                            </div>
                            <h4><a href="blog-single.html">{{$n->titulo}}</a></h4>
                            <p>{{str_limit($n->corpo,350)}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection