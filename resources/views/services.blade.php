<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Services</title>
    <meta content="Chernkh Mikhail" name="author">
    <meta content="DAR AL KHULOOD UNITED LLC - Top-Of-The-Line Equipment Rentals" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=no">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <link rel="shortcut icon" href="{{asset('/storage/'.$user->titleicon)}}" type="image/x-icon">
    <link rel="stylesheet" href="asset/css/libs.min.css">
    <link rel="stylesheet" href="asset/css/main.css">

    <style>
/*****************************
*	horizontal news ticker
******************************/
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto;
  gap: 10px;
  
  padding: 10px;
}

.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  
  text-align: center;
  font-size: 30px;
}




.ticker-wrapper-h{
	display: flex;	
	position: relative;
	overflow: hidden;
	border: 1px solid #14A850;
    background-color: #14A850;
}

.ticker-wrapper-h .heading{
	background-color: #14A850;
	color: #fff;
	padding: 5px 10px;
	flex: 0 0 auto;
	z-index: 1000;
}
.ticker-wrapper-h .heading:after{
	content: "";
	position: absolute;
	top: 0;
	border-left: 20px solid #14A850;
	border-top: 17px solid transparent;
	border-bottom: 15px solid transparent;
}


.news-ticker-h{
	display: flex;
	margin:0;
	padding: 0;
	padding-left: 90%;
	z-index: 999;
	
	animation-iteration-count: infinite;
	animation-timing-function: linear;
	animation-name: tic-h;
	animation-duration: 30s;
	
}
.news-ticker-h:hover { 
	animation-play-state: paused; 
}

.news-ticker-h li{
	display: flex;
	width: 100%;
	align-items: center;
	white-space: nowrap;
	padding-left: 20px;
}

.news-ticker-h li a{
	color: #fff;
	font-weight: bold;
}

@keyframes tic-h {
	0% {
		-webkit-transform: translate3d(0, 0, 0);
		transform: translate3d(0, 0, 0);
		visibility: visible;
	}
	100% {
		-webkit-transform: translate3d(-100%, 0, 0);
		transform: translate3d(-100%, 0, 0);
	}
}
    </style>
</head>

<body class="page-home">

    <!-- Loader-->
    <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
    <!-- Loader end-->


    <div class="page-wrapper">
        @include('header')
        
        <main class="page-main">
        <div class="page-head">
                <div class="page-head__bg" style="background-image: url(asset/img/bg_page-blog-grid.jpg)">
                    <div class="page-head__title">Services</div>
                    <div class="page-head__breadcrumb">
                        <ul class="uk-breadcrumb">
                            <li><span>DAR AL KHULOOD UNITED LLC Industry Solutions</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <section class="s-solutions">
                <div class="uk-section uk-container uk-container-large">
                    <div class="section-title --center"><span>[Premier Equipment Rental Service]</span>
                        <h3>DAR AL KHULOOD UNITED LLC Industry Solutions</h3>
                    </div>
                    <div class="section-content">
                        <div class="js-solution-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                @foreach($services as $service)

                                    <div class="swiper-slide">
                                        <div class="solution-item">
                                            <div class="solution-item__box uk-inline"><img src="{{asset('/storage/'.$service->image)}}" alt="solution-item">
                                                <div class="uk-overlay uk-light uk-position-bottom">
                                                    <div class="solution-item__title">
                                                        <h3>{{$service->title}}</h3>
                                                    </div>
                                                    <div class="solution-item__intro">
                                                        <p>{{$service->description}}</p>
                                                    </div>
                                                    <div class="solution-item__link"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach    
                                </div>
                            </div>
                            <div class="slider-nav uk-margin-large-top">
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
				@include('footer')
        <div id="offcanvas" data-uk-offcanvas="mode: reveal; overlay: true">
            <div class="uk-offcanvas-bar uk-flex uk-flex-column uk-flex-between"><button class="uk-offcanvas-close" type="button" data-uk-close></button>
                <div class="uk-margin-bottom"><a class="logo uk-margin-bottom" href="/"><img src="{{asset('/storage/'.$user->logodark)}}" alt="image"></a>



                    @include('mb_menu')
                </div>
                <div class="uk-margin"><a class="contacts-block" href=""><span>Need Help? Call Us</span><strong>{{$user->number}}</strong></a></div>
            </div>
        </div>
    </div>
    <script src="asset/js/libs.js"></script>
    <script src="asset/js/main.js"></script>
</body>

</html>
