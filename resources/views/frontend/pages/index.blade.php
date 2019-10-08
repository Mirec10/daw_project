@extends('layout.frontend')

@section('menu')
    @include('frontend._partials._menu', ['navbar' => 'main-navbar-2', 'menu' => 'main-menu-2'])
@endsection

@section('content')
    <div id="main-slider-2" class="main-slider main-slider-2">
        <a class="main-slider-2-button-prev" href="#">
            <div class="my-btn my-btn-grey">
                <div class="my-btn-bg-top"></div>
                <div class="my-btn-bg-bottom"></div>
                <div class="my-btn-text">
                    <i class="fa fa-angle-left"></i>
                </div>
            </div>
        </a>

        <a class="main-slider-2-button-next" href="#">
            <div class="my-btn my-btn-grey">
                <div class="my-btn-bg-top"></div>
                <div class="my-btn-bg-bottom"></div>
                <div class="my-btn-text">
                    <i class="fa fa-angle-right"></i>
                </div>
            </div>
        </a>

        <div class="sp-slides">
            <div class="sp-slide">
                <div class="main-slider-overlay"></div>
                <img class="sp-image" src="{{ asset('img/slider/truck-1.jpg') }}"
                     data-src="{{ asset('img/slider/truck-1.jpg') }}"
                     data-retina="{{ asset('img/slider/truck-1.jpg') }}" alt="" />
                <div class="container">
                    <div class="main-slider-content">
                        <h2 class="sp-layer"
                            data-position="centerCenter" data-vertical="-55"
                            data-show-transition="left" data-hide-transition="left" data-show-delay="200" data-hide-delay="200">
                            Lorem Ipsum Dolor
                        </h2>

                        <h2 class="sp-layer color-primary"
                            data-position="centerCenter" data-vertical="10"
                            data-show-transition="left" data-hide-transition="left" data-show-delay="400" data-hide-delay="400">
                            Lorem ipsum dolor sit
                        </h2>
                    </div>
                </div>
            </div>

            <div class="sp-slide">
                <div class="main-slider-overlay"></div>
                <img class="sp-image" src="{{ asset('img/slider/truck-2.jpg') }}"
                     data-src="{{ asset('img/slider/truck-2.jpg') }}"
                     data-retina="{{ asset('img/slider/truck-2.jpg') }}" alt="" />
                <div class="container">
                    <div class="main-slider-content">
                        <h2 class="sp-layer"
                            data-position="centerCenter" data-vertical="-55"
                            data-show-transition="down" data-hide-transition="down" data-show-delay="600" data-hide-delay="600">
                            Lorem ipsum dolor
                        </h2>

                        <h2 class="sp-layer color-primary"
                            data-position="centerCenter" data-vertical="10"
                            data-show-transition="down" data-hide-transition="down" data-show-delay="400" data-hide-delay="400">
                            Lorem ipsum dolor sit
                        </h2>
                    </div>
                </div>
            </div>

            <div class="sp-slide">
                <div class="main-slider-overlay"></div>
                <img class="sp-image" src="{{ asset('img/slider/truck-3.jpg') }}"
                     data-src="{{ asset('img/slider/truck-3.jpg') }}"
                     data-retina="{{ asset('img/slider/truck-3.jpg') }}" alt="" />
                <div class="container">
                    <div class="main-slider-content">
                        <h2 class="sp-layer"
                            data-position="centerCenter" data-vertical="-55"
                            data-show-transition="up" data-hide-transition="up" data-show-delay="200" data-hide-delay="200">
                            Lorem ipsum dolor
                        </h2>

                        <h2 class="sp-layer color-primary"
                            data-position="centerCenter" data-vertical="10"
                            data-show-transition="up" data-hide-transition="up" data-show-delay="400" data-hide-delay="400">
                            Lorem ipsum dolor sit
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="def-section home-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="service">
                        <div class="service-icon">
                            <i class="flaticon-email114"></i>
                        </div>
                        <h3 class="match-height">
                            {{ trans('texts.Customer') }}
                        </h3>
                        <div class="service-text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" id="service-mark">
                    <div class="service-mark-border-top"></div>
                    <div class="service-mark-border-right"></div>
                    <div class="service-mark-border-bottom"></div>
                    <div class="service-mark-border-left"></div>
                    <div class="service">
                        <div class="service-icon">
                            <i class="flaticon-group2"></i>
                        </div>
                        <h3 class="match-height">
                            {{ trans('texts.Solution') }}
                        </h3>
                        <div class="service-text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="service">
                        <div class="service-icon">
                            <i class="flaticon-direction248"></i>
                        </div>
                        <h3 class="match-height">
                            {{ trans('texts.Order') }}
                        </h3>
                        <div class="service-text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="service">
                        <div class="service-icon">
                            <i class="flaticon-map58"></i>
                        </div>
                        <h3 class="match-height">
                            {{ trans('texts.Reciept') }}
                        </h3>
                        <div class="service-text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="def-section about-quote">
        <div class="section-bg-left"></div>
        <div class="section-bg-right"></div>
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 home-about">
                    <div class="title-group">
                        <h2>{{ trans('texts.About us') }}</h2>
                    </div>

                    <p>{{ trans('texts.about-text-1') }}</p>
                    <p>{{ trans('texts.about-text-2') }}</p>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 get-quote">
                    <div class="title-group">
                        <h2>{{ trans('texts.Why us') }}</h2>
                    </div>

                    <ul class="why-us-list">
                        <li>{{ trans('texts.why-text-1') }}</li>
                        <li>{{ trans('texts.why-text-2') }}</li>
                        <li>{{ trans('texts.why-text-3') }}</li>
                        <li>{{ trans('texts.why-text-4') }}</li>
                        <li>{{ trans('texts.why-text-5') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

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