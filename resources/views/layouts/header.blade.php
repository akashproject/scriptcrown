<!--==============================
    Sidemenu
============================== -->
    
    <div class="popup-search-box d-none d-lg-block">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" placeholder="What are you looking for?">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div><!--==============================
    Mobile Menu
  ============================== -->
    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a class="icon-masking" href="{{ url('/') }}"><span data-mask-src="{{ url('/assets/logo/logo-small.png') }}" class="mask-icon"></span><img src="{{ url('/assets/logo/logo-small.png') }}" alt="Webteck"></a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li><a href="about.html">About Us</a></li>
                    <li class="menu-item-has-children">
                        <a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    
    <header class="th-header header-layout1">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-links">
                            <ul>
                                <li><i class="fas fa-phone"></i><a href="tel:{{ get_theme_setting('mobile') }}">{{ get_theme_setting('mobile') }}</a></li>
                                <li><i class="fas fa-envelope"></i><a href="mailto:{{ get_theme_setting('email') }}">{{ get_theme_setting('email') }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-social">
                            <span class="social-title">Follow Us On : </span>
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto header-left d-flex align-items-center">
                            <div class="header-logo">
                                <a class="icon-masking" href="{{ url('/') }}"><span data-mask-src="{{ url('/assets/logo/logo.png') }}" class="mask-icon"></span><img src="{{ url('/assets/logo/logo-small.png') }}" alt="Webteck"></a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li class="menu-item-has-children mega-menu-wrap">
                                        <a href="{{ route('page','services') }}">Services</a>
                                        <ul class="mega-menu">
                                            @foreach(getCategories() as $key => $category)
                                            <li>
                                                <a href="{{ route('category',$category->slug) }}">
                                                    <span class="mr-5"><img src="{{ url('assets/frontend/img/icon/'.$category->slug.'.png') }}" alt="{{ $category->name }}" > 
                                                    </span><span>{{ $category->name }}</span>
                                                </a>
                                                <ul>
                                                    @foreach(getServices($category->id) as $service)
                                                    <li><a href="{{ route('services',$service->slug) }}">{{ $service->name }} Service</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li><a target="_blank" href="{{ route('page','industries') }}" >industries</a></li>
                                    @foreach($primaryMenu as $key => $menuItem)
                                    <li><a target="_blank" href="{{ url($menuItem['url']) }}" >{{ $menuItem['name'] }}</a></li>
                                    @endforeach
                                </ul>
                            </nav>
                            <div class="header-button">
                                <button type="button" class="th-menu-toggle d-inline-block d-lg-none"><i class="far fa-bars"></i></button>
                            </div>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <div class="header-button">
                                <a href="#lead-generate-popup" class="th-btn style3 shadow-none open-popup-link">Make Appointment<i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="logo-bg"></div>
            </div>
        </div>
    </header>
