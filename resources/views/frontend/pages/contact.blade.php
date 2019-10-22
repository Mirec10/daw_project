@extends('layout.frontend')

@section('menu')
    @include('frontend._partials._menu', ['navbar' => 'main-navbar-1', 'menu' => 'main-menu-1'])

    <div class="page-header" data-stellar-background-ratio="0.4" style="background-image: url({{ asset('img/banner/banner-menu.jpg') }})">
        <div class="page-header-overlay"></div>
        <div class="container">
            <div class="row">

                <div class="page-header-title">
                    <h2>Kontakt</h2>
                </div>

                <div class="page-header-breadcrumb">
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ route('web.home.' . app()->getLocale()) }}">
                                Úvod
                            </a>
                        </li>
                        <li class="active">Kontakt</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="def-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                    <div class="contacts-info">
                        <div class="contacts-info-title">
                            <div class="contacts-info-title-icon">
                                <i class="fa fa-comments"></i>
                            </div>
                            <h3>
                                Potrebujete pomôcť?
                                <br>Opýtajte sa
                            </h3>
                        </div>
                        <div class="contacts-info-text">
                            V prípade akýchkoľvek otázok nás neváhajte kontaktovať.
                            Zároveň Vás prosíme o trpezlivosť, na Vaše otázky sa
                            snažíme odpovedať najrýchlejšie ako je to možné.
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                    <div class="contacts-form row">
                        <div class="send-result">
                            @if(isset($error))
                                <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    {{ $error }}
                                </div>
                                <div class="error-message">{{ $error }}</div>
                            @endif
                            @if(isset($success))
                                <div class="alert alert-success alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    {{ $success }}
                                </div>
                            @endif
                        </div>
                        <form action="{{ route('web.contact.post.' . app()->getLocale()) }}" method="post">
                            @csrf
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 contacts-form-item">
                                @include('frontend._partials._errors', ['column' => 'name'])
                                <input type="text" name="name" placeholder="Vaše meno" value="{{ old('name') }}">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 contacts-form-item">
                                @include('frontend._partials._errors', ['column' => 'phone'])
                                <input type="text" name="phone" placeholder="Váš telefón" value="{{ old('phone') }}">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contacts-form-item">
                                @include('frontend._partials._errors', ['column' => 'email'])
                                <input type="text" name="email" placeholder="Váš e-mail" value="{{ old('email') }}">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contacts-form-item">
                                @include('frontend._partials._errors', ['column' => 'message'])
                                <textarea name="message" placeholder="Ako Vám môžeme pomôcť?">{{ old('message') }}</textarea>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contacts-form-item contacts-form-button">
                                <button>
                                    <span class="my-btn my-btn-grey">
									<span class="my-btn-bg-top"></span>
									<span class="my-btn-bg-bottom"></span>
									<span class="my-btn-text">
										ODOSLAŤ
									</span>
								</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="def-section contact-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 contact-detail">
                    <div class="contact-detail-icon">
                        <i class="flaticon-map58"></i>
                    </div>
                    <div class="contact-detail-title">
                        <h3>Adresa</h3>
                    </div>
                    <div class="contact-detail-text">
                        Chotárna 1
                        <br>949 01 Nitra
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 contact-detail contact-detail-mark">
                    <div class="contact-detail-icon">
                        <i class="flaticon-telephone5"></i>
                    </div>
                    <div class="contact-detail-title">
                        <h3>Telefón | Email</h3>
                    </div>
                    <div class="contact-detail-text">
                        +421 000 000 000
                        <br>example@damaro.sk
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 contact-detail">
                    <div class="contact-detail-icon">
                        <i class="flaticon-clock96"></i>
                    </div>
                    <div class="contact-detail-title">
                        <h3>Pracovné hodiny</h3>
                    </div>
                    <div class="contact-detail-text">
                        Po - Pia: 08:00 - 16:00
                        <br>So - Ne: 09:00 -  12:00
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection