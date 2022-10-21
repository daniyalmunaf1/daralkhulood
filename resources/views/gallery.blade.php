<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Gallery</title>
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
                    <div class="page-head__title" style="font-size:35px;">Photo Gallery</div>
                    <div class="page-head__breadcrumb">
                        <ul class="uk-breadcrumb">
                            <li><span>Gallery</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="page-content">
                <div class="uk-section-large uk-container">
                    <h2 style="text-align: center">
                        Photo Gallery
                    </h2>
                    <div class="uk-grid uk-child-width-1-3@l" data-uk-grid>
                        
                        @foreach($images as $image)
                        <div>
                            <div class="new-item"><a class="new-item__box" href="">
                                    <div class="new-item__media"><img style="width:390px;height:280px;" src="{{asset('/storage/'.$image->name)}}" alt="news"></div>
                                    
                                </a></div>
                        </div>
                        
                        @endforeach
                    </div>

                    <h2 style="text-align: center">
                        Video Gallery
                    </h2>
                    <div class="uk-grid uk-child-width-1-3@l" data-uk-grid>
                        
                    @foreach($videos as $video)

                        <div>
                            <div class="new-item"><a class="new-item__box">
                                    <iframe width="390" height="315" src="{{$video->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    
                                </a></div>
                        </div>
                        @endforeach
                        
                            
                    </div>
                    <!-- <ul class="uk-pagination uk-flex-center" data-uk-margin>
                        <li class="uk-active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul> -->
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
