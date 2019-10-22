<aside id="slide-menu" class="slide-menu">
    <div class="close-menu" id="close-menu">
        <i class="fa fa-close"></i>
    </div>

    <ul id="left-menu" class="left-menu">
        <li class="{{ request()->route()->getName() == 'web.home.' . app()->getLocale() ? 'active' : '' }}">
            <a href="{{ route('web.home.' . app()->getLocale()) }}">
                {{ trans('texts.Home') }}
            </a>
        </li>
        <li class="{{ request()->route()->getName() == 'web.services.' . app()->getLocale() ? 'active' : '' }}">
            <a href="{{ route('web.services.' . app()->getLocale()) }}">
                {{ trans('texts.Services') }}
            </a>
        </li>
        <li class="{{ request()->route()->getName() == 'web.cars.' . app()->getLocale() ? 'active' : '' }}">
            <a href="{{ route('web.cars.' . app()->getLocale()) }}">
                {{ trans('texts.Car park') }}
            </a>
        </li>
        <li class="{{ request()->route()->getName() == 'web.jobs.' . app()->getLocale() ? 'active' : '' }}">
            <a href="{{ route('web.jobs.' . app()->getLocale()) }}">
                {{ trans('texts.Career') }}
            </a>
        </li>
        <li class="{{ request()->route()->getName() == 'web.contact.' . app()->getLocale() ? 'active' : '' }}">
            <a href="{{ route('web.contact.' . app()->getLocale()) }}">
                {{ trans('texts.Contact') }}
            </a>
        </li>
    </ul>
</aside>

<div class="black-overlay" id="black-overlay"></div>