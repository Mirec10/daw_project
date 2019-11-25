@extends('layout.frontend')

@section('menu')
    @include('frontend._partials._menu', ['navbar' => 'main-navbar-1', 'menu' => 'main-menu-1'])

    <div class="page-header" data-stellar-background-ratio="0.4" style="background-image: url({{ asset('img/banner/banner-menu.jpg') }})">
        <div class="page-header-overlay"></div>
        <div class="container">
            <div class="row">

                <div class="page-header-title">
                    <h2>Vozový park</h2>
                </div>

                <div class="page-header-breadcrumb">
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ route('web.home.' . app()->getLocale()) }}">
                                Úvod
                            </a>
                        </li>
                        <li class="active">Vozový park</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="def-section about-text">
        <div class="container">
            <h2>Vozový park</h2>

            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <ul class="cars-list">
                        <li>moderné ťahače značky Iveco Highway Stralis splňujúce najvyššiu normu Euro 6</li>
                        <li>plachtové  návesy s certifikátom XL (34 paletovych miest)</li>
                        <li>megové návesy s 3m vnútornou výškou a certifikátom XL (34 paletovych miest)</li>
                        <li>všetky autá vybavené GPS s prístupom aj pre zákaznikov</li>
                        <li>odkladací priestor na prázdne palety pre potrebu paletových výmen</li>
                    </ul>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <img src="{{ asset('img/pages/cars-1.jpg') }}" alt="" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
@endsection