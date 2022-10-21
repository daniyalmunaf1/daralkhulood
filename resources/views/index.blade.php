<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Home</title>
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
            <section class="s-hero">
                <div class="s-hero__inner">
                    <div class="s-hero__desc">
                        <div class="s-hero__title">Looking For Construction Equipments On Rent?</div>
                        <div class="s-hero__subtitle">Get the best rental service that is more cost effective, efficient and Safest.</div>
                        <div class="s-hero__search">
                            <a class="uk-button uk-button-danger uk-button-large uk-icon uk-first-column info-card__btn uk-button" style="background-color: #14A850; border-radius: 100px; font-size: 15px;"; href="{{route('aboutus')}}">Book Now</a>
                            <a class="uk-button uk-button-danger uk-button-large uk-icon uk-first-column info-card__btn uk-button" style="background-color: #fff; color: #0E58A8; border-radius: 100px; font-size: 15px;"; href="{{route('aboutus')}}">Browse Rental Categories</a>
                        </div>
                    </div>
                    <div class="s-hero__slider">
                        <div class="js-hero-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <a href=""> <div class="swiper-slide"><img src="asset/img/hero-slider-1.jpg" alt="hero-slider"></div></a>
                                    <a href=""> <div class="swiper-slide"></a><img src="asset/img/hero-slider-2.jpg" alt="hero-slider"></div></a>
                                    <a href=""> <div class="swiper-slide"></a><img src="asset/img/hero-slider-3.jpg" alt="hero-slider"></div></a>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ticker-wrapper-h">
                    <!--<div class="heading">Trending Now</div>-->
                    
                    <ul class="news-ticker-h">
                        <li><a href="">{{$user->slider}}</a></li>
                        
                    </ul>
                </div>
            </section>
            <section class="s-about">
                <div class="uk-section uk-container">
                    <div class="uk-grid uk-child-width-1-2@m uk-flex-middle" data-uk-grid="">
                        <!--<div class="uk-text-center uk-first-column"><img src="asset/img/Groupbt.png" alt="image"></div>-->
                        <div class="uk-text-center uk-first-column">
                            <div class="grid-container">
                            <div><div class="uk-text-center uk-first-column"><img src="asset/img/Groupbt 1.png" alt="image"></div></div>
                            <div><div class="uk-text-center uk-first-column"><img src="asset/img/Groupbt 2.png" alt="image"></div></div>
                          </div>
                          <div class="grid-container">
                            <div><div class="uk-text-center uk-first-column"><img src="asset/img/Groupbt 3.png" alt="image"></div></div>
                            <div><div class="uk-text-center uk-first-column"><img src="asset/img/Groupbt 4.png" alt="image"></div></div>
                          </div></div>
                        <div>
                            <div class="section-title"><span>[Who we are]</span>
                                <h3>Helping the Industry with 10k+ Equipments for Rentals Anytime</h3>
                            </div>
                            <div class="section-content">
                                <p>Kiusmod tempor sed incididunts labore sed dolor mag dolor mag aliqua enimad mini veniam quis nostrud dolor mag aliqua enimad mini veniam quis nostrud enimad mini veniam quis nostrud exercitation ullamco labores nisi ut aliquip ex ea reprehen deritin voluptate. Alabores nisi ut aliquip ex ea reprehen eiusmod deritin voluptate.</p>
                                <p>Waliqua enimad mini veniam quis nostrud dolor mag aliqua enimad mini veniam ipsum dolor tempor amety consecteur adipisicing elits dolor mag aliqua enimad mini veniam quis nostrud tempor incididunt aliqua.</p>
                                <div class="s-about__btns" data-uk-margin=""><a class="uk-button uk-button-danger uk-button-large uk-icon uk-first-column" href="11_about-us.html" data-uk-icon="arrow-right">Get started<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" points="10 5 15 9.5 10 14"></polyline><line fill="none" stroke="#000" x1="4" y1="9.5" x2="15" y2="9.5"></line></svg></a><a class="uk-icon-button ico_mission" href="{{route('team')}}" data-uk-tooltip="title: Our Team; pos: bottom" title="" aria-expanded="false"></a><a class="uk-icon-button ico_track" href="{{route('our-equipments')}}" data-uk-tooltip="title: Our Equipment; pos: bottom" title="" aria-expanded="false"></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="s-categories">
                <div class="uk-background-muted">
                    <div class="uk-section uk-container uk-container-expand">
                        <div class="section-title --center"><span>[Premier Equipment Rental Service]</span>
                            <h3>Browse Rental Categories</h3>
                        </div>
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
                                                <a class="more" href=""><span>read more</span><span data-uk-icon="arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="uk-margin-large-top uk-text-center"><a class="uk-button uk-button-default uk-button-large" href="04_equipment-categories.html"><span>view more</span><span data-uk-icon="arrow-right"></span></a></div>
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
                        <div class="section-content"><a class="more" href="11_about-us.html"><span data-uk-icon="arrow-right"></span><span>see how it works</span></a></div>
                    </div>
                    <div class="s-video__img" data-uk-lightbox="video-autoplay: true">
                        <div class="uk-cover-container"><img src="asset/img/img-video.jpg" alt="img-video" data-uk-cover><canvas width="960" height="400"></canvas></div><a class="s-video__link" href="{{$user->videolink}}" data-attrs="width: 1280; height: 720;" data-caption="YouTube"><img src="asset/img/ico-play.png" alt="image"></a>
                    </div>
                </div>
            </section>
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
                                                    <div class="solution-item__title"><span>[{{$service->subtitle}}]</span>
                                                        <h3>{{$service->subtitle}}</h3>
                                                    </div>
                                                    <div class="solution-item__intro">
                                                        <p>{{$service->description}}</p>
                                                    </div>
                                                    <div class="solution-item__link"><a class="more" href="07_equipment-detail.html"><span data-uk-icon="arrow-right"></span><span>learn more</span></a></div>
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
            <section class="s-stats">
                <div class="uk-container uk-container-xlarge">
                    <div class="uk-grid uk-grid-small uk-child-width-1-4@l uk-child-width-1-2@s" data-uk-grid>
                        <div>
                            <div class="stat-item ">
                                <div class="stat-item__box">
                                    <h6 class="stat-item__title">Rental Orders</h6><span class="stat-item__value">3.4k</span>
                                    <p class="stat-item__text">Pioneer of the equipment rental industry.</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="stat-item ">
                                <div class="stat-item__box">
                                    <h6 class="stat-item__title">Experienced Team</h6><span class="stat-item__value">125+</span>
                                    <p class="stat-item__text">Pioneer of the equipment rental industry.</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="stat-item ">
                                <div class="stat-item__box">
                                    <h6 class="stat-item__title">Customer Reviews</h6><span class="stat-item__value">3.6k+</span>
                                    <p class="stat-item__text">Pioneer of the equipment rental industry.</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="stat-item ">
                                <div class="stat-item__box">
                                    <h6 class="stat-item__title">Verified Locations</h6><span class="stat-item__value">150+</span>
                                    <p class="stat-item__text">Pioneer of the equipment rental industry.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="s-reasons">
                <div class="s-reasons__inner uk-background-muted">
                    <div class="s-reasons__media uk-cover-container"><img src="asset/img/img-reason.jpg" alt="reason" data-uk-cover><canvas width="960" height="670"></canvas></div>
                    <div class="s-reasons__info">
                        <div class="section-title"><span>[Equipment Rental Industry]</span>
                            <h3>Reasons to Choose DAR AL KHULOOD UNITED LLC</h3>
                        </div>
                        <div class="section-content">
                            <p>Helping with the best & wide selection of rental equipments.</p>
                            <div class="uk-grid uk-grid-small uk-child-width-1-2@s" data-uk-grid>
                                <div>
                                    <div class="reason-item"><img class="reason-item__img" src="asset/img/img-reason-1.jpg" alt="reason">
                                        <div class="reason-item__body">

                                            <div class="reason-item__desc">
                                                <h4 class="reason-item__title">Out Class Performance</h4>
                                                <p class="reason-item__text">The industry standard sit amest elits sed tempor eiusmod.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="reason-item"><img class="reason-item__img" src="asset/img/img-reason-2.jpg" alt="reason">
                                        <div class="reason-item__body">

                                            <div class="reason-item__desc">
                                                <h4 class="reason-item__title">Collaborative Support</h4>
                                                <p class="reason-item__text">The industry standard sit amest elits sed tempor eiusmod.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="s-reviews">
                <div class="uk-section uk-container">
                    <div class="section-title --center"><span>[Premier Equipment Rental Service]</span>
                        <h3>Words From Loyal Customers</h3>
                    </div>
                    <div class="section-content">
                        <div class="js-reviews-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="review-item">
                                            <div class="review-item__box">
                                                <div class="review-item__desc">
                                                    <div class="review-item__icon"><span data-uk-icon="quote-right"></span></div>
                                                    <h4 class="review-item__title">Satisfying Services.</h4>
                                                    <p class="review-item__text">At dolore magna aliqua umt enim ad mini veniam quis ulamco aliquip com da consequat duis aute irue derit vol ptate cillum dolore afugiat.</p>
                                                </div>
                                                <div class="review-item__user">
                                                    <div class="user">
                                                        <div class="user__avatar"><img src="asset/img/user-1.png" alt="avatar"></div>
                                                        <div class="user__info">
                                                            <div class="user__name">Donald James</div>
                                                            <div class="user__position">Rental Customer</div>
                                                            <div class="user__rating">
                                                                <ul class="rating-list">
                                                                    <li class="active" data-uk-icon="star"></li>
                                                                    <li class="active" data-uk-icon="star"></li>
                                                                    <li class="active" data-uk-icon="star"></li>
                                                                    <li class="active" data-uk-icon="star"></li>
                                                                    <li data-uk-icon="star"></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="review-item">
                                            <div class="review-item__box">
                                                <div class="review-item__desc">
                                                    <div class="review-item__icon"><span data-uk-icon="quote-right"></span></div>
                                                    <h4 class="review-item__title">Well-Performed Equip.</h4>
                                                    <p class="review-item__text">At dolore magna aliqua umt enim ad mini veniam quis ulamco aliquip com da consequat duis aute irue derit vol ptate cillum dolore afugiat.</p>
                                                </div>
                                                <div class="review-item__user">
                                                    <div class="user">
                                                        <div class="user__avatar"><img src="asset/img/user-2.png" alt="avatar"></div>
                                                        <div class="user__info">
                                                            <div class="user__name">Sheggy O’Brain</div>
                                                            <div class="user__position">Rental Customer</div>
                                                            <div class="user__rating">
                                                                <ul class="rating-list">
                                                                    <li class="active" data-uk-icon="star"></li>
                                                                    <li class="active" data-uk-icon="star"></li>
                                                                    <li class="active" data-uk-icon="star"></li>
                                                                    <li data-uk-icon="star"></li>
                                                                    <li data-uk-icon="star"></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="review-item">
                                            <div class="review-item__box">
                                                <div class="review-item__desc">
                                                    <div class="review-item__icon"><span data-uk-icon="quote-right"></span></div>
                                                    <h4 class="review-item__title">Working Excavators.</h4>
                                                    <p class="review-item__text">At dolore magna aliqua umt enim ad mini veniam quis ulamco aliquip com da consequat duis aute irue derit vol ptate cillum dolore afugiat.</p>
                                                </div>
                                                <div class="review-item__user">
                                                    <div class="user">
                                                        <div class="user__avatar"><img src="asset/img/user-3.png" alt="avatar"></div>
                                                        <div class="user__info">
                                                            <div class="user__name">Albert D’Souza</div>
                                                            <div class="user__position">Rental Customer</div>
                                                            <div class="user__rating">
                                                                <ul class="rating-list">
                                                                    <li class="active" data-uk-icon="star"></li>
                                                                    <li class="active" data-uk-icon="star"></li>
                                                                    <li class="active" data-uk-icon="star"></li>
                                                                    <li class="active" data-uk-icon="star"></li>
                                                                    <li data-uk-icon="star"></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-nav uk-margin-large-top">
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="s-info">
                <div class="uk-container uk-container-xlarge">
                    <div class="uk-grid uk-grid-collapse uk-child-width-1-2@l" data-uk-grid>
                        <div>
                            <div class="info-card --accent">
                                <div class="info-card__box">
                                    <div class="info-card__head"><img src="asset/img/ico-info-1.png" alt="ico-info"><span>Do you need our Assistance while Renting an Equipment?</span></div>
                                    <div class="info-card__title">Contact our Customer Care Team to Better Assist for your Needs.</div>
                                    <div class="info-card__btn"><a class="uk-button uk-button-default uk-button-large" href="11_about-us.html"><span>Get assistance</span><span data-uk-icon="arrow-right"></span></a></div>
                                    <div class="info-card__progress">
                                        <div class="progress-item">
                                            <h6>Machinery Help</h6><progress class="uk-progress" value="95" max="100"></progress><span>95%</span>
                                        </div>
                                        <div class="progress-item">
                                            <h6>Choose an Equip</h6><progress class="uk-progress" value="90" max="100"></progress><span>90%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="info-card">
                                <div class="info-card__box">
                                    <div class="info-card__head"><img src="asset/img/ico-info-2.png" alt="ico-info"><span>Do you want to Buy a Part or Equipment? DAR AL KHULOOD UNITED LLC can Help you!</span></div>
                                    <div class="info-card__title">Buy a Part or Equipment in Best Shape with Fully Maintainence.</div>
                                    <div class="info-card__btn"><a class="uk-button uk-button-default uk-button-large" href="11_about-us.html"><span>Start searching</span><span data-uk-icon="arrow-right"></span></a></div>
                                    <div class="info-card__progress">
                                        <div class="progress-item">
                                            <h6>Rent Equipment</h6><progress class="uk-progress" value="95" max="100"></progress><span>95%</span>
                                        </div>
                                        <div class="progress-item">
                                            <h6>Delivery Timing</h6><progress class="uk-progress" value="90" max="100"></progress><span>90%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="s-form">
                <div class="uk-section-large uk-container">
                    <div class="uk-grid uk-flex-middle" data-uk-grid>
                        <div class="uk-width-2-5@m">
                            <div class="section-title"><span>[Equipment Rental Industry]</span>
                                <h3>Need an Equipment on Rent? Get Expert’s Help</h3>
                            </div>
                            <div class="section-content">
                                <p>Send your query today & our team would be happy to assist you because we care industry to utilizing heavy equipment.</p>
                                <div class="contacts-box">
                                    <div class="contacts-box__img"><img src="asset/img/avatar.png" alt="image"></div>
                                    <div class="contacts-box__desc">
                                        <div class="contacts-box__label">Need Help? Call Us</div><a class="contacts-box__phone" href="tel:+96895219590">(+968) 9521-9590</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="uk-width-3-5@m">
                            <form action="#!">
                                <!-- Hidden Required Fields -->
                                <input type="hidden" name="project_name" value="DAR AL KHULOOD UNITED LLC - Top-Of-The-Line Equipment Rentals">
                                <input type="hidden" name="admin_email" value="test@gmail.com">
                                <input type="hidden" name="form_subject" value="Get Expert’s Help">
                                <!-- END Hidden Required Fields -->
                                <div class="uk-grid uk-child-width-1-2@s uk-grid-small" style="justify-content: center;" data-uk-grid>
                                    <a class="uk-button uk-button-default uk-button-large" href="{{route('contactus')}}"><span>Contact Us</span><span data-uk-icon="arrow-right"></span></a></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
				@include('footer')
        <div id="offcanvas" data-uk-offcanvas="mode: reveal; overlay: true">
            <div class="uk-offcanvas-bar uk-flex uk-flex-column uk-flex-between"><button class="uk-offcanvas-close" type="button" data-uk-close></button>
                <div class="uk-margin-bottom"><a class="logo uk-margin-bottom" href="/"><img src="{{asset('/storage/'.$user->logodark)}}" alt="image"></a>



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
                <div class="uk-margin"><a class="contacts-block" href=""><span>Need Help? Call Us</span><strong>{{$user->number}}</strong></a></div>
            </div>
        </div>
    </div>
    <script src="asset/js/libs.js"></script>
    <script src="asset/js/main.js"></script>
</body>

</html>
