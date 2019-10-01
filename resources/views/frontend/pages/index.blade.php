@extends('layout.frontend')

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

                <img class="sp-image" src="assets/slider-pro/css/images/blank.gif"
                     data-src="media/main-slider/1.jpg"
                     data-retina="media/main-slider/1.jpg" alt="" />
                <div class="container">
                    <div class="main-slider-content">
                        <h2 class="sp-layer"
                            data-position="centerCenter" data-vertical="-55"
                            data-show-transition="left" data-hide-transition="left" data-show-delay="200" data-hide-delay="200">
                            We are your reliable partner
                        </h2>

                        <h2 class="sp-layer color-primary"
                            data-position="centerCenter" data-vertical="10"
                            data-show-transition="left" data-hide-transition="left" data-show-delay="400" data-hide-delay="400">
                            Quality services of cargo
                        </h2>

                        <a class="sp-layer main-button-2" href="#"
                           data-position="centerCenter" data-vertical="280"
                           data-show-transition="left" data-hide-transition="left" data-show-delay="600" data-hide-delay="600">
                            <div class="my-btn my-btn-primary">
                                <div class="my-btn-bg-top"></div>
                                <div class="my-btn-bg-bottom"></div>
                                <div class="my-btn-text">
                                    GET A FREE QUOTE
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            </div>

            <!-- === SLIDER ITEM === -->

            <div class="sp-slide">

                <!-- === slide overlay === -->
                <div class="main-slider-overlay"></div>

                <!-- === slide image === -->
                <img class="sp-image" src="assets/slider-pro/css/images/blank.gif"
                     data-src="media/main-slider/2.jpg"
                     data-retina="media/main-slider/2.jpg" alt="" />

                <!-- === slide container === -->
                <div class="container">
                    <div class="main-slider-content">
                        <h2 class="sp-layer"
                            data-position="centerCenter" data-vertical="-55"
                            data-show-transition="down" data-hide-transition="down" data-show-delay="600" data-hide-delay="600">
                            We are your reliable partner
                        </h2>

                        <h2 class="sp-layer color-primary"
                            data-position="centerCenter" data-vertical="10"
                            data-show-transition="down" data-hide-transition="down" data-show-delay="400" data-hide-delay="400">
                            Quality services of cargo
                        </h2>

                        <a class="sp-layer main-button-2" href="#"
                           data-position="centerCenter" data-vertical="280"
                           data-show-transition="down" data-hide-transition="down" data-show-delay="200" data-hide-delay="200">
                            <div class="my-btn my-btn-primary">
                                <div class="my-btn-bg-top"></div>
                                <div class="my-btn-bg-bottom"></div>
                                <div class="my-btn-text">
                                    GET A FREE QUOTE
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            </div>

            <!-- === SLIDER ITEM === -->

            <div class="sp-slide">

                <!-- === slide overlay === -->
                <div class="main-slider-overlay"></div>

                <!-- === slide image === -->
                <img class="sp-image" src="assets/slider-pro/css/images/blank.gif"
                     data-src="media/main-slider/3.jpg"
                     data-retina="media/main-slider/3.jpg" alt="" />

                <!-- === slide container === -->
                <div class="container">
                    <div class="main-slider-content">
                        <h2 class="sp-layer"
                            data-position="centerCenter" data-vertical="-55"
                            data-show-transition="up" data-hide-transition="up" data-show-delay="200" data-hide-delay="200">
                            We are your reliable partner
                        </h2>

                        <h2 class="sp-layer color-primary"
                            data-position="centerCenter" data-vertical="10"
                            data-show-transition="up" data-hide-transition="up" data-show-delay="400" data-hide-delay="400">
                            Quality services of cargo
                        </h2>

                        <a class="sp-layer main-button-2" href="#"
                           data-position="centerCenter" data-vertical="280"
                           data-show-transition="up" data-hide-transition="up" data-show-delay="600" data-hide-delay="600">
                            <div class="my-btn my-btn-primary">
                                <div class="my-btn-bg-top"></div>
                                <div class="my-btn-bg-bottom"></div>
                                <div class="my-btn-text">
                                    GET A FREE QUOTE
                                </div>
                            </div>
                        </a>

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

                <!-- === ABOUT US === -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 home-about">

                    <!-- === TITLE GROUP === -->
                    <div class="title-group">
                        <h2>ABOUT US</h2>
                        <div class="subtitle with-square">ALIQUAM MALESUADA</div>
                    </div>

                    <!-- === ABOUT US TEXT === -->
                    <p>
                        Praesent vestibulum dapibus nibh. Etiam iaculis nunc ac metus. Ut nisl quis enim dignissim sagittis.
                        Etiam sollicitudin, ipsum eu pulvinar rutrum, tellus ipsum laoreet sapien, quis venenatis ante odio sit amet eros.
                        Proin magna. Duis vel nibh at velit scelerisque suscipit.
                    </p>

                    <div class="home-about-video">
                        <!-- === PLAY VIDEO BUTTON === -->
                        <div class="play-video" id="play-video">
                            <div class="my-btn my-btn-primary">
                                <div class="my-btn-bg-top"></div>
                                <div class="my-btn-bg-bottom"></div>
                                <div class="my-btn-text">
                                    <i class="fa fa-play"></i>
                                </div>
                            </div>
                        </div>
                        <!-- === STOP VIDEO BUTTON === -->
                        <div class="stop-video" id="stop-video">
                            <div class="my-btn my-btn-primary">
                                <div class="my-btn-bg-top"></div>
                                <div class="my-btn-bg-bottom"></div>
                                <div class="my-btn-text">
                                    <i class="fa fa-pause"></i>
                                </div>
                            </div>
                        </div>

                        <!-- === VIDEO === -->
                        <video id="aboutvideo" loop="loop" preload="auto">
                            <source src="media/video/trucks.mp4" />
                            <source src="media/video/trucks.webm" type="video/webm" />
                        </video>

                        <!-- === READ MORE BUTTON === -->
                        <a href="06_about.html"><div class="home-about-button">
                                <div class="my-btn my-btn-primary">
                                    <div class="my-btn-bg-top"></div>
                                    <div class="my-btn-bg-bottom"></div>
                                    <div class="my-btn-text">
                                        READ
                                    </div>
                                </div>
                            </div></a>

                    </div>
                </div>

                <!-- === GET QUOTE === -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 get-quote">

                    <!-- === TITLE GROUP === -->
                    <div class="title-group">
                        <h2>REQUEST A QUOTE</h2>
                        <div class="subtitle with-square">Curabitur laoreet convallis</div>
                    </div>

                    <!-- === GET QUOTE TEXT === -->
                    <p>
                        Praesent vestibulum dapibus nibh. Etiam iaculis nunc ac metus. Ut nisl quis enim dignissim sagittis.
                        Etiam sollicitudin, ipsum eu pulvinar rutrum, tellus ipsum laoreet sapien, quis venenatis ante odio sit amet eros.
                        Proin magna. Duis vel nibh at velit scelerisque suscipit.
                    </p>

                    <!-- === GET QUOTE FORM=== -->
                    <div class="get-quote-form">
                        <div class="send-result"></div>
                        <form name="gq-form" id="gq-form" method="POST" action="javascript:void(null);" onsubmit="sendmail_1();">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 get-quote-form-left">
                                <!-- === GET QUOTE FORM ITEM === -->
                                <div class="form-item">
                                    <input type="text" name="gq-location" id="gq-location" placeholder="LOCATION" />
                                </div>
                                <!-- === GET QUOTE FORM ITEM === -->
                                <div class="form-item">
                                    <input type="text" name="gq-person" id="gq-person" placeholder="PERSON/CARGO" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 get-quote-form-right">
                                <!-- === GET QUOTE FORM ITEM === -->
                                <div class="form-item">
                                    <input type="text" name="gq-destination" id="gq-destination" placeholder="TO DESTINATION" />
                                </div>
                                <!-- === GET QUOTE FORM ITEM === -->
                                <div class="form-item">
                                    <input type="text" name="gq-contact" id="gq-contact" placeholder="E-MAIL OR NUMBER" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 get-quote-form-bottom">
                                <!-- === GET QUOTE FORM ITEM === -->
                                <div class="form-item">
                                    <textarea name="gq-text" id="gq-text" placeholder="MESSAGE"></textarea>
                                </div>
                                <!-- === GET QUOTE FORM BUTTON === -->
                                <div class="get-quote-form-button">
                                    <button id="gq-submit"><span class="my-btn my-btn-grey">
											<span class="my-btn-bg-top"></span>
											<span class="my-btn-bg-bottom"></span>
											<span class="my-btn-text">
												GET A QUOTE
											</span>
										</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ===================================
       END SECTION ABOUT US AND GET QUOTE
   ======================================== -->

    <!-- ===================================
       SECTION REVIEWS AND FAQ
   ======================================== -->
    <section class="def-section">
        <div class="container">
            <div class="row">

                <!-- === REVIEWS === -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="home-review">

                        <!-- === TITLE GROUP === -->
                        <div class="title-group">
                            <h2>TESTIMONIALS</h2>
                            <div class="subtitle with-square">INTEGER CONGUE ELIT NON</div>
                        </div>

                        <!-- === OWL CAROUSEL === -->
                        <div class="home-review-carousel owl-carousel owl-theme" id="owl-review">

                            <!-- === OWL CAROUSEL ITEM === -->
                            <div class="home-review-carousel-item">
                                <div class="home-review-carousel-text">
                                    <div class="home-review-carousel-quote"><div><i class="fa fa-quote-left"></i></div></div>
                                    <p>Praesent vestibulum dapibus nibh. Etiam iaculis nunc ac metus. Ut id nisl quis enim dignissim sagittis.
                                        Etiam sollicitudin, ipsum eu pulvinar rutrum, tellus ipsum laoreet sapien, quis venenatis ante odio sit
                                        amet eros.</p>
                                </div>

                                <!-- === OWL CAROUSEL ITEM AUTHOR=== -->
                                <div class="home-review-carousel-people">
                                    <div class="home-review-carousel-avatar">
                                        <img src="media/avatars/avatar1.png" alt="" />
                                    </div>
                                    <div class="home-review-carousel-name">
                                        RICHARD GEAR
                                    </div>
                                    <div class="home-review-carousel-company">
                                        Happy client
                                    </div>
                                </div>
                            </div>

                            <!-- === OWL CAROUSEL ITEM === -->
                            <div class="home-review-carousel-item">
                                <div class="home-review-carousel-text">
                                    <div class="home-review-carousel-quote"><div><i class="fa fa-quote-left"></i></div></div>
                                    <p>Praesent vestibulum dapibus nibh. Etiam iaculis nunc ac metus. Ut id nisl quis enim dignissim sagittis.
                                        Etiam sollicitudin, ipsum eu pulvinar rutrum, tellus ipsum laoreet sapien, quis venenatis ante odio sit
                                        amet eros.</p>
                                </div>

                                <!-- === OWL CAROUSEL ITEM AUTHOR=== -->
                                <div class="home-review-carousel-people">
                                    <div class="home-review-carousel-avatar">
                                        <img src="media/avatars/avatar1.png" alt="" />
                                    </div>
                                    <div class="home-review-carousel-name">
                                        RICHARD GEAR
                                    </div>
                                    <div class="home-review-carousel-company">
                                        Happy client
                                    </div>
                                </div>
                            </div>

                            <!-- === OWL CAROUSEL ITEM === -->
                            <div class="home-review-carousel-item">
                                <div class="home-review-carousel-text">
                                    <div class="home-review-carousel-quote"><div><i class="fa fa-quote-left"></i></div></div>
                                    <p>Praesent vestibulum dapibus nibh. Etiam iaculis nunc ac metus. Ut id nisl quis enim dignissim sagittis.
                                        Etiam sollicitudin, ipsum eu pulvinar rutrum, tellus ipsum laoreet sapien, quis venenatis ante odio sit
                                        amet eros.</p>
                                </div>

                                <!-- === OWL CAROUSEL ITEM AUTHOR=== -->
                                <div class="home-review-carousel-people">
                                    <div class="home-review-carousel-avatar">
                                        <img src="media/avatars/avatar1.png" alt="" />
                                    </div>
                                    <div class="home-review-carousel-name">
                                        RICHARD GEAR
                                    </div>
                                    <div class="home-review-carousel-company">
                                        Happy client
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- === FAQ === -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="home-faq">

                        <!-- === TITLE GROUP === -->
                        <div class="title-group">
                            <h2>WHY CHOSE US</h2>
                            <div class="subtitle with-square">PELENTESQUE INYD URNA</div>
                        </div>

                        <!-- === ACCORDION === -->
                        <div class="panel-group" id="accordion">

                            <!-- === ACCORDION ITEM === -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            Dui ac hendrerit elementum quam ipsum auctor lorem
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p>In dui magna, posuere eget, vestibulum et, tempor auctor, justo. In ac felis quis tortor malesuada pretium.
                                            Pellentesque auctor neque nec urna. Proin sapien ipsum, porta a, auctor quis, euismod ut, mi. Aenean viverra
                                            rhoncus pede.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- === ACCORDION ITEM === -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                            Mauris vel magna a est lobortis volutpat
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>In dui magna, posuere eget, vestibulum et, tempor auctor, justo. In ac felis quis tortor malesuada pretium.
                                            Pellentesque auctor neque nec urna. Proin sapien ipsum, porta a, auctor quis, euismod ut, mi. Aenean viverra
                                            rhoncus pede.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- === ACCORDION ITEM === -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                            Sed bibendum ornare lorem mauris feugiat suspendisse neque
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>In dui magna, posuere eget, vestibulum et, tempor auctor, justo. In ac felis quis tortor malesuada pretium.
                                            Pellentesque auctor neque nec urna. Proin sapien ipsum, porta a, auctor quis, euismod ut, mi. Aenean viverra
                                            rhoncus pede.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ===================================
       END SECTION REVIEWS AND FAQ
   ======================================== -->


    <!-- ===================================
        SECTION STATS
    ======================================== -->
    <div class="def-section stats" id="home-stats" data-stellar-background-ratio="0.4">
        <div class="stats-overlay"></div>
        <div class="container">
            <div class="row">

                <!-- === STATS ITEM === -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="stat-item">
                        <div class="stat-item-icon">
                            <i class="flaticon-first33"></i>
                        </div>
                        <div class="stat-item-number" id="num1">
                            450
                        </div>
                        <div class="stat-item-text">
                            PROJECTS<br>DONE
                        </div>
                    </div>
                </div>

                <!-- === STATS ITEM === -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="stat-item stat-item-mark">
                        <div class="stat-item-icon">
                            <i class="flaticon-shirt16"></i>
                        </div>
                        <div class="stat-item-number" id="num2">
                            150
                        </div>
                        <div class="stat-item-text">
                            CLIENTS<br>HAPPY
                        </div>
                    </div>
                </div>

                <!-- === STATS ITEM === -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="stat-item">
                        <div class="stat-item-icon">
                            <i class="flaticon-group2"></i>
                        </div>
                        <div class="stat-item-number" id="num3">
                            120
                        </div>
                        <div class="stat-item-text">
                            WORKERS<br>TEAM
                        </div>
                    </div>
                </div>

                <!-- === STATS ITEM === -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="stat-item">
                        <div class="stat-item-icon">
                            <i class="flaticon-clock96"></i>
                        </div>
                        <div class="stat-item-number" id="num4">
                            14
                        </div>
                        <div class="stat-item-text">
                            YEARS IN<br>MARKET
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ===================================
        END SECTION STATS
    ======================================== -->


    <!-- ===================================
        BLOG SECTION
    ======================================== -->
    <section class="def-section home-blog">
        <div class="container">
            <div class="row">

                <!-- === TITLE GROUP === -->
                <div class="title-group">
                    <h2>BLOG COMPANY</h2>
                    <div class="subtitle with-square">INTEGER CONGUE ELIT</div>
                </div>

                <!-- === BLOG ITEM === -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="home-blog-item home-blog-item-mark">
                        <div class="home-blog-item-date">
                            <div class="home-blog-item-date-number">26</div>MAY
                        </div>
                        <div class="home-blog-item-image">
                            <img src="media/blog/1.jpg" alt="" />
                        </div>
                        <div class="home-blog-item-desc">
                            <div class="home-blog-item-desc-title">
                                <a href="12_blog_detail.html">Curabitur lorem uism quis</a>
                            </div>
                            <div class="home-blog-item-desc-info">
                                <a href="#">Admin</a>
                                <span class="comments-icon"><i class="fa fa-comments"></i></span>
                                <a href="12_blog_detail.html#comments">15</a>
                            </div>
                            <div class="home-blog-item-desc-text">
                                <p>Pellentesque habitant morbi tristique sene ctus eft netus eft malesuada fames turpis egestas.
                                    Aenean non donec ...</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- === BLOG ITEM === -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="home-blog-item">
                        <div class="home-blog-item-date">
                            <div class="home-blog-item-date-number">22</div>MAY
                        </div>
                        <div class="home-blog-item-image">
                            <img src="media/blog/2.jpg" alt="" />
                        </div>
                        <div class="home-blog-item-desc">
                            <div class="home-blog-item-desc-title">
                                <a href="12_blog_detail.html">Curabitur lorem uism quis</a>
                            </div>
                            <div class="home-blog-item-desc-info">
                                <a href="#">Admin</a>
                                <span class="comments-icon"><i class="fa fa-comments"></i></span>
                                <a href="12_blog_detail.html#comments">15</a>
                            </div>
                            <div class="home-blog-item-desc-text">
                                <p>Pellentesque habitant morbi tristique sene ctus eft netus eft malesuada fames turpis egestas.
                                    Aenean non donec ...</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- === BLOG ITEM === -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="home-blog-item">
                        <div class="home-blog-item-date">
                            <div class="home-blog-item-date-number">20</div>MAY
                        </div>
                        <div class="home-blog-item-image">
                            <img src="media/blog/3.jpg" alt="" />
                        </div>
                        <div class="home-blog-item-desc">
                            <div class="home-blog-item-desc-title">
                                <a href="12_blog_detail.html">Curabitur lorem uism quis</a>
                            </div>
                            <div class="home-blog-item-desc-info">
                                <a href="#">Admin</a>
                                <span class="comments-icon"><i class="fa fa-comments"></i></span>
                                <a href="12_blog_detail.html#comments">15</a>
                            </div>
                            <div class="home-blog-item-desc-text">
                                <p>Pellentesque habitant morbi tristique sene ctus eft netus eft malesuada fames turpis egestas.
                                    Aenean non donec ...</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- === BLOG ITEM === -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="home-blog-item">
                        <div class="home-blog-item-date">
                            <div class="home-blog-item-date-number">15</div>MAY
                        </div>
                        <div class="home-blog-item-image">
                            <img src="media/blog/4.jpg" alt="" />
                        </div>
                        <div class="home-blog-item-desc">
                            <div class="home-blog-item-desc-title">
                                <a href="12_blog_detail.html">Curabitur lorem uism quis</a>
                            </div>
                            <div class="home-blog-item-desc-info">
                                <a href="#">Admin</a>
                                <span class="comments-icon"><i class="fa fa-comments"></i></span>
                                <a href="12_blog_detail.html#comments">15</a>
                            </div>
                            <div class="home-blog-item-desc-text">
                                <p>Pellentesque habitant morbi tristique sene ctus eft netus eft malesuada fames turpis egestas.
                                    Aenean non donec ...</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- === BLOG READ MORE BUTTON === -->
                <div class="row home-blog-more">
                    <a href="11_blog.html"><div class="my-btn my-btn-primary">
                            <div class="my-btn-bg-top"></div>
                            <div class="my-btn-bg-bottom"></div>
                            <div class="my-btn-text">
                                MORE
                            </div>
                        </div></a>
                </div>

            </div>
        </div>
    </section>
    <!-- ===================================
		END BLOG SECTION
	======================================== -->

    <!-- ===================================
        CLIENTS SECTION
    ======================================== -->
    <section class="def-section" id="clients-section">
        <div class="home-big-image" data-stellar-background-ratio="0.4"></div>
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="home-clients">

                        <!-- === TITLE GROUP === -->
                        <div class="title-group">
                            <h2>CLIENTS</h2>
                            <div class="subtitle with-square">ALIQUAM MALESUADA</div>
                        </div>
                        <p>
                            Praesent vestibulum dapibus nibh. Etiam iaculis nunc ac metus. Ut nisl quis enim dignissim sagittis.
                            Etiam sollicitudin, ipsum eu pulvinar rutrum, tellus ipsum laoreet sapien, quis venenatis ante odio.
                        </p>

                        <!-- === OWL CAROUSEL === -->
                        <div class="home-clients-carousel owl-carousel owl-theme" id="owl-clients">

                            <!-- === OWL CAROUSEL ITEM === -->
                            <div class="home-clients-carousel-block">

                                <!-- === client item === -->
                                <div class="home-clients-carousel-item">
                                    <a href="#"><img src="media/clients/client1.png" alt="" /></a>
                                </div>
                                <!-- === client item === -->
                                <div class="home-clients-carousel-item ">
                                    <a href="#"><img src="media/clients/client2.png" alt="" /></a>
                                </div>
                                <!-- === client item === -->
                                <div class="home-clients-carousel-item">
                                    <a href="#"><img src="media/clients/client3.png" alt="" /></a>
                                </div>
                                <!-- === client item === -->
                                <div class="home-clients-carousel-item">
                                    <a href="#"><img src="media/clients/client4.png" alt="" /></a>
                                </div>
                                <!-- === client item === -->
                                <div class="home-clients-carousel-item">
                                    <a href="#"><img src="media/clients/client5.png" alt="" /></a>
                                </div>
                                <!-- === client item === -->
                                <div class="home-clients-carousel-item">
                                    <a href="#"><img src="media/clients/client6.png" alt="" /></a>
                                </div>
                                <div class="home-clients-carousel-hline"></div>
                                <div class="home-clients-carousel-vline1"></div>
                                <div class="home-clients-carousel-vline2"></div>
                            </div>

                            <!-- === OWL CAROUSEL ITEM === -->
                            <div class="home-clients-carousel-block">

                                <!-- === client item === -->
                                <div class="home-clients-carousel-item">
                                    <a href="#"><img src="media/clients/client1.png" alt="" /></a>
                                </div>
                                <!-- === client item === -->
                                <div class="home-clients-carousel-item ">
                                    <a href="#"><img src="media/clients/client2.png" alt="" /></a>
                                </div>
                                <!-- === client item === -->
                                <div class="home-clients-carousel-item">
                                    <a href="#"><img src="media/clients/client3.png" alt="" /></a>
                                </div>
                                <!-- === client item === -->
                                <div class="home-clients-carousel-item">
                                    <a href="#"><img src="media/clients/client4.png" alt="" /></a>
                                </div>
                                <!-- === client item === -->
                                <div class="home-clients-carousel-item">
                                    <a href="#"><img src="media/clients/client5.png" alt="" /></a>
                                </div>
                                <!-- === client item === -->
                                <div class="home-clients-carousel-item">
                                    <a href="#"><img src="media/clients/client6.png" alt="" /></a>
                                </div>
                                <div class="home-clients-carousel-hline"></div>
                                <div class="home-clients-carousel-vline1"></div>
                                <div class="home-clients-carousel-vline2"></div>
                            </div>

                            <!-- === OWL CAROUSEL ITEM === -->
                            <div class="home-clients-carousel-block">

                                <!-- === client item === -->
                                <div class="home-clients-carousel-item">
                                    <a href="#"><img src="media/clients/client1.png" alt="" /></a>
                                </div>
                                <!-- === client item === -->
                                <div class="home-clients-carousel-item ">
                                    <a href="#"><img src="media/clients/client2.png" alt="" /></a>
                                </div>
                                <!-- === client item === -->
                                <div class="home-clients-carousel-item">
                                    <a href="#"><img src="media/clients/client3.png" alt="" /></a>
                                </div>
                                <!-- === client item === -->
                                <div class="home-clients-carousel-item">
                                    <a href="#"><img src="media/clients/client4.png" alt="" /></a>
                                </div>
                                <!-- === client item === -->
                                <div class="home-clients-carousel-item">
                                    <a href="#"><img src="media/clients/client5.png" alt="" /></a>
                                </div>
                                <!-- === client item === -->
                                <div class="home-clients-carousel-item">
                                    <a href="#"><img src="media/clients/client6.png" alt="" /></a>
                                </div>
                                <div class="home-clients-carousel-hline"></div>
                                <div class="home-clients-carousel-vline1"></div>
                                <div class="home-clients-carousel-vline2"></div>
                            </div>
                        </div>

                        <!-- === OWL CAROUSEL BUTTONS === -->
                        <div class="home-clients-buttons">
                            <a id="prev-clients" href="#"><div class="my-btn my-btn-primary">
                                    <div class="my-btn-bg-top"></div>
                                    <div class="my-btn-bg-bottom"></div>
                                    <div class="my-btn-text">
                                        <i class="fa fa-angle-left"></i>
                                    </div>
                                </div></a>
                            <a id="next-clients" href="#"><div class="my-btn my-btn-grey">
                                    <div class="my-btn-bg-top"></div>
                                    <div class="my-btn-bg-bottom"></div>
                                    <div class="my-btn-text">
                                        <i class="fa fa-angle-right"></i>
                                    </div>
                                </div></a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ===================================
        END CLIENTS SECTION
    ======================================== -->

    <!-- ===================================
        SUBSCRIBE SECTION
    ======================================== -->
    <div class="def-section home-subscribe">
        <div class="container">
            <div class="row">

                <!-- === SUBSCRIBE TEXT === -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 home-subscribe-text animated wow fadeInUp" data-wow-duration=".5s" data-wow-offset="100">
                    <span class="home-subscribe-icon"><i class="flaticon-email114"></i></span>
                    SIGN UP FOR NEWSLETTER TO GET UPDATES AND NEWS
                </div>

                <!-- === SUBSCRIBE FORM === -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 home-subscribe-form animated wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s" data-wow-offset="100">
                    <form>
                        <div class="home-subscribe-form-input">
                            <input type="text" name="subscribe" placeholder="YOUR E-MAIL" />
                        </div>
                        <div class="home-subscribe-form-button">
                            <button><span class="my-btn my-btn-primary">
								<span class="my-btn-bg-top"></span>
								<span class="my-btn-bg-bottom"></span>
								<span class="my-btn-text">
									SUBSCRIBE
								</span>
							</span></button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- ===================================
        END SUBSCRIBE SECTION
    ======================================== -->


    <!-- ===================================
        FOOTER
    ======================================== -->
    <footer class="def-section footer">
        <div class="container">
            <div class="row">

                <!-- === FOOTER COLUMN === -->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 footer-1">
                    <div class="logo with-border-bottom">
                        <div class="logo-image">
                            <img src="img/logo.png" alt="" />
                        </div>
                        <div class="logo-text">
                            Trans <span class="color-primary">Aero</span>
                        </div>
                    </div>
                    <div class="footer-1-text">
                        <p>Praesent vestibulum dapibus nibh. Etiam iaculis nunc ac metus. Ut id nisl quis enim dignissim sagittis.
                            Etiam sollicitudin, ipsum pulvinar rutrum,tellus ipsum. laoreet </p>
                    </div>
                    <div class="footer-1-button">
                        <a href="06_about.html"><div class="my-btn my-btn-primary">
                                <div class="my-btn-bg-top"></div>
                                <div class="my-btn-bg-bottom"></div>
                                <div class="my-btn-text">
                                    MORE
                                </div>
                            </div></a>
                    </div>
                </div>

                <!-- === FOOTER COLUMN === -->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 footer-2">
                    <h4 class="with-square with-border-bottom">LINKS</h4>
                    <div class="footer-2-links">
                        <div class="footer-2-links-1">
                            <ul>
                                <li><a href="">Home</a></li>
                                <li><a href="">Service</a></li>
                                <li><a href="">About us</a></li>
                                <li><a href="">Testimonial</a></li>
                                <li><a href="">Blog</a></li>
                                <li><a href="">Clients</a></li>
                            </ul>
                        </div>
                        <div class="footer-2-links-2">
                            <ul>
                                <li><a href="">Contact</a></li>
                                <li><a href="">Quote</a></li>
                                <li><a href="">Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- === FOOTER COLUMN === -->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 footer-3">
                    <h4 class="with-square with-border-bottom">ADRESS</h4>
                    <div class="footer-3-phone footer-3-item">
                        <span class="footer-3-icon"><i class="fa fa-phone"></i></span>
                        Telephone:  + 390 12 345 6789
                    </div>
                    <div class="footer-3-fax footer-3-item">
                        <span class="footer-3-icon"><i class="fa fa-fax"></i></span>
                        Fax/phone:  + 390 12 345 6789
                    </div>
                    <div class="footer-3-mail footer-3-item">
                        <span class="footer-3-icon"><i class="fa fa-envelope"></i></span>
                        E-mail:  sale@transaero.com
                    </div>
                    <div class="footer-3-adress footer-3-item">
                        <span class="footer-3-icon"><i class="fa fa-map-marker"></i></span>
                        Adress: Transaero ltd. inc.  USA Jones McLean Drive , Los Angeles, California VA 22108
                    </div>
                </div>

                <!-- === FOOTER COLUMN === -->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 footer-4">
                    <h4 class="with-square with-border-bottom">INSTAGRAM FEED</h4>
                    <div class="footer-4-widget">
                        <iframe src="http://widget.websta.me/in/tag:truck/?s=76&amp;w=3&amp;h=2&amp;b=0&amp;p=13"></iframe> <!-- websta - web.stagram.com -->
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- ===================================
        END FOOTER
    ======================================== -->


    <!-- ===================================
        BOTTOM SECTION
    ======================================== -->
    <div class="bottom">
        <div class="container">
            <div class="row">

                <!-- === BOTTOM LEFT === -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bottom-1">
                    COPYRIGHT 2015 | TRANS <span class="color-primary">AERO</span>
                </div>

                <!-- === BOTTOM CENTER === -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bottom-2">
                    <a href="#"><div class="my-btn my-btn-grey">
                            <div class="my-btn-bg-top"></div>
                            <div class="my-btn-bg-bottom"></div>
                            <div class="my-btn-text">
                                <i class="fa fa-twitter"></i>
                            </div>
                        </div></a>
                    <a href="#"><div class="my-btn my-btn-grey">
                            <div class="my-btn-bg-top"></div>
                            <div class="my-btn-bg-bottom"></div>
                            <div class="my-btn-text">
                                <i class="fa fa-facebook"></i>
                            </div>
                        </div></a>
                    <a href="#"><div class="my-btn my-btn-grey">
                            <div class="my-btn-bg-top"></div>
                            <div class="my-btn-bg-bottom"></div>
                            <div class="my-btn-text">
                                <i class="fa fa-google-plus"></i>
                            </div>
                        </div></a>
                    <a href="#"><div class="my-btn my-btn-grey">
                            <div class="my-btn-bg-top"></div>
                            <div class="my-btn-bg-bottom"></div>
                            <div class="my-btn-text">
                                <i class="fa fa-pinterest-p"></i>
                            </div>
                        </div></a>
                    <a href="#"><div class="my-btn my-btn-grey">
                            <div class="my-btn-bg-top"></div>
                            <div class="my-btn-bg-bottom"></div>
                            <div class="my-btn-text">
                                <i class="fa fa-instagram"></i>
                            </div>
                        </div></a>
                </div>

                <!-- === BOTTOM RIGHT === -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bottom-3">
                    <a href="#">TERM OF USE</a> |
                    MADE BY <a href="#">TRANS <span class="color-primary">AERO</span></a>
                </div>

            </div>
        </div>
    </div>
    <!-- ===================================
        END BOTTOM SECTION
    ======================================== -->


    <!-- =========================
       SLIDE MENU
    ============================== -->
    <aside id="slide-menu" class="slide-menu">

        <!-- === CLOSE MENU BUTON === -->
        <div class="close-menu" id="close-menu">
            <i class="fa fa-close"></i>
        </div>

        <!-- === SLIDE MENU === -->
        <ul id="left-menu" class="left-menu">

            <!-- === SLIDE MENU ITEM === -->
            <li>
                <a href="#">Home <i class="fa fa-plus arrow"></i></a>

                <!-- === slide menu child === -->
                <ul class="slide-menu-child">
                    <li><a href="index.html">Home 1</a></li>
                    <li><a href="02_home.html">Home 2</a></li>
                </ul>
            </li>

            <!-- === SLIDE MENU ITEM === -->
            <li>
                <a href="#">Service <i class="fa fa-plus arrow"></i></a>

                <!-- === slide menu child === -->
                <ul class="slide-menu-child">
                    <li><a href="03_services.html">Service 1</a></li>
                    <li><a href="04_services.html">Service 2</a></li>
                    <li><a href="05_service_detail.html">Service Details</a></li>
                </ul>
            </li>

            <!-- === SLIDE MENU ITEM === -->
            <li>
                <a href="06_about.html">About us</a>
            </li>

            <!-- === SLIDE MENU ITEM === -->
            <li>
                <a href="#">Elements <i class="fa fa-plus arrow"></i></a>

                <!-- === slide menu child === -->
                <ul class="slide-menu-child">
                    <li><a href="07_typography.html">Typography</a></li>
                    <li><a href="08_buttons.html">Buttons</a></li>
                    <li><a href="09_progress.html">Progress Bars</a></li>
                    <li><a href="10_alerts.html">Alerts</a></li>
                </ul>
            </li>

            <!-- === SLIDE MENU ITEM === -->
            <li>
                <a href="#">Blog <i class="fa fa-plus arrow"></i></a>

                <!-- === slide menu child === -->
                <ul class="slide-menu-child">
                    <li><a href="11_blog.html">Blog items</a></li>
                    <li><a href="12_blog_detail.html">Single Post</a></li>
                </ul>
            </li>

            <!-- === SLIDE MENU ITEM === -->
            <li>
                <a href="13_contacts.html">Contacts</a>
            </li>

        </ul>

    </aside>
    <!-- =========================
       END SLIDE MENU
    ============================== -->


    <!-- =========================
       BLACK OVERLAY
    ============================== -->
    <div class="black-overlay" id="black-overlay"></div>
@endsection