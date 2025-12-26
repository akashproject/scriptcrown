<footer class="footer-wrapper footer-layout1">
    <div class="footer-top">
        <div class="logo-bg"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3">
                    <div class="footer-logo">
                        <a class="icon-masking" href="{{ url('/') }}"><span data-mask-src="{{ url('/assets/logo/logo.png') }}" class="mask-icon"></span><img src="{{ url('/assets/logo/logo.png') }}" alt="Webteck"></a>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="footer-contact-wrap">
                        <div class="footer-contact">
                            <div class="footer-contact_icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="media-body">
                                <span class="footer-contact_text">Quick Call Us:</span>
                                <a href="tel:{{ get_theme_setting('mobile') }}" class="footer-contact_link">{{ get_theme_setting('mobile') }}</a>
                            </div>
                        </div>
                        <div class="footer-contact">
                            <div class="footer-contact_icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="media-body">
                                <span class="footer-contact_text">Mail Us On:</span>
                                <a href="mailto:{{ get_theme_setting('email') }}" class="footer-contact_link">{{ get_theme_setting('email') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="widget-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 col-xxl-3 col-xl-4">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">About Company</h3>
                        <div class="th-widget-about">
                            <p class="about-text">Professionally redefine transparent ROI through low-risk high-yield imperatives. Progressively create empowered. cost effective users via team driven.</p>
                            <div class="th-social">
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                                <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Quick Links</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                @foreach($footerMenu as $menu)
                                <li><a href="{{ url($menu['url']) }}">{{ $menu['name'] }}</a></li>
                                @endforeach 
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">OUR SERVICES</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                @foreach(getCategories() as $key => $category)
                                <li><a href="{{ route('category',$category->slug) }}"> {{ $category->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Recent Posts</h3>
                        <div class="recent-post-wrap">
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="javascript:void(0)"><img src="assets/frontend/img/blog/recent-post-2-1.jpg" alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="javascript:void(0)">Unsatiable entreaties may collecting Power.</a></h4>
                                    <div class="recent-post-meta">
                                        <a href="javascript:void(0)"><i class="fal fa-calendar-days"></i>21 June, 2025</a>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="javascript:void(0)"><img src="assets/frontend/img/blog/recent-post-2-2.jpg" alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="javascript:void(0)">Regional Manager limited time management.</a></h4>
                                    <div class="recent-post-meta">
                                        <a href="javascript:void(0)"><i class="fal fa-calendar-days"></i>22 June, 2025</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap bg-title">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2025 SC Technologies. All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 text-end d-none d-lg-block">
                    <div class="footer-links">
                        <ul>
                            <li><a href="{{ route('page','terms-condition') }}">Terms & Condition</a></li>
                            <li><a href="{{ route('page','careers') }}">Careers</a></li>
                            <li><a href="{{ route('page','privacy-policy') }}">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-left">
        <img src="assets/frontend/img/shape/footer_shape_2.svg" alt="shape">
    </div>
    <div class="shape-right">
        <div class="particle-1" id="particle-5"></div>
    </div>
</footer>
@if(!check_device('desktop'))
<div class="footer-menu">
    <div class="container">
        <ul>
            <li>
                <a href="{{ route('website') }}"><i class="fa fa-home"></i> <span>  Home </span></a>
            </li>
            <li>
                <a href="{{ route('page','services') }}"><i class="fa fa-handshake"></i> <span>  Services </span> </a>
            </li>
            <li>
                <a href="{{ route('page','industries') }}" ><i class="fa fa-building"></i> <span>  Industries </span> </a>
            </li>
            <li>
                <a href="https://api.whatsapp.com/send?phone=6290565997"><i class="fab fa-whatsapp text-green"></i> <span>  Whatsapp </span></a>
            </li>
            <li><a href="#" class="th-menu-toggle"><i class="far fa-bars"></i><span>  Menu </span></a> </li>
        </ul>
    </div>
</div>
@endif