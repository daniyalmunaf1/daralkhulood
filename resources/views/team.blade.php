<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Team</title>
    <meta content="Chernkh Mikhail" name="author">
    <meta content="DAR AL KHULOOD UNITED LLC - Top-Of-The-Line Equipment Rentals" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=no">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <link rel="shortcut icon" href="asset/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="asset/css/libs.min.css">
    <link rel="stylesheet" href="asset/css/main.css">
</head>

<body class="page-blog-grid">

    <!-- Loader-->
    <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
    <!-- Loader end-->

    <div class="page-wrapper">
    @include('header')
        
        <main class="page-main">
            <div class="page-head">
                <div class="page-head__bg" style="background-image: url(asset/img/bg_page-blog-grid.jpg)">
                    <div class="page-head__title" style="font-size:35px;">Meet Our Team Members</div>
                    <div class="page-head__breadcrumb">
                        <ul class="uk-breadcrumb">
                            <li><span>Team</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="page-content">
                <section class="s-team">
                    <div class="uk-section uk-container">
                        <div class="section-title --center">
                            <!-- <span>[Rent The Top Performing Equipments]</span> -->
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
            </div>
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
