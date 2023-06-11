





<!-- Start Header -->
<header class="rn-header haeder-default inbio-default-header">
    <div class="header-wrapper rn-popup-mobile-menu m--0 row align-items-center">
        <!-- Start Header Left -->
        <div class="col-lg-2 col-6">
            <div class="header-left">
                <div class="logo">
                    <a href="index.html">
                        <img src="/storage/home/{{ $home->logo }}" alt="logo">
                    </a>
                </div>
            </div>
        </div>
        <!-- End Header Left -->
        <!-- Start Header Center -->
        <div class="col-lg-10 col-6">
            <div class="header-center">
                <nav class="mainmenu-nav d-none d-xl-block">
                    <ul class="primary-menu">
                        <li><a class="nav-link" href="{{url('home')}}">Home</a></li>
                        <li><a class="nav-link" href="{{{url('about')}}}">About</a>
                            <li><a href="{{ url('class_all') }}">Education</a></li>
                        <li><a class="nav-link" href="#client">Clients</a></li>
                        </li>
                   
                        <li class="nav-item has-droupdown"><a class="nav-link" href="#">More</a>
                            <ul class="submenu">
                        <li><a href="{{url('user/recentwork')}}">Portfolio</a></li>
                        <li><a href="{{url('user/blog')}}">Blog</a></li>
                        <li><a href="{{url('user/post')}}">Client_Post</a></li>
                        <li><a href="{{url('user/service')}}">services</a></li>
                        <li><a href="{{url('user/cetagory')}}">Categories</a></li>
                        <li><a href="{{ url('user/media') }}">Video</a></li>
                        <li><a href="{{ url('contact') }}">Support</a></li>
                        <li><a href="">Terms of service</a></li>
                               
                             
                            </ul>
                        </li>
                        <li><a class="nav-link" href="{{ url('contact') }}">Contact</a></li>
         
                        @if (Auth::id())
                            <li class="nav-item">
                                <a class="nav-link" href="#">({{ Auth::user()->name }})</a>
                                <ul class="submenu">
                              
                                    <li><a href="{{url('redirect')}}">Profile</a></li>
                                    <li><a href="{{route('profile.show')}}">Setting</a></li>
                                  

                                </ul>
                            </li>
                        @else
                        @endif
                    </ul>
                </nav>
                <!-- Start Header Right  -->
                <div class="header-right">




                    @if (Auth::id())
                        <a class="rn-btn" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <span>Logout</span>


                        </a>




                        <form method="POST" id="logout-form" action="{{ route('logout') }}">
                            @csrf
                        </form>
                    @else
                        <a class="rn-btn" target="_blank" href="{{ route('login') }}"><span>Sign in/up</span></a>
                    @endif




                    <div class="hamberger-menu d-block d-xl-none">
                        <i id="menuBtn" class="feather-menu humberger-menu"></i>
                    </div>

                    <div class="close-menu d-block">
                        <span class="closeTrigger">
                            <i data-feather="x"></i>
                        </span>
                    </div>
                </div>
                <!-- End Header Right  -->

            </div>
        </div>
        <!-- End Header Center -->
    </div>
</header>
<!-- End Header Area -->

<!-- Start Popup Mobile Menu  -->
<div class="popup-mobile-menu">
    <div class="inner">
        <div class="menu-top">
            <div class="menu-header">
                <a class="logo" href="index.html">
                    <img src="/storage/home/{{ $home->logo }}" alt="Personal Portfolio">
                </a>
                <div class="close-button">
                    <button class="close-menu-activation close"><i data-feather="x"></i></button>
                </div>
            </div>
            <p class="discription">I'm  Study at Diploma in Computer Engineering.
            </p>
        </div>
        <div class="content">
            <ul class="primary-menu">
                <li><a class="nav-link" href="{{url('home')}}">Home</a></li>
                <li><a class="nav-link" href="{{{url('about')}}}">About</a>
                    <li><a href="{{ url('class_all') }}">Education</a></li>
                <li><a class="nav-link" href="#client">Clients</a></li>
                </li>
            
             
                <li class=" has-droupdown ">
                    <a class="nav-link" href="#">More</a>
                    <ul class="submenu">
                        <li><a href="{{url('user/recentwork')}}">Portfolio</a></li>
                        <li><a href="{{url('user/blog')}}">Blog</a></li>
                        <li><a href="{{url('user/post')}}">Client_Post</a></li>
                        <li><a href="{{url('user/service')}}">services</a></li>
                        <li><a href="{{url('user/cetagory')}}">Categories</a></li>
                        <li><a href="{{ url('user/media') }}">Video</a></li>
                        <li><a href="{{ url('contact') }}">Support</a></li>
                        <li><a href="">Terms of service</a></li>
                    </ul>
                </li>
                <li><a class="nav-link" href="{{ url('contact') }}">Contact</a></li>
                @if (Auth::id())
                    <li class=" has-droupdown ">
                        <a class="nav-link" href="#">({{ Auth::user()->name }})</a>
                        <ul class="submenu">
                            <li><a href="{{url('redirect')}}">Profile</a></li>
                            <li><a href="{{route('profile.show')}}">Setting</a></li>

                        </ul>
                    </li>
                @else
                @endif

                @if (Auth::id())
                    <a class="rn-btn" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <span>Logout</span>


                    </a>


                    <form method="POST" id="logout-form" action="{{ route('logout') }}">
                        @csrf
                    </form>
                @else
                    <a class="rn-btn" target="_blank" href="{{ route('login') }}"><span>Sign in/up</span></a>
                @endif
            </ul>
            <!-- social sharea area -->
            <div class="social-share-style-1 mt--40">
                <span class="title">find with me</span>
                <ul class="social-share d-flex liststyle">
                    <li class="facebook"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-facebook">
                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                            </svg></a>
                    </li>
                    <li class="instagram"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-instagram">
                                <rect x="2" y="2" width="20" height="20" rx="5"
                                    ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                            </svg></a>
                    </li>
                    <li class="linkedin"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-linkedin">
                                <path
                                    d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                                </path>
                                <rect x="2" y="9" width="4" height="12"></rect>
                                <circle cx="4" cy="4" r="2"></circle>
                            </svg></a>
                    </li>
                </ul>
            </div>
            <!-- end -->
        </div>
    </div>
</div>
