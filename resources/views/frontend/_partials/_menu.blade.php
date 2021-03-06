<div class="main-navbar {{ $navbar }}">
    <div class="container">
        <div class="row">
            <div class="logo" id="main-logo">
                <div class="logo-image">
                    <a href="{{ route('web.home.' . app()->getLocale()) }}" class="logo-link">
                        <img src="{{ asset('img/logo.png') }}" alt="logo" class="img-responsive" width="180" />
                    </a>
                </div>
            </div>

            <div class="show-menu-control">
                <a id="show-menu" class="show-menu" href="#">
                    <div class="my-btn my-btn-primary">
                        <div class="my-btn-bg-top"></div>
                        <div class="my-btn-bg-bottom"></div>
                        <div class="my-btn-text">
                            <i class="fa fa-bars"></i>
                        </div>
                    </div>
                </a>
            </div>

            <div class="collapse navbar-collapse main-menu {{ $menu }}" id="main-menu">
                <ul class="nav navbar-nav">
                    <li class="{{ request()->route()->getName() == 'web.home.' . app()->getLocale() ? 'active' : '' }}">
                        <a href="{{ route('web.home.' . app()->getLocale()) }}">
                            {{ trans('texts.Home') }}
                        </a>
                    </li>
                    <li class="main-menu-separator"></li>
                    <li class="{{ request()->route()->getName() == 'web.services.' . app()->getLocale() ? 'active' : '' }}">
                        <a href="{{ route('web.services.' . app()->getLocale()) }}">
                            {{ trans('texts.Services') }}
                        </a>
                    </li>
                    <li class="main-menu-separator"></li>
                    <li class="{{ request()->route()->getName() == 'web.cars.' . app()->getLocale() ? 'active' : '' }}">
                        <a href="{{ route('web.cars.' . app()->getLocale()) }}">
                            {{ trans('texts.Car park') }}
                        </a>
                    </li>
                    <li class="main-menu-separator"></li>
                    <li class="{{ request()->route()->getName() == 'web.jobs.' . app()->getLocale() ? 'active' : '' }}">
                        <a href="{{ route('web.jobs.' . app()->getLocale()) }}">
                            {{ trans('texts.Career') }}
                        </a>
                    </li>
                    <li class="main-menu-separator"></li>
                    <li class="{{ request()->route()->getName() == 'web.contact.' . app()->getLocale() ? 'active' : '' }}">
                        <a href="{{ route('web.contact.' . app()->getLocale()) }}">
                            {{ trans('texts.Contact') }}
                        </a>
                    </li>
                    <li class="main-menu-separator"></li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" href="javascript:void(0)">
                            {{ app()->getLocale() }}
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            @foreach(config('settings.languages') as $key => $lang)
                                <li>
                                    <a href="{{ route('web.home.' . $key) }}" class="text-uppercase">
                                        {{ $key }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>