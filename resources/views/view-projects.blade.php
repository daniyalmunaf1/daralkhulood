<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Projects</title>
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

<body class="page-categories">

    <!-- Loader-->
    <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
    <!-- Loader end-->


    <div class="page-wrapper">
    @include('header')

        <main class="page-main">
            <div class="page-head">
                <div class="page-head__bg" style="background-image: url(asset/img/bg_page-categories-2.jpg)">
                    <div class="page-head__title">Projects</div>
                    <div class="page-head__breadcrumb">
                        <ul class="uk-breadcrumb">
                            <li><span>Our Projects</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="page-content">


                <div class="uk-background-muted">
                    <div class="uk-section uk-container uk-container-expand">

                        <div class="section-content">
                            <div class="uk-grid uk-child-width-1-2@s  uk-child-width-1-2@m uk-child-width-1-4@l uk-child-width-1-2@xl" data-uk-grid>
                                @foreach($projects as $project)
                                    
                                <div>
                                    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@xl uk-margin" data-uk-grid>
                                        <div class="s-hero__slider">
                                            <div class="js-hero-slider">
                                                <div class="swiper">
                                                    <div class="swiper-wrapper">
                                                        @if($project->image1)
                                                        <a href=""> <div class="swiper-slide"></a><img style="height: 278px;width: 418px;" src="{{asset('/storage/'.$project->image1)}}" alt="hero-slider"></div></a>
                                                        @endif
                                                        @if($project->image2)
                                                        <a href=""> <div class="swiper-slide"></a><img style="height: 278px;width: 418px;" src="{{asset('/storage/'.$project->image2)}}" alt="hero-slider"></div></a>
                                                        @endif
                                                        @if($project->image3)
                                                        <a href=""> <div class="swiper-slide"></a><img style="height: 278px;width: 418px;" src="{{asset('/storage/'.$project->image3)}}" alt="hero-slider"></div></a>
                                                        @endif
                                                        @if($project->image4)
                                                        <a href=""> <div class="swiper-slide"></a><img style="height: 278px;width: 418px;" src="{{asset('/storage/'.$project->image4)}}" alt="hero-slider"></div></a>
                                                        @endif
                                                        @if($project->image5)
                                                        <a href=""> <div class="swiper-slide"></a><img style="height: 278px;width: 418px;" src="{{asset('/storage/'.$project->image5)}}" alt="hero-slider"></div></a>
                                                        @endif
                                                    </div>
                                                    <div class="swiper-pagination"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="uk-card-body">
                                                <h3 class="uk-card-title">{{$project->title}}</h3>
                                                <p>{{$project->description}}</p>
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
