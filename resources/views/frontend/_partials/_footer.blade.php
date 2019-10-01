<footer class="def-section footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 footer-1">
                <div class="logo">
                    <div class="logo-image">
                        <img src="{{ asset('img/logo.png') }}" alt="logo" class="img-responsive" />
                    </div>
                </div>
                <div class="footer-1-text">
                    <p>
                        Praesent vestibulum dapibus nibh. Etiam iaculis nunc ac metus.
                        Ut id nisl quis enim dignissim sagittis. Etiam sollicitudin,
                        ipsum pulvinar rutrum,tellus ipsum. laoreet
                    </p>
                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 footer-1"></div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 footer-2">
                <h4 class="with-square with-border-bottom">
                    {{ trans('texts.Quick links') }}
                </h4>
                <div class="footer-2-links">
                    <div class="footer-2-links-1">
                        <ul>
                            <li>
                                <a href="">
                                    {{ trans('texts.Services') }}
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    {{ trans('texts.Car park') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-2-links-2">
                        <ul>
                            <li>
                                <a href="">
                                    {{ trans('texts.Career') }}
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    {{ trans('texts.Contact') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 footer-1"></div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 footer-3">
                <h4 class="with-square with-border-bottom">
                    {{ trans('texts.Contact info') }}
                </h4>
                <div class="footer-3-phone footer-3-item">
                    <span class="footer-3-icon"><i class="fa fa-phone"></i></span>
                    {{ trans('texts.Phone') }}:
                    +421 000 000 000
                </div>
                <div class="footer-3-mail footer-3-item">
                    <span class="footer-3-icon"><i class="fa fa-envelope"></i></span>
                    {{ trans('texts.Email') }}:
                    example@damaro.sk
                </div>
                <div class="footer-3-adress footer-3-item">
                    <span class="footer-3-icon"><i class="fa fa-map-marker"></i></span>
                    {{ trans('texts.Address') }}:
                    Chotárna 1, 949 01 Nitra, {{ trans('texts.Slovakia') }}
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="bottom">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 bottom-1">
                &copy {{ \Carbon\Carbon::now()->year }} Damaro Slovakia |
                Všetky práva vyhradené. |
                Vytvorila spoločnosť
                <a href="https://www.demi.sk/" class="color-primary">
                    <b>DeMi Studio</b>
                </a>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bottom-2">
                <a href="#">
                    <div class="my-btn my-btn-grey">
                        <div class="my-btn-bg-top"></div>
                        <div class="my-btn-bg-bottom"></div>
                        <div class="my-btn-text">
                            <i class="fa fa-facebook"></i>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="my-btn my-btn-grey">
                        <div class="my-btn-bg-top"></div>
                        <div class="my-btn-bg-bottom"></div>
                        <div class="my-btn-text">
                            <i class="fa fa-google-plus"></i>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="my-btn my-btn-grey">
                        <div class="my-btn-bg-top"></div>
                        <div class="my-btn-bg-bottom"></div>
                        <div class="my-btn-text">
                            <i class="fa fa-instagram"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>