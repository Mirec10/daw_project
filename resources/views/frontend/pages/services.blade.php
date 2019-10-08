@extends('layout.frontend')

@section('menu')
    @include('frontend._partials._menu', ['navbar' => 'main-navbar-1', 'menu' => 'main-menu-1'])

    <div class="page-header" data-stellar-background-ratio="0.4" style="background-image: url({{ asset('img/banner/banner-menu.jpg') }})">
        <div class="page-header-overlay"></div>
        <div class="container">
            <div class="row">

                <div class="page-header-title">
                    <h2>Služby</h2>
                </div>

                <div class="page-header-breadcrumb">
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ route('web.home.' . app()->getLocale()) }}">
                                Úvod
                            </a>
                        </li>
                        <li class="active">Služby</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="def-section about-text">
        <div class="container">
            <h2>Služby</h2>

            <div class="service-block">
                <h5>Poradenstvo a návrh prepravného riešenia</h5>
                <p>
                    Definovanie trasy, vozidla a vypracovanie cenovej kalkulácie.
                </p>
            </div>
            <div class="service-block">
                <h5>Realizáciu  prepravy tovaru do a z Európskej únie</h5>
                <p>
                    Špecializujeme sa prevažne na Nemecko,  Francúzko,  Švajciarsko, Španielsko a Benelux,
                    ale nebránime sa ani iným krajinám v rámci Európskej únie.
                </p>
            </div>
            <div class="service-block">
                <h5>Uskladnenie tovaru</h5>
                <p>
                    Uskladnenie tovaru na doležitých dopravných ťahoch na Slovensku v Českej republike a v Nemecku.
                    <br>(Bratislava, Nitra, Praha, České Budejovice, Olomouc, Frankfurt, Dietzenbach, Neuss, ...)
                </p>
            </div>
        </div>
    </div>

    <div class="def-section stats" id="home-stats" data-stellar-background-ratio="0.4" style="background-image: url({{ asset('img/banner/banner.jpg') }})">
        <div class="stats-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="stat-item">
                        <div class="stat-item-number" id="num1">
                            100384
                            <span>+</span>
                        </div>
                        <div class="stat-item-text">
                            ton tovaru
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="stat-item stat-item-mark">
                        <div class="stat-item-number" id="num2">
                            520
                        </div>
                        <div class="stat-item-text">
                            prepravcov
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="stat-item">
                        <div class="stat-item-number" id="num3">
                            450
                        </div>
                        <div class="stat-item-text">
                            klientov
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="stat-item">
                        <div class="stat-item-number" id="num4">
                            16135
                        </div>
                        <div class="stat-item-text">
                            vybavených zákazok
                        </div>
                    </div>
                </div>

                <div class="hidden-lg col-md-4 col-sm-6 col-xs-12">
                    <div class="stat-item">
                        <div class="stat-item-number" id="num5">
                            19
                        </div>
                        <div class="stat-item-text">
                            krajín
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="def-section" id="clients-section">
        <div class="home-big-image" data-stellar-background-ratio="0.4"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="home-clients">
                        <div class="title-group">
                            <h2>Klienti</h2>
                            <div class="subtitle with-square">Lorem ipsum</div>
                        </div>

                        <div class="home-clients-carousel owl-carousel owl-theme" id="owl-clients">
                            @foreach($clients->chunk(3) as $chunk)
                                <div class="home-clients-carousel-block">
                                    @foreach($chunk as $client)
                                        <div class="home-clients-carousel-item">
                                            <a href="#"><img src="{{ asset($client->profile_thumb) }}" alt="" /></a>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>

                        <div class="home-clients-buttons">
                            <a id="prev-clients" href="#">
                                <div class="my-btn my-btn-primary">
                                    <div class="my-btn-bg-top"></div>
                                    <div class="my-btn-bg-bottom"></div>
                                    <div class="my-btn-text">
                                        <i class="fa fa-angle-left"></i>
                                    </div>
                                </div>
                            </a>
                            <a id="next-clients" href="#">
                                <div class="my-btn my-btn-grey">
                                    <div class="my-btn-bg-top"></div>
                                    <div class="my-btn-bg-bottom"></div>
                                    <div class="my-btn-text">
                                        <i class="fa fa-angle-right"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection