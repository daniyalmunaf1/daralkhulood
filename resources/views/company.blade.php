<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Company</title>
    <meta content="Chernkh Mikhail" name="author">
    <meta content="DAR AL KHULOOD UNITED LLC - Top-Of-The-Line Equipment Rentals" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=no">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <link rel="shortcut icon" href="asset/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="asset/css/libs.min.css">
    <link rel="stylesheet" href="asset/css/main.css">
    <link rel="stylesheet" type="text/css" href="asset/fonts/icomoon/style.css">
</head>

<body class="page-about">

    <!-- Loader-->
    <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
    <!-- Loader end-->



    <div class="page-wrapper">
    @include('header')

        <main class="page-main">
            <div class="page-head">
                <div class="page-head__bg" style="background-image: url(asset/img/bg_page-about.jpg)">
                    <div class="page-head__title">About Company</div>
                    <div class="page-head__breadcrumb">
                        <ul class="uk-breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li><span>About Company</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <section class="s-features">
                <div class="uk-section uk-container">
                    <div class="uk-grid uk-child-width-1-2@m uk-flex-middle" data-uk-grid>
                        <div>
                            <div class="section-title"><small class="color-accent">[30 Years Of Equipment Rental Expertise]</small>
                                <h3>Provide Rent Solutions to <br> Utilize Industry Assistance</h3>
                            </div>
                        </div>
                        <div>
                            <div class="section-content"><span>Kiusmod tempor sed incididunts aliqua labore sed dolorexer citation ullamco mag aliqua enimad mini veniam quis nostrud exercitation ullamco labores nisi ut aliquip incididunts ea reprehen deritin voluptate.</span></div>
                        </div>
                    </div>
                    <div class="feature-items">
                        <div data-uk-slider>
                            <div class="uk-position-relative" tabindex="-1">
                                <ul class="uk-grid uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@l">
                                    <li>
                                        <div class="feature-item">
                                            <div class="feature-item__box">
                                                <div class="feature-item__icon"><span class="icon-crane-truck4"></span></div>
                                                <div class="feature-item__title">Comprehensive<br> Rental Fleet</div>
                                                <div class="feature-item__text">Excepteur sint occaecat cupidaty in culpa qu officia deserunt mollits Sed ut perspiciatis unde.</div>
                                                <div class="feature-item__more"><a href="07_equipment-detail.html"><span data-uk-icon="arrow-right"></span></a></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="feature-item">
                                            <div class="feature-item__box">
                                                <div class="feature-item__icon"><span class="icon-forklift4"></span></div>
                                                <div class="feature-item__title">Prepared to Serve<br> Your Needs</div>
                                                <div class="feature-item__text">Excepteur sint occaecat cupidaty in culpa qu officia deserunt mollits Sed ut perspiciatis unde.</div>
                                                <div class="feature-item__more"><a href="07_equipment-detail.html"><span data-uk-icon="arrow-right"></span></a></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="feature-item">
                                            <div class="feature-item__box">
                                                <div class="feature-item__icon"><span class="icon-crane6"></span></div>
                                                <div class="feature-item__title">Equipment Perform<br> at Top Levels</div>
                                                <div class="feature-item__text">Excepteur sint occaecat cupidaty in culpa qu officia deserunt mollits Sed ut perspiciatis unde.</div>
                                                <div class="feature-item__more"><a href="07_equipment-detail.html"><span data-uk-icon="arrow-right"></span></a></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
                        </div>
                    </div>
                </div>
            </section>
            <section class="s-video">
                <div class="s-video__inner">
                    <div class="s-video__desc">
                        <div class="section-title"><span>[30 Years Of Equipment Rental Expertise]</span>
                            <h3>Provide Solutions to Utilize Industry and Assistance for Better Working</h3>
                        </div>
                        <div class="section-content"><a class="more" href="11_about-us.html"><span>see how it works</span><span data-uk-icon="arrow-right"></span></a></div>
                    </div>
                    <div class="s-video__img" data-uk-lightbox="video-autoplay: true">
                        <div class="uk-cover-container"><img src="asset/img/img-video.jpg" alt="img-video" data-uk-cover><canvas width="960" height="400"></canvas></div><a class="s-video__link" href="{{$user->videolink}}" data-attrs="width: 1280; height: 720;" data-caption="YouTube"><img src="asset/img/ico-play.png" alt="image"></a>
                    </div>
                </div>
            </section>
            <section class="s-team">
                <div class="uk-section uk-container">
                    <div class="section-title --center"><span>[Rent The Top Performing Equipments]</span>
                        <h3>Meet Our Team Members</h3>
                    </div>
                    <div class="section-content">
                        <div class="js-team-slider">
                            <div class="swiper">
                            <div class="swiper-wrapper">
                                        @foreach($employees as $employee)
                                        <div class="swiper-slide">
                                            <div class="team-user">
                                                <div class="team-user__photo"><img src="{{asset('/storage/'.$employee->image)}}" alt="team"></div>
                                                <div class="team-user__body">
                                                    <div class="team-user__name">{{$employee->name}}</div>
                                                    <div class="team-user__position">{{$employee->designation}}</div>
                                                    <div class="team-user__social">
                                                        <ul class="social">
                                                            <li class="social__item"><a class="social__link" href="{{$employee->twitter}}" target="_blank"><span data-uk-icon="twitter"></span></a></li>
                                                            <li class="social__item"><a class="social__link" href="{{$employee->facebook}}" target="_blank"><span data-uk-icon="facebook"></span></a></li>
                                                            <li class="social__item"><a class="social__link" href="{{$employee->linkedin}}" target="_blank"><span data-uk-icon="linkedin"></span></a></li>
                                                            <li class="social__item"><a class="social__link" href="{{$employee->instagram" target="_blank"><span data-uk-icon="instagram"></span></a></li>
                                                            <li class="social__item"><a class="social__link" href="{{$employee->youtube" target="_blank"><span data-uk-icon="youtube"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="s-stats s-stats-w">
                <div class="uk-container uk-container-xlarge">
                    <div class="uk-grid uk-grid-small uk-child-width-1-4@l uk-child-width-1-2@s" data-uk-grid>
                        <div>
                            <div class="stat-item">
                                <div class="stat-item__box">
                                    <h6 class="stat-item__title">Rental Orders</h6><span class="stat-item__value">3.4k</span>
                                    <p class="stat-item__text">Pioneer of the equipment rental industry.</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="stat-item">
                                <div class="stat-item__box">
                                    <h6 class="stat-item__title">Experienced Team</h6><span class="stat-item__value">125+</span>
                                    <p class="stat-item__text">Pioneer of the equipment rental industry.</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="stat-item">
                                <div class="stat-item__box">
                                    <h6 class="stat-item__title">Customer Reviews</h6><span class="stat-item__value">3.6k+</span>
                                    <p class="stat-item__text">Pioneer of the equipment rental industry.</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="stat-item">
                                <div class="stat-item__box">
                                    <h6 class="stat-item__title">Verified Locations</h6><span class="stat-item__value">150+</span>
                                    <p class="stat-item__text">Pioneer of the equipment rental industry.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        @include('footer')
        <div id="offcanvas" data-uk-offcanvas="mode: reveal; overlay: true">
            <div class="uk-offcanvas-bar uk-flex uk-flex-column uk-flex-between"><button class="uk-offcanvas-close" type="button" data-uk-close></button>
                <div class="uk-margin-bottom"><a class="logo uk-margin-bottom" href="/"><img src="asset/img/logo-white.png" alt="image"></a>
                    @include('mb_menu')
                </div>
                <div class="uk-margin"><a class="contacts-block" href="tel:+96895219590"><span>Need Help? Call Us</span><strong>(+968) 9521-9590</strong></a></div>
            </div>
        </div>
    </div>
    <script src="asset/js/libs.js"></script>
    <script src="asset/js/main.js"></script>
</body>

</html>
