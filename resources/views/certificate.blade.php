<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Our Achievements</title>
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
                    <div class="page-head__title" style="font-size:35px;">Our Achievements</div>
                    <div class="page-head__breadcrumb">
                        <ul class="uk-breadcrumb">
                            <li><span>Achievements</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="page-content">


                <div class="uk-background-muted">
                    <div class="uk-section uk-container uk-container-expand">

                        <div class="section-content">
                            <div class="uk-grid uk-child-width-1-2@s  uk-child-width-1-2@m uk-child-width-1-4@l uk-child-width-1-2@xl" data-uk-grid>
                            @foreach($certificates as $certificate)
                                
                            <div>
                                    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@xl uk-margin" data-uk-grid>
                                        <div class="uk-card-media-left uk-cover-container"><img src="{{asset('/storage/'.$certificate->image)}}" alt="cat-item" data-uk-cover><canvas width="350" height="300"></canvas></div>
                                        <div style="margin-top: -30px;">
                                            <div style="height: 10px;" class="uk-card-body">
                                                <p style="font-size: 18px;" class="uk-card-title">{{$certificate->name}}</p>
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
