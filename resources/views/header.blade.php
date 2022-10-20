<header class="page-header">
            <div class="uk-container-expand">
                <div class="page-header__inner">
                    <div class="page-header__logo"><a class="logo" href="{{route('index')}}"><img src="{{asset('/storage/'.$user->logo)}}" alt="image"></a></div>
                    <div class="page-header__mainmenu">
                        <ul class="uk-navbar-nav" data-uk-navbar>
                            <li class=""><a href="{{route('index')}}"><span>Home</span></a></li>
                            <li><a href="{{route('aboutus')}}"><span class="with-navbar-dropdown-nav">About Us</span></a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="08_blog-grid.html">Group</a></li>
                                        <li><a href="{{route('gallery')}}">Gallery</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="{{route('team')}}"><span>Our Team</span></a></li>
                            <li><a href="{{route('our-equipments')}}"><span>Our Equipments</span></a></li>
                           
                            
                            <li><a href="08_blog-grid.html"><span>Projects</span></a></li></li>
                            <li><a href="{{route('contactus')}}"><span>Contact</span></a></li>
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
                    <div class="page-header__contacts"><a class="contacts-block" href=""><span>Need Help? Call Us</span><strong>{{$user->number}}</strong></a></div>
                    <div class="page-header__mobile-menu-btn"><button data-uk-toggle="target: #offcanvas" type="button"><span data-uk-icon="menu"></span></button></div>
                </div>
            </div>
        </header>

     