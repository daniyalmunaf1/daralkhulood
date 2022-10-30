<!-- <div style="background-color:#14A850;height:35px;"><ul style="margin-top:1px;float:right;margin-right:6%;margin-top:5px;margin-bottom:2px;" class="social">
                        <br>
                                    <li style="background-color: #045aa4;border-radius: 50%;height: 26px;"><a href="{{$user->facebook}}"><span style="height: 23px;" data-uk-icon="facebook"></span></a></li>
                                    <li style="background-color: #045aa4;border-radius: 50%;height: 26px;"><a href="{{$user->twitter}}" ><span style="height: 23px;" data-uk-icon="twitter"></span></a></li>
                                    <li style="background-color: #045aa4;border-radius: 50%;height: 26px;"><a href="{{$user->instagram}}" ><span style="height: 23px;" data-uk-icon="instagram"></span></a></li>
                                    <li style="background-color: #045aa4;border-radius: 50%;height: 26px;"><a href="{{$user->linkedin}}" ><span style="height: 23px;" data-uk-icon="linkedin"></span></a></li>
                                    <li style="background-color: #045aa4;border-radius: 50%;height: 26px;"><a href="{{$user->youtube}}" ><span style="height: 23px;" data-uk-icon="youtube"></span></a></li>
                                </ul></div> -->
<header class="page-header">
            <div class="uk-container-expand">
                <div class="page-header__inner">
                    <div class="page-header__logo"><a style="margin-right:-300px;" class="logo" href="{{route('index')}}"><img src="{{asset('/storage/'.$user->logo)}}" alt="image"></a></div>
                    <div style="margin-left:0px;" class="page-header__mainmenu">
                        <ul class="uk-navbar-nav" data-uk-navbar>
                            <li class=""><a href="{{route('index')}}"><span>Home</span></a></li>
                            <li><a href="{{route('aboutus')}}"><span class="with-navbar-dropdown-nav">About Us</span></a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="{{route('company')}}">Company</a></li>
                                        <li><a href="{{route('gallery')}}">Gallery</a></li>
                                        <li><a href="{{route('service')}}">Services</a></li>
                                        <li><a href="{{route('our-achievements')}}">Our AAchievements</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="{{route('team')}}"><span>Our Team</span></a></li>
                            <li><a href="{{route('our-equipments')}}"><span>Our Equipments</span></a></li>
                            <li><a href="{{route('view-projects')}}"><span>Projects</span></a></li>
                            
                            <li><a href="{{route('contactus')}}"><span>Contact</span></a></li>
                            <li><a href="{{route('booknow')}}"><span>BookNow</span></a></li>
                        </ul>


                    </div>
                    <div class="page-header__search">
                        <div class="search-full"><a href="#modal-search-full" data-uk-search-icon data-uk-toggle></a>
                            <div class="uk-modal-full uk-modal" id="modal-search-full" data-uk-modal>
                                <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-middle" data-uk-height-viewport><button class="uk-modal-close-full" type="button" data-uk-close></button>
                                    <form class="uk-search uk-search-large"><input class="uk-search-input uk-text-center" type="search" placeholder="Search" autofocus></form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-header__contacts"><a class="contacts-block" href=""><span>Need Help? Call Us</span><strong>{{$user->number}}</strong></a>
                    <ul style="margin-top:8px;" class="block social">
                                <li style="background-color: #0E58A8;border-radius: 50%;"><a href="{{$user->facebook}}"><span data-uk-icon="facebook"></span></a></li>
                                
                                <li style="background-color: #0E58A8;border-radius: 50%;"><a href="{{$user->instagram}}" ><span data-uk-icon="instagram"></span></a></li>
                               
                                <li style="background-color: #0E58A8;border-radius: 50%;"><a href="{{$user->youtube}}" ><span data-uk-icon="youtube"></span></a></li>
                            </ul>
                </div>
                    <div class="page-header__mobile-menu-btn"><button data-uk-toggle="target: #offcanvas" type="button"><span data-uk-icon="menu"></span></button></div>
                    
                </div>
            </div>
        </header>

     