<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Contact</title>
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

<body class="page-contact">

    <!-- Loader-->
    <!-- Loader end-->



    <div class="page-wrapper">
        @include('header')
        @if(Session::has('errors'))
            <p class="alert alert-danger" style="color: #78261f;
    background-color: #fadbd8;
    border-color: #f8ccc8;height:60px;justify-content:center;align-items:center;display:flex;">    {{ implode('', $errors->all(':message')) }}
            </p>
            @endif
            @if (Session::has('message'))
            <div class="alert alert-success" style="    color: #0f6848;
    background-color: #d2f4e8;
    border-color: #bff0de;height:60px;justify-content:center;align-items:center;display:flex;">{{ Session::get('message') }}</div>
            @endif
            @if (Session::has('issue'))
            <div class="alert alert-danger">{{ Session::get('issue') }}</div>
            @endif  
        <main class="page-main">
            <div class="page-head">
                <div class="page-head__bg" style="background-image: url(asset/img/bg_page-contact.jpg)">
                    <div class="page-head__title">Get In Touch</div>
                    <div class="page-head__breadcrumb">
                        <ul class="uk-breadcrumb">
                            <li><span>Contact Us</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="page-content">
                <div class="uk-section uk-container">
                    <div class="contact-page-box">
                        <div class="uk-grid" data-uk-grid>
                            <div class="uk-width-1-3@m">
                                <div class="contact-page-sidebar">

                                    <img src="asset/img/logo-white.png" alt="image">

                                    <p>Aiusmod tempor incididunt labore dnim ad minim veniam quis nostrsd exercitation ullamco.</p>
                                    <ul class="contacts-list">
                                        <li><a href="{{$user->map}}" target="_blank"><span data-uk-icon="location"></span>
                                                <div><span class="label">Head Office</span><span>{{$user->address}}</span></div>
                                            </a></li>
                                        <li><a href=""><span data-uk-icon="receiver"></span>
                                                <div><span class="label">Send Email</span><span>{{$user->number}}</span></div>
                                            </a></li>
                                        <li><a href="mailto:{{$user->email}}"><span data-uk-icon="clock"></span>
                                                <div><span class="label">Work Time</span><span>{{$user->worktime}}</span></div>
                                            </a></li>
                                    </ul>
                                    <ul class="social">
                                    <li><a href="{{$user->facebook}}"><span data-uk-icon="facebook"></span></a></li>
                                    <li><a href="{{$user->twitter}}" ><span data-uk-icon="twitter"></span></a></li>
                                    <li><a href="{{$user->instagram}}" ><span data-uk-icon="instagram"></span></a></li>
                                    <li><a href="{{$user->linkedin}}" ><span data-uk-icon="linkedin"></span></a></li>
                                    <li><a href="{{$user->youtube}}" ><span data-uk-icon="youtube"></span></a></li>
                                </ul>
                                </div>
                            </div>
                            <div class="uk-width-2-3@m">
                                <div class="block-form">
                                    <div class="section-title"><span>[Equipment Rental Industry]</span>
                                        <h3>Need an Equipment on Rent?<br> Send us a Message</h3>
                                    </div>
                                    <div class="section-content">
                                    <form enctype="multipart/form-data" method="POST" action="{{ route('sendmessage') }}" class="form w-100" novalidate="novalidate" id="" >
                    @csrf                                            <!-- Hidden Required Fields -->
                                            <input type="hidden" name="project_name" value="DAR AL KHULOOD UNITED LLC - Top-Of-The-Line Equipment Rentals">
                                            <input type="hidden" name="admin_email" value="test@gmail.com">
                                            <input type="hidden" name="form_subject" value="Form Contacts page">
                                            <!-- END Hidden Required Fields -->
                                            <div class="uk-grid uk-grid-medium uk-child-width-1-2@s" data-uk-grid>
                                                <div><input class="uk-input uk-form-large" name="name" type="text" placeholder="Name *"></div>
                                                <div><input class="uk-input uk-form-large" name="email" type="email" placeholder="Email *"></div>
                                                <div class="uk-width-1-1"><input class="uk-input uk-form-large" name="subject" type="text" placeholder="Subject"></div>
                                                <div class="uk-width-1-1"><textarea class="uk-textarea uk-form-large" name="message" placeholder="Your Message"></textarea></div>
                                                <div><button class="uk-button uk-button-default uk-button-large" type="submit"><span>Send message</span><span data-uk-icon="arrow-right"></span></button></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contacts-map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14626.27347655932!2d58.3664292!3d23.5839408!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe807a3da6f1f836d!2sDAR%20AL%20KHULOOD%20UNITED%20LLC!5e0!3m2!1sen!2s!4v1664500784243!5m2!1sen!2"></iframe></div>
        </main>
        <section class="newsletter">
            <div class="uk-section uk-container uk-container-xlarge">
                <div class="newsletter__inner">
                    <div class="newsletter-form">
                        <div class="newsletter-form__title">
                            <h4>Newsletter<br> Subscription</h4>
                        </div>
                        <div class="newsletter-form__form">
                        <form enctype="multipart/form-data" method="POST" action="{{ route('subscribe') }}" class="form w-100" novalidate="novalidate" id="" >
                    @csrf

                                                  <!-- Hidden Required Fields -->
                               <input type="email" name="email" placeholder="Enter Your Email"><button type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                    <div class="download-app">
                        <div class="download-app__title">
                            <h4>Download Our App</h4>
                            <p>Get Apps For Faster Booking</p>
                        </div>
                        <div class="download-app__links"><a class="download-link" href="https://www.apple.com/ua/app-store/" target="_blank"><img src="asset/img/appstore.png" alt="appstore"></a><a class="download-link" href="https://play.google.com/" target="_blank"><img src="asset/img/googleplay.png" alt="appstore"></a></div>
                    </div>
                </div>
            </div>
        </section>
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
    <script src="asset/js/lib.js"></script>
    <script src="asset/js/main.js"></script>
</body>

</html>
