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
@endsection