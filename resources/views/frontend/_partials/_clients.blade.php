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