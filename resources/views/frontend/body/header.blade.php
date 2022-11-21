 <!-- start Header area -->
    <div class="d-none d-xl-block">
        <header class="rn-header-area d-flex align-items-start flex-column left-header-style">
            <div class="logo-area">
                <a href="index.html">
                    <img src="{{asset($overview->image)}}" alt="personal-logo">
                </a>
            </div>
            <nav id="sideNavs" class="mainmenu-nav navbar-example2 onepagenav">
                @php
                      $url=request()->getSchemeAndHttpHost();
                      //dd(url('/'));

                @endphp

                @if($page_name!='Album')
                <ul class="primary-menu nav nav-pills">
                    <li class="nav-item current"><a class="nav-link smoth-animation-two" href="#home"><i data-feather="home"></i> Home</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation-two" href="#features"> <i data-feather="briefcase"></i>Features</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation-two" href="#portfolio"><i data-feather="layers"></i>Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation-two" href="#resume"><i data-feather="users"></i>Resume</a></li>
                     <li class="nav-item"><a class="nav-link smoth-animation-two" href="{{route('album.cat')}}" target="_blank"><i data-feather="image"></i>Media</a></li>
                      <li class="nav-item"><a class="nav-link smoth-animation-two" href="#pricing"><i data-feather="shopping-cart"></i>Recent activity </a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation-two" href="#clients"><i data-feather="user"></i>Clients</a></li>
                   
                    <li class="nav-item"><a class="nav-link smoth-animation-two" href="#blog"><i data-feather="image"></i>blog</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation-two" href="#contacts"><i data-feather="message-circle"></i>Contact</a></li>
                </ul>
                @else
                  <ul class="primary-menu ">
                     <li class=" current"><a class=" " href="{{route('home')}}"><i data-feather="home"></i> Home</a></li>
                      <li class="nav-item"><a class="nav-link smoth-animation-two" href="{{route('album.cat')}}"><i data-feather="image"></i>Media</a></li>
                </ul> 
                @endif
            </nav>
            <div class="footer">
                <div class="social-share-style-1 mt--40">
                    <span class="title">find with me</span>
                    <ul class="social-share d-flex liststyle">
                        <li class="facebook"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg></a>
                        </li>
                        <li class="instagram"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                </svg></a>
                        </li>
                        <li class="linkedin"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin">
                                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                    <rect x="2" y="9" width="4" height="12"></rect>
                                    <circle cx="4" cy="4" r="2"></circle>
                                </svg></a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
    </div>
    <!-- start Header area end -->

    <!-- Header Mobile Bar  -->
    <div class="header-style-2 d-block d-xl-none">
        <div class="row align-items-center">
            <div class="col-6">
                <div class="logo">
                    <a href="index.html">
                        <img src="assets/images/logo/logo.png" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="col-6">
                <div class="header-right text-end">
                    <div class="hamberger-menu">
                        <i id="menuBtn" class="feather-menu humberger-menu"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Mobile Bar  -->

    <!-- Start Popup Mobile Menu  -->
    <div class="popup-mobile-menu">
        <div class="inner">
            <div class="menu-top">
                <div class="menu-header">
                    <a class="logo" href="index.html">
                        <img src="assets/images/logo/logos-circle.png" alt="Personal Portfolio">
                    </a>
                    <div class="close-button">
                        <button class="close-menu-activation close"><i data-feather="x"></i></button>
                    </div>
                </div>
                <p class="discription">Inbio is a personal portfolio template. You can customize all.</p>
            </div>
            <div class="content">
                <ul class="primary-menu nav nav-pills">
                    <li class="nav-item"><a class="nav-link smoth-animation-two active" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation-two" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation-two" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation-two" href="#resume">Resume</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation-two" href="#clients">Clients</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation-two" href="#pricing">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation-two" href="#blog">blog</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation-two" href="#contacts">Contact</a></li>
                </ul>
                <!-- social sharea area -->
                <div class="social-share-style-1 mt--40">
                    <span class="title">find with me</span>
                    <ul class="social-share d-flex liststyle">
                        <li class="facebook"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg></a>
                        </li>
                        <li class="instagram"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                </svg></a>
                        </li>
                        <li class="linkedin"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin">
                                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
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
    <!-- End Popup Mobile Menu  -->