@extends('layout.frontend')

@section('menu')
    @include('frontend._partials._menu', ['navbar' => 'main-navbar-1', 'menu' => 'main-menu-1'])

    <div class="page-header" data-stellar-background-ratio="0.4" style="background-image: url({{ asset('img/banner/banner-menu.jpg') }})">
        <div class="page-header-overlay"></div>
        <div class="container">
            <div class="row">

                <div class="page-header-title">
                    <h2>Kariéra</h2>
                </div>

                <div class="page-header-breadcrumb">
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ route('web.home.' . app()->getLocale()) }}">
                                Úvod
                            </a>
                        </li>
                        <li class="active">Kariéra</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="def-section about-text">
        <div class="container">
            <h2>Voľné pracovné pozície</h2>

            @foreach($jobs as $job)
                <div class="job-block">
                    <div class="job-heading">
                        {{ $job->name }}
                    </div>
                    <div class="service-block">
                        <h5>Čo ponúkame:</h5>
                        {!! $job->offer !!}
                    </div>
                    <div class="service-block">
                        <h5>Čo požadujeme:</h5>
                        {!! $job->requirements !!}
                    </div>
                    <div class="service-block">
                        <h5>Pracovná náplň:</h5>
                        {!! $job->description !!}
                    </div>
                </div>
            @endforeach

            <p>
                V pripade záujmu o pracovnú pozíciu, neváhajte poslať svoj životopis na e-mailovú adresu
                <span class="color-primary">cv@damaro-slovakia.eu</span>
            </p>
        </div>
    </div>
@endsection