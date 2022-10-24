<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Book Now</title>
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
                    <div class="page-head__title" style="font-size:35px;">Need an Equipment on Rent</div>
                    <div class="page-head__breadcrumb">
                        <ul class="uk-breadcrumb">
                            <li><span>Book Now</span></li>
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
                                    <form enctype="multipart/form-data" method="POST" action="{{ route('sendinquiry') }}" class="form w-100" novalidate="novalidate" id="" >
                    @csrf                                            <!-- Hidden Required Fields -->
                                            <input type="hidden" name="project_name" value="DAR AL KHULOOD UNITED LLC - Top-Of-The-Line Equipment Rentals">
                                            <input type="hidden" name="admin_email" value="test@gmail.com">
                                            <input type="hidden" name="form_subject" value="Form Contacts page">
                                            <!-- END Hidden Required Fields -->
                                            <div class="uk-grid uk-grid-medium uk-child-width-1-2@s" data-uk-grid>
                                                <div><input class="uk-input uk-form-large" name="name" type="text" placeholder="Name *"></div>
                                                <div><input class="uk-input uk-form-large" name="email" type="email" placeholder="Email *"></div>
                                                <div><input class="uk-input uk-form-large" name="phonenumber" type="text" placeholder="Contact Number *"></div>
                                                <div><input class="uk-input uk-form-large" name="city" type="text" placeholder="City *"></div>
                                                <div><input class="uk-input uk-form-large" name="companyname" type="text" placeholder="Comapany Name *"></div>
                                                <div >
                                                <select style="padding-top:6px;text-transform:capitalize;" name="equipment" class="uk-input uk-form-large form-control item">
                                                    @foreach($equipments as $equipment)
                                                    <option value="{{$equipment->title}}">{{$equipment->title}}</option>
                                                    @endforeach
                                            </select>
                                                </div>
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
        </main>
        >
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
    <script src="asset/js/lib.js"></script>
    <script src="asset/js/main.js"></script>
</body>

</html>
