@extends('layouts.main')
    @section('content')
    <div class="th-hero-wrapper hero-15" id="hero" data-bg-src="{{ url('assets/frontend/img/bg/hero_bg_2.png') }}">
        <div class="hero-inner">
            <div class="container th-container4">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="hero-style15">
                            <span class="sub-title">
                                <div class="icon-masking me-2">
                                    <span class="mask-icon" data-mask-src="{{ url('assets/frontend/img/theme-img/title_shape_3.svg') }}"></span>
                                    <img src="{{ url('assets/frontend/img/theme-img/title_shape_3.svg') }}" alt="shape">
                                </div>Welcome to Webteck
                            </span>
                            <h1 class="hero-title">Empowering Businesses Through <span class="text-theme">Technology</span>
                            </h1>
                            <p class="hero-text">Webteck is a leading IT agency dedicated to empowering businesses through
                                the
                                strategic
                                implementation of technology. We are passionate about helping our clients achieve their
                                goals.</p>
                            <div class="btn-group">
                                <a href="service.html" class="th-btn style-radius text-capitalize">View All Services</a>
                                <a href="about.html" class="th-btn style7 style-radius text-capitalize">Get In Touch</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="th-hero15-img">
            <div class="hero15-img" data-mask-src="{{ url('assets/frontend/img/hero/hero_shape_4.png') }}">
                <img src="{{ url('assets/frontend/img/hero/hero_img_12_1.jpg') }}" alt="">
            </div>
            <div class="hero15-shape" data-mask-src="{{ url('assets/frontend/img/hero/hero_shape_4.1.png') }}"></div>
        </div>
        <div class="brand-slider8-area">
            <div class="slider-area text-center">
                <div class="swiper th-slider brand-slider8" id="brandSlider5" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"5"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="about.html" class="brand-box style3">
                                <img src="{{ url('assets/frontend/img/brand/brand_8_1.svg') }}" alt="Brand Logo">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="about.html" class="brand-box style3">
                                <img src="{{ url('assets/frontend/img/brand/brand_8_2.svg') }}" alt="Brand Logo">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="about.html" class="brand-box style3">
                                <img src="{{ url('assets/frontend/img/brand/brand_8_3.svg') }}" alt="Brand Logo">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="about.html" class="brand-box style3">
                                <img src="{{ url('assets/frontend/img/brand/brand_8_4.svg') }}" alt="Brand Logo">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="about.html" class="brand-box style3">
                                <img src="{{ url('assets/frontend/img/brand/brand_8_5.svg') }}" alt="Brand Logo">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="about.html" class="brand-box style3">
                                <img src="{{ url('assets/frontend/img/brand/brand_8_1.svg') }}" alt="Brand Logo">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="about.html" class="brand-box style3">
                                <img src="{{ url('assets/frontend/img/brand/brand_8_2.svg') }}" alt="Brand Logo">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="about.html" class="brand-box style3">
                                <img src="{{ url('assets/frontend/img/brand/brand_8_3.svg') }}" alt="Brand Logo">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="about.html" class="brand-box style3">
                                <img src="{{ url('assets/frontend/img/brand/brand_8_4.svg') }}" alt="Brand Logo">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="about.html" class="brand-box style3">
                                <img src="{{ url('assets/frontend/img/brand/brand_8_5.svg') }}" alt="Brand Logo">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="shape-mockup movingX d-none d-xl-block" data-bottom="20%" data-left="5%"><img src="{{ url('assets/frontend/img/shape/shape_4.png') }}" alt="shape">
        </div>
        <div class="shape-mockup jump d-none d-xl-block" data-bottom="14%" data-left="45%"><img src="{{ url('assets/frontend/img/shape/shape_5.png') }}" alt="shape">
        </div>
        <div class="shape-mockup z-index-3 d-none d-xxl-block" data-top="40%" data-right="34%"><img src="{{ url('assets/frontend/img/shape/shape_6.png') }}" alt="shape">
        </div>
    </div>
    
    <section class="service-sec space" id="service-sec" data-bg-src="{{ url('assets/frontend/img/bg/service_bg_1.png') }}">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-6 col-sm-9 pe-xl-5">
                    <div class="title-area text-center text-lg-start">
                        <span class="sub-title">
                            <div class="icon-masking me-2">
                                <span class="mask-icon" data-mask-src="{{ url('assets/frontend/img/theme-img/title_shape_2.svg') }}"></span>
                                <img src="{{ url('assets/frontend/img/theme-img/title_shape_2.svg') }}" alt="shape">
                            </div>
                            WHAT WE DO
                        </span>
                        <h2 class="sec-title">We Provide Exclusive Service For <span class="text-theme fw-normal">Your Business</span></h2>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <a href="service.html" class="th-btn">VIEW ALL SERVICES<i class="fa-regular fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mb-2">
                    <div class="service-box">
                        <div class="service-box_img">
                            <img src="{{ url('assets/frontend/img/service/service_box_1.jpg') }}" alt="Icon">
                        </div>
                        <div class="service-box_content">
                            <div class="service-box_icon">
                                <img src="{{ url('assets/frontend/img/icon/service_box_1.svg') }}" alt="Icon">
                            </div>
                            <h3 class="box-title"><a href="service-details.html">Web Development</a></h3>
                            <p class="service-box_text">Intrinsicly redefine competitive e-business before adaptive.</p>
                            <a href="service-details.html" class="link-btn">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                            <div class="bg-shape">
                                <img src="{{ url('assets/frontend/img/bg/service_box_bg.png') }}" alt="bg">
                            </div>
                        </div>
                        <div class="service-call-to-action-btn">
                            <a href="service.html" class="th-btn width-49"><i class="fab fa-whatsapp ms-2"></i> Chat with US</a>
                            <a href="service.html" class="th-btn width-49">Get Quote<i class="fa-regular fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="service-box">
                        <div class="service-box_img">
                            <img src="{{ url('assets/frontend/img/service/service_box_2.jpg') }}" alt="Icon">
                        </div>
                        <div class="service-box_content">
                            <div class="service-box_icon">
                                <img src="{{ url('assets/frontend/img/icon/service_box_2.svg') }}" alt="Icon">
                            </div>
                            <h3 class="box-title"><a href="service-details.html">Android & IOS App Development</a></h3>
                            <p class="service-box_text">Intrinsicly redefine competitive e-business before adaptive.</p>
                            <a href="service-details.html" class="link-btn">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                            <div class="bg-shape">
                                <img src="{{ url('assets/frontend/img/bg/service_box_bg.png') }}" alt="bg">
                            </div>
                        </div>
                        <div class="service-call-to-action-btn">
                            <a href="service.html" class="th-btn width-49"><i class="fab fa-whatsapp ms-2"></i> Chat with US</a>
                            <a href="service.html" class="th-btn width-49">Get Quote<i class="fa-regular fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="service-box">
                        <div class="service-box_img">
                            <img src="{{ url('assets/frontend/img/service/service_box_2.jpg') }}" alt="Icon">
                        </div>
                        <div class="service-box_content">
                            <div class="service-box_icon">
                                <img src="{{ url('assets/frontend/img/icon/service_box_2.svg') }}" alt="Icon">
                            </div>
                            <h3 class="box-title"><a href="service-details.html">Software Development</a></h3>
                            <p class="service-box_text">Intrinsicly redefine competitive e-business before adaptive.</p>
                            <a href="service-details.html" class="link-btn">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                            <div class="bg-shape">
                                <img src="{{ url('assets/frontend/img/bg/service_box_bg.png') }}" alt="bg">
                            </div>
                        </div>
                        <div class="service-call-to-action-btn">
                            <a href="service.html" class="th-btn width-49"><i class="fab fa-whatsapp ms-2"></i> Chat with US</a>
                            <a href="service.html" class="th-btn width-49">Get Quote<i class="fa-regular fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="service-box">
                        <div class="service-box_img">
                            <img src="{{ url('assets/frontend/img/service/service_box_2.jpg') }}" alt="Icon">
                        </div>
                        <div class="service-box_content">
                            <div class="service-box_icon">
                                <img src="{{ url('assets/frontend/img/icon/service_box_2.svg') }}" alt="Icon">
                            </div>
                            <h3 class="box-title"><a href="service-details.html">Digital Marketing</a></h3>
                            <p class="service-box_text">Intrinsicly redefine competitive e-business before adaptive.</p>
                            <a href="service-details.html" class="link-btn">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                            <div class="bg-shape">
                                <img src="{{ url('assets/frontend/img/bg/service_box_bg.png') }}" alt="bg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="service-box">
                        <div class="service-box_img">
                            <img src="{{ url('assets/frontend/img/service/service_box_2.jpg') }}" alt="Icon">
                        </div>
                        <div class="service-box_content">
                            <div class="service-box_icon">
                                <img src="{{ url('assets/frontend/img/icon/service_box_2.svg') }}" alt="Icon">
                            </div>
                            <h3 class="box-title"><a href="service-details.html">Graphics Design</a></h3>
                            <p class="service-box_text">Intrinsicly redefine competitive e-business before adaptive.</p>
                            <a href="service-details.html" class="link-btn">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                            <div class="bg-shape">
                                <img src="{{ url('assets/frontend/img/bg/service_box_bg.png') }}" alt="bg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="service-box">
                        <div class="service-box_img">
                            <img src="{{ url('assets/frontend/img/service/service_box_2.jpg') }}" alt="Icon">
                        </div>
                        <div class="service-box_content">
                            <div class="service-box_icon">
                                <img src="{{ url('assets/frontend/img/icon/service_box_2.svg') }}" alt="Icon">
                            </div>
                            <h3 class="box-title"><a href="service-details.html">Social Media Marketing</a></h3>
                            <p class="service-box_text">Intrinsicly redefine competitive e-business before adaptive.</p>
                            <a href="service-details.html" class="link-btn">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                            <div class="bg-shape">
                                <img src="{{ url('assets/frontend/img/bg/service_box_bg.png') }}" alt="bg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="space" id="industry-sec">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-6 col-sm-9 pe-xl-5">
                    <div class="title-area text-center text-lg-start">
                        <span class="sub-title">
                            <div class="icon-masking me-2">
                                <span class="mask-icon" data-mask-src="{{ url('assets/frontend/img/theme-img/title_shape_2.svg') }}"></span>
                                <img src="{{ url('assets/frontend/img/theme-img/title_shape_2.svg') }}" alt="shape">
                            </div>
                            WHAT WE DO
                        </span>
                        <h2 class="sec-title">We Provide Exclusive Service For <span class="text-theme fw-normal">Your Business</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 mb-2">
                    <a href="" class="industry-box">
                        <i class="far fa-cart-shopping"></i>
                        <h6> Ecommerce </h6>
                    </a>
                </div>
                <div class="col-lg-2 mb-2">
                    <a href="" class="industry-box">
                        <i class="far fa-graduation-cap"></i>
                        <h6> Education </h6>
                    </a>
                </div>
                <div class="col-lg-2 mb-2">
                    <a href="" class="industry-box">
                        <i class="far fa-medkit"></i>
                        <h6> Health Care </h6>
                    </a>
                </div>
                <div class="col-lg-2 mb-2">
                    <a href="" class="industry-box">
                        <i class="far fa-female"></i>
                        <h6> Fasion & Lifestyle </h6>
                    </a>
                </div>
                <div class="col-lg-2 mb-2">
                    <a href="" class="industry-box">
                        <i class="far fa-taxi"></i>
                        <h6> Transport </h6>
                    </a>
                </div>
                <div class="col-lg-2 mb-2">
                    <a href="" class="industry-box">
                        <i class="far fa-taxi"></i>
                        <h6> Hotel & Resturent </h6>
                    </a>
                </div>
                <div class="col-lg-2 mb-2">
                    <a href="" class="industry-box">
                        <i class="far fa-home"></i>
                        <h6> Real Estate </h6>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="process-area4 th-radius3 space background-image" id="process-sec" style="background-image: url({{ url('assets/frontend/img/bg/process_bg_3.jpg') }});">
        <div class="container th-container4">
            <div class="title-area text-center">
                <span class="sub-title text-white">
                    <div class="icon-masking me-2">
                        <img src="{{ url('assets/frontend/img/theme-img/title_shape_4.1.svg') }}" alt="shape">
                    </div>
                    Working PROCES
                </span>
                <h2 class="sec-title text-white">Know Our Working Process</h2>
            </div>
            <div class="process-card-area">
                <div class="row gy-40">
                    <div class="col-md-6 col-lg-3 process-card2-wrap">
                        <div class="process-card2">
                            <div class="process-card2_number">01</div>
                            <div class="process-card2_icon">
                                <img src="{{ url('assets/frontend/img/icon/process_1_1.svg') }}" alt="icon">
                            </div>
                            <h2 class="box-title">Plan &amp; Strategize</h2>
                            <p class="process-card2_text">Leverage built-in competitor analysis tools to stay ahead of the curve</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 process-card2-wrap">
                        <div class="process-card2">
                            <div class="process-card2_number">02</div>
                            <div class="process-card2_icon">
                                <img src="{{ url('assets/frontend/img/icon/process_1_2.svg') }}" alt="icon">
                            </div>
                            <h2 class="box-title">Create &amp; Manage</h2>
                            <p class="process-card2_text">Manage all your marketing assets and campaigns from one central hub.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 process-card2-wrap">
                        <div class="process-card2">
                            <div class="process-card2_number">03</div>
                            <div class="process-card2_icon">
                                <img src="{{ url('assets/frontend/img/icon/process_1_3.svg') }}" alt="icon">
                            </div>
                            <h2 class="box-title">Optimize &amp; Analyze</h2>
                            <p class="process-card2_text">Continua scale empowered metrics with cost effective innovation.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 process-card2-wrap">
                        <div class="process-card2">
                            <div class="process-card2_number">04</div>
                            <div class="process-card2_icon">
                                <img src="{{ url('assets/frontend/img/icon/process_1_4.svg') }}" alt="icon">
                            </div>
                            <h2 class="box-title">Measure &amp; Grow</h2>
                            <p class="process-card2_text">Continua scale empowered metrics with cost effective innovation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="space">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-6 col-sm-9 pe-xl-5">
                    <div class="title-area text-center text-lg-start">
                        <span class="sub-title">
                            <div class="icon-masking me-2">
                                <span class="mask-icon" data-mask-src="{{ url('assets/frontend/img/theme-img/title_shape_2.svg') }}"></span>
                                <img src="{{ url('assets/frontend/img/theme-img/title_shape_2.svg') }}" alt="shape">
                            </div>
                            WHAT WE DO
                        </span>
                        <h2 class="sec-title">We Provide Exclusive Service For <span class="text-theme fw-normal">Your Business</span></h2>
                    </div>
                </div>
            </div>  
            <div class="row">
                <div class="col-md-4">
                    <div class="tech-tab-container">
                        <ul class="tech-tab">
                            <li> <a href="javascript:void(0)" >Website Backend </a></li>
                            <li> <a href="javascript:void(0)" >Website Frontend </a></li>
                            <li> <a href="javascript:void(0)" >Web Application </a></li>
                            <li> <a href="javascript:void(0)" >Mobile Application </a></li>
                            <li> <a href="javascript:void(0)" >Database </a></li>
                            <li> <a href="javascript:void(0)" >DevOps </a></li>
                            <li> <a href="javascript:void(0)" >Digital Marketing Tools </a></li>
                            <li> <a href="javascript:void(0)" >Creative & Design Tools </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row ">
                        <div class="col-lg-2 mb-2">
                            <a href="" class="industry-box">
                                <img src="{{ url('assets/frontend/img/tech/wordpress.png') }}">
                            </a>
                        </div>
                        <div class="col-lg-2 mb-2">
                            <a href="" class="industry-box">
                                <img src="{{ url('assets/frontend/img/tech/shopify.png') }}">
                            </a>
                        </div>
                        <div class="col-lg-2 mb-2">
                            <a href="" class="industry-box">
                                <i class="far fa-medkit"></i>
                                <h6> Health Care </h6>
                            </a>
                        </div>
                        <div class="col-lg-2 mb-2">
                            <a href="" class="industry-box">
                                <i class="far fa-female"></i>
                                <h6> Fasion & Lifestyle </h6>
                            </a>
                        </div>
                        <div class="col-lg-2 mb-2">
                            <a href="" class="industry-box">
                                <i class="far fa-taxi"></i>
                                <h6> Transport </h6>
                            </a>
                        </div>
                        <div class="col-lg-2 mb-2">
                            <a href="" class="industry-box">
                                <i class="far fa-taxi"></i>
                                <h6> Hotel & Resturent </h6>
                            </a>
                        </div>
                        <div class="col-lg-2 mb-2">
                            <a href="" class="industry-box">
                                <i class="far fa-home"></i>
                                <h6> Real Estate </h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="space" id="about-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 mb-30 mb-xl-0">
                    <div class="img-box1">
                        <div class="img1">
                            <img src="{{ url('assets/frontend/img/normal/about_1_1.png') }}" alt="About">
                        </div>
                        <!-- <div class="shape1">
                            <img src="{{ url('assets/frontend/img/normal/about_shape_1.png') }}" alt="shape">
                        </div> -->
                        <div class="year-counter">
                            <h3 class="year-counter_number"><span class="counter-number">25</span></h3>
                            <p class="year-counter_text">Years Experience</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="ps-xxl-4 ms-xl-3">
                        <div class="title-area mb-35">
                            <span class="sub-title">
                                <div class="icon-masking me-2">
                                    <span class="mask-icon" data-mask-src="{{ url('assets/frontend/img/theme-img/title_shape_1.svg') }}"></span>
                                    <img src="{{ url('assets/frontend/img/theme-img/title_shape_1.svg') }}" alt="shape">
                                </div>About Us
                            </span>
                            <h2 class="sec-title">We Are Increasing Business Success With <span class="text-theme">IT Solution</span></h2>
                        </div>
                        <p class="mt-n2 mb-25">Collaboratively envisioneer user friendly supply chains and cross unit imperative. Authoritativel fabricate competitive resource and holistic synergy. Uniquely generate efficient schemas before future.</p>
                        <div class="about-feature-wrap">
                            <div class="about-feature">
                                <div class="about-feature_icon">
                                    <img src="{{ url('assets/frontend/img/icon/about_feature_1_1.svg') }}" alt="Icon">
                                </div>
                                <div class="media-body">
                                    <h3 class="about-feature_title">Certified Company</h3>
                                    <p class="about-feature_text">Best Provide Skills Services</p>
                                </div>
                            </div>
                            <div class="about-feature">
                                <div class="about-feature_icon">
                                    <img src="{{ url('assets/frontend/img/icon/about_feature_1_2.svg') }}" alt="Icon">
                                </div>
                                <div class="media-body">
                                    <h3 class="about-feature_title">Expart Team</h3>
                                    <p class="about-feature_text">100% Expert Team</p>
                                </div>
                            </div>
                        </div>
                        <div class="btn-group">
                            <a href="about.html" class="th-btn">DISCOVER MORE<i class="fa-regular fa-arrow-right ms-2"></i></a>
                            <div class="call-btn">
                                <div class="play-btn">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="media-body">
                                    <span class="btn-text">Call Us On:</span>
                                    <a href="tel:+19088000393" class="btn-title">+190-8800-0393</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="bg-bottom-right position-relative" data-bg-src="{{ url('assets/frontend/img/bg/cta_bg_1.png') }}" data-bg-color="#080E1C">
        <div class="img-half img-left th-video2">
            <img src="{{ url('assets/frontend/img/normal/cta_1.jpg') }}" alt="video">
            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video"><i class="fas fa-play"></i></a>
        </div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-5 space">
                    <div class="title-area mb-35">
                        <span class="sub-title">
                            <div class="icon-masking me-2">
                                <span class="mask-icon" data-mask-src="{{ url('assets/frontend/img/theme-img/title_shape_1.svg') }}"></span>
                                <img src="{{ url('assets/frontend/img/theme-img/title_shape_1.svg') }}" alt="shape">
                            </div>
                            GET BEST IT SOLUTION 2024
                        </span>
                        <h2 class="sec-title text-white">We Help Businesses To Achieve Their <span class="text-theme">Objectives</span></h2>
                    </div>
                    <p class="mt-n2 mb-30 text-white">Authoritatively build ubiquitous models vis-a-vis fully tested mindshare. Conveniently repurpose user friendly paradigms vis-a-vis out-of-the-box portals. Dramatically matrix magnetic schemas for extensive methodologies. Credibly.</p>
                    <a href="about.html" class="th-btn style3">DISCOVER MORE<i class="fa-regular fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
        <div class="shape-mockup" data-bottom="0" data-right="0">
            <div class="particle-1" id="particle-1"></div>
        </div>
    </section>  

    <div class="space-top" data-bg-src="{{ url('assets/frontend/img/bg/why_bg_1.png') }}">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-xxl-7 col-xl-6 mb-30 mb-xl-0">
                    <div class="img-box2">
                        <div class="img1">
                            <img src="{{ url('assets/frontend/img/normal/why_1_1.jpg') }}" alt="Why">
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-6">
                    <div class="title-area mb-35">
                        <span class="sub-title">
                            <div class="icon-masking me-2">
                                <span class="mask-icon" data-mask-src="{{ url('assets/frontend/img/theme-img/title_shape_1.svg') }}"></span>
                                <img src="{{ url('assets/frontend/img/theme-img/title_shape_1.svg') }}" alt="shape">
                            </div>
                            WHY CHOOSE US
                        </span>
                        <h2 class="sec-title">We Deal With The Aspects Professional <span class="text-theme">IT Services</span></h2>
                    </div>
                    <p class="mt-n2 mb-30">Collaboratively envisioneer user friendly supply chains and cross unit imperative. Authoritativel fabricate competitive resource and holistic.</p>
                    <div class="two-column">
                        <div class="checklist style2">
                            <ul>
                                <li><i class="far fa-check"></i> Big Data Analysis</li>
                                <li><i class="far fa-check"></i> 24/7 Online Support</li>
                                <li><i class="far fa-check"></i> Business Improvement</li>
                            </ul>
                        </div>
                        <div class="checklist style2">
                            <ul>
                                <li><i class="far fa-check"></i> High Quality Sicurity</li>
                                <li><i class="far fa-check"></i> 24/7 Support Team</li>
                                <li><i class="far fa-check"></i> Easy Solutions</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="space-top" data-pos-for=".team-sec" data-sec-pos="bottom-half">
        <div class="container z-index-common">
            <div class="counter-card-wrap" data-bg-src="{{ url('assets/frontend/img/bg/counter_bg_2.png') }}">
                <div class="row gy-40 justify-content-between">
                    <div class="col-6 col-lg-auto">
                        <div class="counter-card">
                            <div class="counter-card_icon">
                                <img src="{{ url('assets/frontend/img/icon/counter_1_1.svg') }}" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h2 class="counter-card_number"><span class="counter-number">986</span>+</h2>
                                <p class="counter-card_text">Finished Project</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-auto">
                        <div class="counter-card">
                            <div class="counter-card_icon">
                                <img src="{{ url('assets/frontend/img/icon/counter_1_2.svg') }}" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h2 class="counter-card_number"><span class="counter-number">896</span>+</h2>
                                <p class="counter-card_text">Happy Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-auto">
                        <div class="counter-card">
                            <div class="counter-card_icon">
                                <img src="{{ url('assets/frontend/img/icon/counter_1_3.svg') }}" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h2 class="counter-card_number"><span class="counter-number">396</span>+</h2>
                                <p class="counter-card_text">Skilled Experts</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-auto">
                        <div class="counter-card">
                            <div class="counter-card_icon">
                                <img src="{{ url('assets/frontend/img/icon/counter_1_4.svg') }}" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h2 class="counter-card_number"><span class="counter-number">496</span>+</h2>
                                <p class="counter-card_text">Honorable Awards</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="space" id="project-sec">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-5 mb-n2 mb-lg-0">
                    <div class="title-area text-center text-lg-start">
                        <span class="sub-title">
                            <div class="icon-masking me-2">
                                <span class="mask-icon" data-mask-src="{{ url('assets/frontend/img/theme-img/title_shape_1.svg') }}"></span>
                                <img src="{{ url('assets/frontend/img/theme-img/title_shape_1.svg') }}" alt="shape">
                            </div>LATEST PROJECT
                        </span>
                        <h2 class="sec-title">See We Have Solution <br> Done <span class="text-theme">IT Projects</span></h2>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <a href="project.html" class="th-btn">VIEW ALL PORJECTS<i class="fa-regular fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div> <!-- / Title row -->
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="projectSlider1" data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="project-card">
                                <div class="project-img">
                                    <img src="{{ url('assets/frontend/img/project/project_1_1.jpg') }}" alt="project image">
                                </div>
                                <div class="project-content-wrap">
                                    <div class="project-content">
                                        <div class="box-particle" id="project-p1"></div>
                                        <h3 class="box-title"><a href="project-details.html">IT Consultency</a></h3>
                                        <p class="project-subtitle">Technology</p>
                                        <a href="{{ url('assets/frontend/img/project/project_1_1.jpg') }}" class="icon-btn popup-image"><i class="far fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="project-card">
                                <div class="project-img">
                                    <img src="{{ url('assets/frontend/img/project/project_1_2.jpg') }}" alt="project image">
                                </div>
                                <div class="project-content-wrap">
                                    <div class="project-content">
                                        <div class="box-particle" id="project-p2"></div>
                                        <h3 class="box-title"><a href="project-details.html">Web Development</a></h3>
                                        <p class="project-subtitle">Technology</p>
                                        <a href="{{ url('assets/frontend/img/project/project_1_2.jpg') }}" class="icon-btn popup-image"><i class="far fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="project-card">
                                <div class="project-img">
                                    <img src="{{ url('assets/frontend/img/project/project_1_3.jpg') }}" alt="project image">
                                </div>
                                <div class="project-content-wrap">
                                    <div class="project-content">
                                        <div class="box-particle" id="project-p3"></div>
                                        <h3 class="box-title"><a href="project-details.html">Website Design</a></h3>
                                        <p class="project-subtitle">Technology</p>
                                        <a href="{{ url('assets/frontend/img/project/project_1_3.jpg') }}" class="icon-btn popup-image"><i class="far fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="project-card">
                                <div class="project-img">
                                    <img src="{{ url('assets/frontend/img/project/project_1_4.jpg') }}" alt="project image">
                                </div>
                                <div class="project-content-wrap">
                                    <div class="project-content">
                                        <div class="box-particle" id="project-p4"></div>
                                        <h3 class="box-title"><a href="project-details.html">SEO Optimization</a></h3>
                                        <p class="project-subtitle">Marketing</p>
                                        <a href="{{ url('assets/frontend/img/project/project_1_4.jpg') }}" class="icon-btn popup-image"><i class="far fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="project-card">
                                <div class="project-img">
                                    <img src="{{ url('assets/frontend/img/project/project_1_5.jpg') }}" alt="project image">
                                </div>
                                <div class="project-content-wrap">
                                    <div class="project-content">
                                        <div class="box-particle" id="project-p5"></div>
                                        <h3 class="box-title"><a href="project-details.html">Digital Marketing</a></h3>
                                        <p class="project-subtitle">Marketing</p>
                                        <a href="{{ url('assets/frontend/img/project/project_1_5.jpg') }}" class="icon-btn popup-image"><i class="far fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="project-card">
                                <div class="project-img">
                                    <img src="{{ url('assets/frontend/img/project/project_1_6.jpg') }}" alt="project image">
                                </div>
                                <div class="project-content-wrap">
                                    <div class="project-content">
                                        <div class="box-particle" id="project-p6"></div>
                                        <h3 class="box-title"><a href="project-details.html">Business Analysis</a></h3>
                                        <p class="project-subtitle">Business</p>
                                        <a href="{{ url('assets/frontend/img/project/project_1_6.jpg') }}" class="icon-btn popup-image"><i class="far fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="project-card">
                                <div class="project-img">
                                    <img src="{{ url('assets/frontend/img/project/project_1_7.jpg') }}" alt="project image">
                                </div>
                                <div class="project-content-wrap">
                                    <div class="project-content">
                                        <div class="box-particle" id="project-p7"></div>
                                        <h3 class="box-title"><a href="project-details.html">Software Service</a></h3>
                                        <p class="project-subtitle">Technology</p>
                                        <a href="{{ url('assets/frontend/img/project/project_1_7.jpg') }}" class="icon-btn popup-image"><i class="far fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="project-card">
                                <div class="project-img">
                                    <img src="{{ url('assets/frontend/img/project/project_1_8.jpg') }}" alt="project image">
                                </div>
                                <div class="project-content-wrap">
                                    <div class="project-content">
                                        <div class="box-particle" id="project-p8"></div>
                                        <h3 class="box-title"><a href="project-details.html">Data Recovery</a></h3>
                                        <p class="project-subtitle">Technology</p>
                                        <a href="{{ url('assets/frontend/img/project/project_1_8.jpg') }}" class="icon-btn popup-image"><i class="far fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="project-card">
                                <div class="project-img">
                                    <img src="{{ url('assets/frontend/img/project/project_1_9.jpg') }}" alt="project image">
                                </div>
                                <div class="project-content-wrap">
                                    <div class="project-content">
                                        <div class="box-particle" id="project-p9"></div>
                                        <h3 class="box-title"><a href="project-details.html">Cloud Computing</a></h3>
                                        <p class="project-subtitle">Technology</p>
                                        <a href="{{ url('assets/frontend/img/project/project_1_9.jpg') }}" class="icon-btn popup-image"><i class="far fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <button data-slider-prev="#projectSlider1" class="slider-arrow style3 slider-prev"><i class="far fa-arrow-left"></i></button>
                <button data-slider-next="#projectSlider1" class="slider-arrow style3 slider-next"><i class="far fa-arrow-right"></i></button>
            </div>
        </div>
        <div class="shape-mockup" data-top="0%" data-right="0%"><img src="{{ url('assets/frontend/img/shape/tech_shape_1.png') }}" alt="shape"></div>
        <div class="shape-mockup" data-bottom="0%" data-left="0%"><img src="{{ url('assets/frontend/img/shape/tech_shape_2.png') }}" alt="shape"></div>
    </section>

    <section class="overflow-hidden space" data-bg-src="{{ url('assets/frontend/img/bg/testi_bg_1.jpg') }}" data-overlay="overlay1" data-opacity="9">
        <div class="container z-index-common">
            <div class="row align-items-center">
                <div class="col-xl-5">
                    <div class="pe-xxl-5 text-xl-start text-center">
                        <div class="title-area mb-35">
                            <span class="sub-title">
                                <div class="icon-masking me-2">
                                    <span class="mask-icon" data-mask-src="{{ url('assets/frontend/img/theme-img/title_shape_1.svg') }}"></span>
                                    <img src="{{ url('assets/frontend/img/theme-img/title_shape_1.svg') }}" alt="shape">
                                </div>
                                TESTIMONIALS
                            </span>
                            <h2 class="sec-title text-white">Let’s Here What Are The Customer <span class="text-theme">Saying</span></h2>
                        </div>
                        <p class="mt-n2 mb-35 text-white">Appropriately envisioneer leveraged information through 2.0 communities. Synergistically parallel task inexpensive products whereas cross-media ideas.</p>
                        <a href="about.html" class="th-btn style3 shadow-none">VIEW MORE<i class="fa-regular fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-xl-7 mt-40 mt-xl-0">
                    <div class="testi-card-area slider-area">
                        <div class="swiper testi-card-slide th-slider" id="testiSlide1" data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"1"},"1200":{"slidesPerView":"1"}}}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testi-card">
                                        <div class="testi-card_review">
                                            <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i>
                                        </div>
                                        <p class="testi-card_text">“Phosfluorescently reinvent prospective metrics before granular schema. Professionally metrics before expedite client-centric methods of empow ment whereas effective solut ion.”</p>
                                        <div class="testi-card_profile">
                                            <div class="testi-card_avater">
                                                <img src="{{ url('assets/frontend/img/testimonial/testi_1_1.jpg') }}" alt="testimonial">
                                            </div>
                                            <div class="media-body">
                                                <h3 class="testi-card_name">Alex Farnandes</h3>
                                                <span class="testi-card_desig">UI/UX Designer</span>
                                            </div>
                                        </div>
                                        <div class="testi-card_quote">
                                            <img src="{{ url('assets/frontend/img/icon/quote_left.svg') }}" alt="quote">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-card">
                                        <div class="testi-card_review">
                                            <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i>
                                        </div>
                                        <p class="testi-card_text">“Dnosflu orescent reinvent prospective metrics before granular schema. Professionally metrics before expedite client-centric methods of empow ment whereas effective coverless.”</p>
                                        <div class="testi-card_profile">
                                            <div class="testi-card_avater">
                                                <img src="{{ url('assets/frontend/img/testimonial/testi_1_2.jpg') }}" alt="testimonial">
                                            </div>
                                            <div class="media-body">
                                                <h3 class="testi-card_name">Mariana Sonia</h3>
                                                <span class="testi-card_desig">CEO at Corola</span>
                                            </div>
                                        </div>
                                        <div class="testi-card_quote">
                                            <img src="{{ url('assets/frontend/img/icon/quote_left.svg') }}" alt="quote">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-card">
                                        <div class="testi-card_review">
                                            <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i>
                                        </div>
                                        <p class="testi-card_text">“The best service reinvent prospective metrics before granular schema. Professionally metrics before expedite client-centric methods of empow ment whereas effective turnings.”</p>
                                        <div class="testi-card_profile">
                                            <div class="testi-card_avater">
                                                <img src="{{ url('assets/frontend/img/testimonial/testi_1_3.jpg') }}" alt="testimonial">
                                            </div>
                                            <div class="media-body">
                                                <h3 class="testi-card_name">Abraham Khalil</h3>
                                                <span class="testi-card_desig">UI/UX Designer</span>
                                            </div>
                                        </div>
                                        <div class="testi-card_quote">
                                            <img src="{{ url('assets/frontend/img/icon/quote_left.svg') }}" alt="quote">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-card">
                                        <div class="testi-card_review">
                                            <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i>
                                        </div>
                                        <p class="testi-card_text">“Five star he reinvent prospective metrics before granular schema. Professionally metrics before expedite client-centric methods of empow ment whereas effective gotoning.”</p>
                                        <div class="testi-card_profile">
                                            <div class="testi-card_avater">
                                                <img src="{{ url('assets/frontend/img/testimonial/testi_1_4.jpg') }}" alt="testimonial">
                                            </div>
                                            <div class="media-body">
                                                <h3 class="testi-card_name">Alexa Jenifer</h3>
                                                <span class="testi-card_desig">CEO at Morosto</span>
                                            </div>
                                        </div>
                                        <div class="testi-card_quote">
                                            <img src="{{ url('assets/frontend/img/icon/quote_left.svg') }}" alt="quote">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="testi-thumb-wrap">
                            <div class="testi-thumb testi-card-tab" data-slider-tab="#testiSlide1">
                                <div class="tab-btn active">
                                    <img src="{{ url('assets/frontend/img/testimonial/testi_1_1.jpg') }}" alt="Image">
                                </div>
                                <div class="tab-btn">
                                    <img src="{{ url('assets/frontend/img/testimonial/testi_1_2.jpg') }}" alt="Image">
                                </div>
                                <div class="tab-btn">
                                    <img src="{{ url('assets/frontend/img/testimonial/testi_1_3.jpg') }}" alt="Image">
                                </div>
                                <div class="tab-btn">
                                    <img src="{{ url('assets/frontend/img/testimonial/testi_1_4.jpg') }}" alt="Image">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="space" id="contact-sec" data-bg-src="{{ url('assets/frontend/img/bg/appointment_bg_1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 pe-xxl-5 mb-40 mb-xl-0">
                    <div class="title-area mb-35 text-xl-start text-center">
                        <span class="sub-title">
                            <div class="icon-masking me-2">
                                <span class="mask-icon" data-mask-src="{{ url('assets/frontend/img/theme-img/title_shape_1.svg') }}"></span>
                                <img src="{{ url('assets/frontend/img/theme-img/title_shape_1.svg') }}" alt="shape">
                            </div>
                            APPOINTMENT NOW
                        </span>
                        <h2 class="sec-title">We're Ready to Talk About Your <span class="text-theme">Opportunities</span></h2>
                    </div>
                    <p class="mt-n2 mb-30 text-xl-start text-center">Progressively morph principle-centered e-markets without an expanded array of opportunities. Conveniently incubate e-tailers for extensive leadership skills. Holisticly extend leading-edge vortals vis-a-vis 24/7 e-markets. Appropriately evolve efficient functionalities with installed base relationships.</p>
                    <div class="contact-feature-wrap">
                        <div class="contact-feature">
                            <div class="icon-btn">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="media-body">
                                <p class="contact-feature_label">Call Us On:</p>
                                <a href="tel:+19088000393" class="contact-feature_link">+190-8800-0393</a>
                            </div>
                        </div>
                        <div class="contact-feature">
                            <div class="icon-btn">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="media-body">
                                <p class="contact-feature_label">Quick Mail Us:</p>
                                <a href="mailto:info@webteck.com" class="contact-feature_link">info@webteck.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 ps-xl-4">
                    <h3 class="h4 mt-n2 mb-30 text-center">Make An Appointment</h3>
                    <form action="mail.php" method="POST" class="appoitment-form ajax-contact">
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name">
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email">
                            </div>
                            <div class="form-group col-sm-6">
                                <select name="subject" id="subject" class="form-select">
                                    <option value="" disabled selected hidden>Select Subject</option>
                                    <option value="IT Consult">IT Consult</option>
                                    <option value="UI/UX Design">UI/UX Design</option>
                                    <option value="Branding Solution">Branding Solution</option>
                                    <option value="Product Marketing">Product Marketing</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="tel" class="form-control" name="number" id="number" placeholder="Phone Number">
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Write Your Message"></textarea>
                            </div>
                            <div class="form-btn col-12">
                                <button class="th-btn w-100">MAKE AN APPOINTMENT</button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
@section('script')
@endsection