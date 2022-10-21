<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Equipments</title>
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
                    <div class="page-head__title">Equipments</div>
                    <div class="page-head__breadcrumb">
                        <ul class="uk-breadcrumb">
                            <li><span>Our Equipments</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="page-content">


                <div class="uk-background-muted">
                    <div class="uk-section uk-container uk-container-expand">

                        <div class="section-content">
                            <div class="uk-grid uk-child-width-1-2@s  uk-child-width-1-2@m uk-child-width-1-4@l uk-child-width-1-2@xl" data-uk-grid>
                            @foreach($equipments as $equipment)
                                
                            <div>
                                    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@xl uk-margin" data-uk-grid>
                                        <div class="uk-card-media-left uk-cover-container"><img src="{{asset('/storage/'.$equipment->image)}}" alt="cat-item" data-uk-cover><canvas width="350" height="300"></canvas></div>
                                        <div>
                                            <div class="uk-card-body">
                                                <div class="uk-card-icon"><span><img src="{{asset('/storage/'.$equipment->logo)}}" alt="ico-cat-item"></span></div>
                                                <h3 class="uk-card-title">{{$equipment->title}}</h3>
                                                <p>{{$equipment->description}}</p>
                                                <a class="more" href="07_equipment-detail.html"><span>Book Now</span><span data-uk-icon="arrow-right"></span></a>
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
                    <ul class="uk-nav uk-nav-default uk-nav-parent-icon" data-uk-nav>
                        <li class="uk-active"><a href="index.html"><span>Home</span></a></li>
                            <li><a href="11_about-us.html"><span class="with-navbar-dropdown-nav">About Us</span></a></li>
                            <li><a href="08_blog-grid.html">Group</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="team.html"><span>Our Team</span></a></li>
                            <li><a href="04_equipment-categories.html"><span>Our Equipments</span></a></li>
                            <li><a href="08_blog-grid.html"><span>Projects</span></a></li></li>
                            <li><a href="12_contact-us.html"><span>Contact</span></a></li>
                    </ul>
                </div>
                <div class="uk-margin"><a class="contacts-block" href="tel:+96895219590"><span>Need Help? Call Us</span><strong>(+968) 9521-9590</strong></a></div>
            </div>
        </div>
    </div>
    <script src="asset/js/libs.js"></script>
    <script src="asset/js/main.js"></script>
</body>

</html>
