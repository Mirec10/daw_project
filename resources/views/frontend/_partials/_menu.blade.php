<div class="main-navbar main-navbar-2">
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

            <div class="collapse navbar-collapse main-menu main-menu-2" id="main-menu">
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
                </ul>
            </div>

        </div>
    </div>
</div>