@extends('layouts.main')
    @section('content')
    <div class="th-hero-wrapper hero-15" id="hero" data-bg-src="{{ url('assets/frontend/img/bg/hero_bg_2.png') }}">
        <div class="hero-inner">
            <div class="container th-container4">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="hero-style15">
                            <h1 class="hero-title">Accelerate Your Growth with <span class="text-theme"><img src="{{ url('assets/frontend/img/ai-model.png') }}" alt="Gen AI Solution">AI Solutions</span>
                            </h1>
                            <p class="hero-text">SC Technologies We provide end-to-end web development, mobile apps, and cloud strategies to help your business scale effortlessly.</p>
                           
                            <div class="btn-group">
                                <div class="about-client-box style2 mb-sm-0 mb-3">
                                    <div class="client-thumb-group">
                                        <div class="thumb"><img src="{{ url('assets/frontend/img/testimonial/client-img-1-1.png') }}" alt="avater"></div>
                                        <div class="thumb"><img src="{{ url('assets/frontend/img/testimonial/client-img-1-2.png') }}" alt="avater"></div>
                                        <div class="thumb"><img src="{{ url('assets/frontend/img/testimonial/client-img-1-3.png') }}" alt="avater"></div>
                                    </div>
                                    <div class="cilent-box">
                                        <div class="about_review">
                                            <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                                        </div>
                                        <h4 class="cilent-box_counter"><span class="counter-number">2960</span>+ Client
                                            Reviews</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="search-group my-3">
                                <form action="{{ route('search-keyword') }}" id="search-form" method="get">
                                    <div class="search-form">
                                        <div class="search-form-input mb-2">
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" id="search_query" name="search_query" placeholder="Enter Your Name" required>
                                                <label for="search_query">What do you need?</label>
                                                <span class="search_error"></span>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            
                                        </div>
                                        <div class="search-form-btn mb-2">
                                            <button type="submit" class="th-btn form-submit-btn text-capitalize d-none d-md-block"> Find Here</button>
                                            <button type="submit" class="icon-btn icon-search text-white d-none search-sm-block"> <i class="fas fa-search mx-2"> </i></button>
                                        </div>
                                    </div>
                                    <div class="popular-search-term">
                                        <p> Popular Searchs </p>
                                        <a href="javascript:void(0)" class="search-term-list"><i class="fas fa-search mx-2"> </i>How to Build Website</a>
                                        <a href="javascript:void(0)" class="search-term-list"><i class="fas fa-search mx-2"> </i>Improve my sales</a>
                                        <a href="javascript:void(0)"class="search-term-list"><i class="fas fa-search mx-2"> </i>Build E-commerce website</a> 
                                    </div>
                                </form>
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
                <div class="swiper th-slider brand-slider8" id="brandSlider5" data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3.5"},"992":{"slidesPerView":"4.5"},"1200":{"slidesPerView":"5"},"1400":{"slidesPerView":"5"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="award-icon">
                                <div class="varified-by"> <span> Verified By </span> </div>
                                <div>
                                    <img src="{{ url('assets/frontend/img/award/clutch.webp') }}" alt="Verifed by clutch Review">
                                </div>
                                <div class="rating-stars">
                                    <span class="rating-count"> 5.0 </span> 
                                    <span> 
                                        <i class="fa-solid fa-star-sharp"></i>
                                        <i class="fa-solid fa-star-sharp"></i> 
                                        <i class="fa-solid fa-star-sharp"></i> 
                                        <i class="fa-solid fa-star-sharp"></i> 
                                        <i class="fa-solid fa-star-sharp"></i> 
                                    </span> 
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="award-icon">
                                <div class="varified-by"> <span> Verified By </span> </div>
                                <div>
                                    <img src="{{ url('assets/frontend/img/award/google.webp') }}" alt="Verifed by Google Review"  >
                                </div>
                                <div class="rating-stars">
                                    <span class="rating-count"> 5.0 </span> 
                                    <span> 
                                        <i class="fa-solid fa-star-sharp"></i>
                                        <i class="fa-solid fa-star-sharp"></i> 
                                        <i class="fa-solid fa-star-sharp"></i> 
                                        <i class="fa-solid fa-star-sharp"></i> 
                                        <i class="fa-solid fa-star-sharp"></i> 
                                    </span> 
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="award-icon">
                                <div class="varified-by"> <span> Verified By </span> </div>
                                <div>
                                    <img src="{{ url('assets/frontend/img/award/upwork.webp') }}" alt="Verifed by upwork Review" >
                                </div>
                                <div class="rating-stars">
                                    <span class="rating-count"> 5.0 </span> 
                                    <span> 
                                        <i class="fa-solid fa-star-sharp"></i>
                                        <i class="fa-solid fa-star-sharp"></i> 
                                        <i class="fa-solid fa-star-sharp"></i> 
                                        <i class="fa-solid fa-star-sharp"></i> 
                                        <i class="fa-solid fa-star-sharp"></i> 
                                    </span> 
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="award-icon">
                                <div class="varified-by"> <span> Verified By </span> </div>
                                <div>
                                    <img src="{{ url('assets/frontend/img/award/goodfirms.webp') }}" alt="Verifed by goodfirms Review" >
                                </div>
                                <div class="rating-stars">
                                    <span class="rating-count"> 5.0 </span> 
                                    <span> 
                                        <i class="fa-solid fa-star-sharp"></i>
                                        <i class="fa-solid fa-star-sharp"></i> 
                                        <i class="fa-solid fa-star-sharp"></i> 
                                        <i class="fa-solid fa-star-sharp"></i> 
                                        <i class="fa-solid fa-star-sharp"></i> 
                                    </span> 
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="award-icon">
                                <div class="varified-by"> <span> Verified By </span> </div>
                                <div>
                                    <img src="{{ url('assets/frontend/img/award/freelancer.webp') }}" alt="Verifed by freelancer Review">
                                </div>
                                <div class="rating-stars">
                                    <span class="rating-count"> 5.0 </span> 
                                    <span> 
                                        <i class="fa-solid fa-star-sharp"></i>
                                        <i class="fa-solid fa-star-sharp"></i> 
                                        <i class="fa-solid fa-star-sharp"></i> 
                                        <i class="fa-solid fa-star-sharp"></i> 
                                        <i class="fa-solid fa-star-sharp"></i> 
                                    </span> 
                                </div>
                            </div>
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
    
    <section class="service-sec space bg-white" id="service-sec" >
        <div class="brand-area bg-white space-bottom">
            <div class="container th-container5">
                <div class="title-area mb-30 text-center">
                    <h2 class="brand-title">Trusted by innovators, big and small, across 30+ countries</h2>
                </div>
                <div class="swiper th-slider" id="brandSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"4"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"6"},"1400":{"slidesPerView":"5"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="brand-box1-1">
                                <img src="{{ url('assets/frontend/img/brand/brand-logo.webp') }}" alt="Brand Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box1-1">
                                <img src="{{ url('assets/frontend/img/brand/brand-logo.webp') }}" alt="Brand Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box1-1">
                                <img src="{{ url('assets/frontend/img/brand/brand-logo.webp') }}" alt="Brand Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box1-1">
                                <img src="{{ url('assets/frontend/img/brand/brand_1_4.png') }}" alt="Brand Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box1-1">
                                <img src="{{ url('assets/frontend/img/brand/brand_1_5.png') }}" alt="Brand Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box1-1">
                                <img src="{{ url('assets/frontend/img/brand/brand_1_1.png') }}" alt="Brand Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box1-1">
                                <img src="{{ url('assets/frontend/img/brand/brand_1_2.png') }}" alt="Brand Logo">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <div class="overflow-hidden space-extra2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="usp-box row justify-content-md-between justify-content-center gy-4">
                        <div class="col-6">
                            <div class="usp-card text-center">
                                <img src="{{ url('assets/frontend/img/responsive-primary.png') }}" alt="Clients Worlwide" class="mb-1">
                                <h3 class="box-number"><span class="counter-number">5500</span>+</h3>
                                <div class="media-body">
                                    <p class=" counter-text mb-n2"> World Wide Projects Delivered </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mt-5">
                            <div class="usp-card text-center">
                                <img src="{{ url('assets/frontend/img/international-primary.png') }}" alt="Clients Worlwide" class="mb-1">
                                <h3 class="box-number"><span class="counter-number">1500</span>+</h3>
                                <div class="media-body">
                                    <p class=" counter-text mb-n2">Clients Worlwide</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mt-n6">
                            <div class="usp-card text-center">
                                <img src="{{ url('assets/frontend/img/residential-primary.png') }}" alt="Years In IT Industries" class="mb-1">
                                <h3 class="box-number"><span class="counter-number">15</span>+</h3>
                                <div class="media-body">
                                    <p class=" counter-text mb-n2">Years In IT Industries.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mt-4">
                            <div class="usp-card text-center">
                                <img src="{{ url('assets/frontend/img/leadership-primary.png') }}" alt="Experts Team Members" class="mb-1">
                                <h3 class="box-number"><span class="counter-number">50</span>+</h3>
                                <div class="media-body">
                                    <p class=" counter-text mb-n2">Experts Team Members.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="title-area text-center text-lg-start">
                        <h2 class="sec-title sec-title3">Drive <span class="">Business Growth</span> with High-Performance Mobile And Web Apps from the #1 Software Development Company</h2>
                        
                        <ul class="list-unstyled usp-list">
                            <li>
                                <h5 class="mb-0">Enhanced Customer Engagement</h5>
                                <p>We build intuitive, user-friendly apps that keep customers engaged, improve retention, and increase repeat interactions.</p>
                            </li>
                            <li>
                                <h5 class="mb-0">Process Automation & Operational Efficiency</h5>
                                <p>Custom apps streamline workflows, reduce manual tasks, and improve overall productivity, saving time and costs.</p>
                            </li>
                            <li>
                                <h5 class="mb-0">Data-Driven Insights for Smarter Decisions</h5>
                                <p>Integrated analytics help track user behavior, sales trends, and performance metrics to optimize business strategies.</p>
                            </li>
                            <li>
                                <h5 class="mb-0">Increased Revenue & Market Reach</h5>
                                <p>Mobile and web applications expand your digital presence, open new sales channels, and boost conversions globally.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <section class="service-sec space" id="service-sec" data-bg-src="{{ url('assets/frontend/img/bg/service_bg_1.png') }}">
        <div class="container-fluid">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-6 col-sm-9 pe-xl-5">
                    <div class="title-area text-center text-lg-start">
                        <span class="sub-title">
                            <div class="icon-masking me-2">
                                <span class="mask-icon" data-mask-src="{{ url('assets/frontend/img/theme-img/title_shape_2.svg') }}"></span>
                                <img src="{{ url('assets/frontend/img/theme-img/title_shape_2.svg') }}" alt="shape">
                            </div>
                            Our Tech Services
                        </span>
                        <h2 class="sec-title">Choose our expert services to elevate <span class="text-theme ">Your Business</span></h2>
                        <p>We build high-performance, responsive, and visually stunning websites tailored to your business goals. From modern UI/UX design to secure backend development, we deliver scalable, SEO-friendly, and conversion-focused websites that drive growth and brand value.</p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <a href="{{ route('page','services') }}" class="th-btn">VIEW ALL SERVICES<i class="fa-regular fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            @if(!check_device('mobile'))
            <div class="tab-container my-4">
                @foreach(getCategories() as $value)
                <div class="tab">
                    <a href="{{ route('category',$value->slug) }}" > {{ $value->name }} </a>
                </div>
                @endforeach
            </div>
            <div class="row">
                @foreach(getServicesByVisibility() as $value)
                <div class="col-md-6 col-lg-4 col-xl-3 mb-3">
                    <div class="service-box">
                        <a href="{{ route('services',$value->slug) }}" class="service-box_img">
                            <img src="{{ isset($value->featured_image)?getSizedImage('',$value->featured_image):url('assets/frontend/img/service/web-development.webp') }}" alt="Icon">
                        </a>
                        <div class="service-box_content">
                            <div class="service-box_icon">
                                <img src="{{ url('assets/frontend/img/icon/service_box_1.svg') }}" alt="Icon">
                            </div>
                            <h3 class="box-title"><a href="{{ route('services',$value->slug) }}">{{ $value->name }}</a></h3>
                            <div class="service-tag">
                                <div class="available-list">
                                    <ul>
                                        <li>Basic Modules</li>
                                        <li>Tasks, Calls, Events</li>
                                        <li>Email insights</li>
                                        <li>Sales forecasting</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bg-shape">
                                <img src="{{ url('assets/frontend/img/bg/service_box_bg.png') }}" alt="bg">
                            </div>
                        </div>
                        <div class="service-call-to-action-btn">
                            <a href="https://api.whatsapp.com/send?phone=6290565997" class="th-btn width-49"><i class="fab fa-whatsapp ms-2"></i> Chat with US</a>
                            <a href="#lead-generate-popup" class="th-btn width-49  open-popup-link">Get Quote<i class="fa-regular fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif

            @if(check_device('mobile'))
                <div class="swiper th-slider" id="brandSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1.3},"576":{"slidesPerView":"1.3"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"6"},"1400":{"slidesPerView":"5"}}}'>
                    <div class="swiper-wrapper">
                        @foreach(getServicesByVisibility() as $value)
                        <div class="swiper-slide">
                            <div class="service-box">
                                <a href="{{ route('services',$value->slug) }}" class="service-box_img">
                                    <img src="{{ isset($value->featured_image)?getSizedImage('',$value->featured_image):url('assets/frontend/img/service/web-development.webp') }}" alt="Icon">
                                </a>
                                <div class="service-box_content">
                                    <div class="service-box_icon">
                                        <img src="{{ url('assets/frontend/img/icon/service_box_1.svg') }}" alt="Icon">
                                    </div>
                                    <h3 class="box-title"><a href="{{ route('services',$value->slug) }}">{{ $value->name }}</a></h3>
                                    <div class="service-tag">
                                        <div class="available-list">
                                            <ul>
                                                <li>Basic Modules</li>
                                                <li>Tasks, Calls, Events</li>
                                                <li>Email insights</li>
                                                <li>Sales forecasting</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bg-shape">
                                        <img src="{{ url('assets/frontend/img/bg/service_box_bg.png') }}" alt="bg">
                                    </div>
                                </div>
                                <div class="service-call-to-action-btn">
                                    <a href="https://api.whatsapp.com/send?phone=6290565997" class="th-btn th-btn-service-mobile width-49"><i class="fab fa-whatsapp ms-2"></i> Chat with US</a>
                                    <a href="#lead-generate-popup" class="th-btn width-49  open-popup-link">Get Quote<i class="fa-regular fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </section>

    <section class="space" id="business-sec">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-6 col-sm-9 pe-xl-5">
                    <div class="title-area text-center text-lg-start">
                        <span class="sub-title">
                            <div class="icon-masking me-2">
                                <span class="mask-icon" data-mask-src="{{ url('assets/frontend/img/theme-img/title_shape_2.svg') }}"></span>
                                <img src="{{ url('assets/frontend/img/theme-img/title_shape_2.svg') }}" alt="shape">
                                Industry we Serve
                            </div>
                        </span>
                        <h2 class="sec-title">Select Your Business Category <span class="text-theme"></span></h2>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-9 pe-xl-5">
                    <p>We build high-performance, responsive, and visually stunning websites tailored to your business goals. From modern UI/UX design to secure backend development, we deliver scalable, SEO-friendly, and conversion-focused websites that drive growth and brand value.</p>
                </div>
            </div>
            <div class="business-box-area mt-4">
                @foreach(getBusinesses() as $value)
                <div class="business-box-wrap">
                    <a href="{{ route('business',$value->slug) }}" class="business-box">
                        <img src="{{ isset($value->featured_image)?getSizedImage('',$value->featured_image):'https://dummyimage.com/200x100' }}" ></i>
                        <h6> {{ $value->name }} </h6>
                    </a>
                </div>
                @endforeach
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

    <section class="space" id="technology-sec">
        <div class="container z-index-common">
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
                        <h2 class="sec-title">We Provide Exclusive Service For <span class="text-theme ">Your Business</span></h2>
                    </div>
                </div>
            </div>  
            <div class="row">
                <div class="col-md-5 col-lg-4 col-xl-3">
                    <div class="tech-tab-container">
                        <ul class="tech-tab">
                            @foreach(getTechTypes() as $value)
                            <li id="tech_{{ $value->id }}" class="tech-group"> <a href="javascript:void(0)" >{{ $value->name }} </a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-7 col-lg-8 col-xl-9">
                    <div class="technogy-wrap text-center">
                    @foreach(getTechTypes() as $type)
                        @foreach(getTechnologies($type->id) as $value)
                        <div class="technogy-content mb-2 tech_{{ $type->id }}">
                            <a href="{{ route('technologies',$value->slug) }}" class="technology-box">
                                <span>
                                    <img src="{{ url('assets/frontend/img/tech/'.str_replace(' ','-',strtolower($value->name)).'.png') }}">
                                </span>
                                <span class="mx-2">
                                    <p> {{ $value->name }} </p>
                                </span>
                            </a>
                        </div>
                        @endforeach
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-bottom-right position-relative" data-bg-src="{{ url('assets/frontend/img/bg/cta_bg_1.png') }}" data-bg-color="#080E1C">
        <div class="img-half img-left th-video2">
            <img src="{{ url('assets/frontend/img/normal/cta_1.webp') }}" alt="video">
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

    <section class="position-relative overflow-hidden project-area11 space" id="project-sec">
      <div class="container th-container4">
        <div class="row justify-content-lg-between justify-content-center align-items-center">
          <div class="col-lg-6 col-sm-9 pe-xl-5">
            <div class="title-area text-center text-lg-start"><span class="sub-title sub-title8">Our Projects</span>
              <h2 class="sec-title sec-title3">Our <span class="">Recent</span> Projects</h2>
              <p class="fs-20">We build high-performance, responsive, and visually stunning websites tailored to your business goals. From modern UI/UX design to secure backend development, we deliver scalable, SEO-friendly, and conversion-focused websites that drive growth and brand value.</p>
            </div>
          </div>
          <div class="col-auto">
            <div class="sec-btn"><a href="{{ route('page','projects') }}" class="th-btn btn-gradient2 style-radius">View All Projects</a></div>
          </div>
        </div>
        <div class="slider-area">
          <div class="swiper th-slider" id="projectSlider10" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1.2},"576":{"slidesPerView":"1.2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"}}}'>
            <div class="swiper-wrapper">
            @foreach(getProjects() as $project)   
              <div class="swiper-slide">
                <div class="project-card4 text-center">
                    <div class="project-img">
                        <img src="{{ isset($project->featured_image)?getSizedImage('',$project->featured_image):'assets/frontend/img/project/project_12_1.jpg' }}" alt="project image">
                    </div>
                    <div class="project-content-wrap">
                        <div class="project-content">
                        <h3 class="box-title"><a href="project-details.html">{{ $project->name }} </a></h3>
                            @if($project->service_id)
                            <div class="project-service" >
                                <ul>
                                    @foreach(getServices(null,$project->service_id) as $serve_id )
                                    <li> <a href="" >{{ $serve_id->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            @if($project->technology_id)
                            <div class="project-tech">
                                @foreach(getTechnologies(null,$project->technology_id) as $tech_id )
                                <span> {{ $tech_id->name }}</span>
                                @endforeach
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
              </div>
            @endforeach
            </div>
            <div class="slider-pagination text-center"></div>
          </div>
        </div>
      </div>
    </section>

    <div class="about-area22 position-relative space" id="about-sec" data-bg-src="{{ url('assets/frontend/img/bg/about_bg_2.jpg') }}">
        <div class="container th-container4">
        <div class="row">
            <div class="col-xl-7 mb-30 mb-xl-0 ps-xl-5">
                <div class="img-box25 me-xl-5">
                    <div class="img1"><img src="{{ url('assets/frontend/img/normal/about_23_1.jpg') }}" alt="About"></div>
                    <div class="th-experience2">
                    <h2 class="experience-year"><span class="counter-number">15</span>+</h2>
                    <p class="experience-text">Years <span>of experience</span></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="title-area mb-35 pe-xl-5 me-xl-5">
                    <span class="sub-title sub-title8">About Us</span>
                    <h2 class="sec-title sec-title3 text-white">We’re Awards winning Digtial <span class="text-white">Agency</span></h2>
                </div>
                <p class="sec-text5 mt-n2 mb-25 text-white fs-20">Webteck is an IT solution advisor and studyinng platform for high converting business.Sit sed suspendisse mattis dictumst pulvinar. Nunc parturient feugiat est ultrices.</p>
                <div class="feature-item2">
                    <div class="box-icon"><img src="{{ url('assets/frontend/img/icon/feature_5_1.svg') }}" alt="Icon"></div>
                    <div class="media-body">
                    <h3 class="box-title">120+ Our Expert Team</h3>
                    </div>
                </div>
                <div class="feature-item2">
                    <div class="box-icon"><img src="{{ url('assets/frontend/img/icon/feature_5_2.svg') }}" alt="Icon"></div>
                    <div class="media-body">
                    <h3 class="box-title">250+ Award Winning</h3>
                    </div>
                </div>
                <div class="feature-item2">
                    <div class="box-icon"><img src="{{ url('assets/frontend/img/icon/feature_5_3.svg') }}" alt="Icon"></div>
                    <div class="media-body">
                    <h3 class="box-title">300+ Transparency Supports</h3>
                    </div>
                </div>
                <div class="feature-item2">
                    <div class="box-icon"><img src="{{ url('assets/frontend/img/icon/feature_5_4.svg') }}" alt="Icon"></div>
                    <div class="media-body">
                    <h3 class="box-title">24/7 customers Support</h3>
                    </div>
                </div>
                <div class="btn-group style3 mt-40">
                    <a href="about.html" class="th-btn btn-gradient2 style-radius">Learn More</a>
                    <div class="feature-wrapper style5">
                    <div class="feature-icon"><a href="tel:+2583258235"><i class="fa-solid fa-phone"></i></a></div>
                    <div class="media-body">
                        <span class="header-info_label">Call Now!</span>
                        <p class="header-info_link"><a href="tel:+25632542598">(+256) 3254 2598</a></p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <section class="space" id="project-sec">
        <div class=" overflow-hidden space-bottom" id="service-sec">
            <div class="container th-container4">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="title-area text-center">
                            <span class="sub-title">Awesome Feature</span>
                            <h2 class="sec-title">Our Awesome app Features</h2>
                        </div>
                    </div>
                </div>
                <div class="row gy-4 justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2">
                        <div class="feature-card style2">
                            <div class="feature-card-icon">
                                <img src="{{ url('/assets/frontend/img/icon/feature_card_8_1.svg') }}" alt="icon">
                            </div>
                            <h3 class="box-title"><a href="service-details,html">Note Powerful and Security</a></h3>
                            <p class="feature-card_text">Incorporate testimonials customer reviews, or social media feeds to build trust and credibility.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2">
                        <div class="feature-card style2">
                            <div class="feature-card-icon">
                                <img src="{{ url('/assets/frontend/img/icon/feature_card_8_2.svg') }}" alt="icon">
                            </div>
                            <h3 class="box-title"><a href="service-details,html">Easy Sort, Classify and Search</a></h3>
                            <p class="feature-card_text">Testimonials incorporate customer reviews, or social media feeds to build trust and credibility.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2">
                        <div class="feature-card style2">
                            <div class="feature-card-icon">
                                <img src="{{ url('/assets/frontend/img/icon/feature_card_8_3.svg') }}" alt="icon">
                            </div>
                            <h3 class="box-title"><a href="service-details,html">Collaboration and Share</a></h3>
                            <p class="feature-card_text">Customer testimonials incorporate reviews, or social media feeds to build trust and credibility.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2">
                        <div class="feature-card style2">
                            <div class="feature-card-icon">
                                <img src="{{ url('/assets/frontend/img/icon/feature_card_8_4.svg') }}" alt="icon">
                            </div>
                            <h3 class="box-title"><a href="service-details,html">Share your Data to anyone</a></h3>
                            <p class="feature-card_text">Reviews incorporate testimonials customer, or social media feeds to build trust and credibility.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                @foreach(getTestimonials() as $value)
                                <div class="swiper-slide">
                                    <div class="testi-card">
                                        <div class="testi-card_review">
                                            @for($i = 1; $i <= $value->rating; $i++)
                                            <i class="fa-solid fa-star-sharp"></i>
                                            @endfor
                                        </div>
                                        <p class="testi-card_text"> {!! $value->description !!}</p>
                                        <div class="testi-card_profile">
                                            <div class="testi-card_avater">
                                                <img src="{{ url('assets/frontend/img/testimonial/testi_1_1.jpg') }}" alt="testimonial">
                                            </div>
                                            <div class="media-body">
                                                <h3 class="testi-card_name">{{ $value->client_name }}</h3>
                                                <span class="testi-card_desig">{{ $value->designation }}</span>
                                            </div>
                                        </div>
                                        <div class="testi-card_quote">
                                            <img src="{{ url('assets/frontend/img/icon/quote_left.svg') }}" alt="quote">
                                        </div>
                                    </div>
                                </div>
                                @endforeach
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

    @include('common.embedForm')

    <section class="faq-area th-radius5 position-relative space overflow-hidden" id="faq-sec" data-bg-src="{{ url('/assets/frontend/img/bg/faq_bg_3.jpg') }}">
      <div class="container th-container4">
        <div class="row justify-content-center">
          <div class="col-xl-7">
            <div class="title-area text-center pe-xl-4 ps-xl-4"><span class="sub-title sub-title8 style2">FAQ</span>
              <h2 class="sec-title sec-title3">Frequently <span>Asked</span> Have Any Questions?</h2>
              <p class="fs-20 pe-xl-4 ps-xl-4">Unveiling the extraordinary power. delving into the exceptionally powerfull features of data analysis</p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="accordion" id="faqAccordion">
                
              <div class="accordion-card style8">
                <div class="accordion-header" id="collapse-item-1"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">1. What services does your digital agency offer?</button></div>
                <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    <p class="faq-text">IT companies stay abreast of emerging technologies and industry trends to remain competitive and provide innovative solutions to their clients. This includes trends such as artificial intelligence.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-card style8">
                <div class="accordion-header" id="collapse-item-2"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">2. What industries do you specilize in?</button></div>
                <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    <p class="faq-text">IT companies stay abreast of emerging technologies and industry trends to remain competitive and provide innovative solutions to their clients. This includes trends such as artificial intelligence.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-card style8">
                <div class="accordion-header" id="collapse-item-3"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">3. What services does your digital agency offer?</button></div>
                <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    <p class="faq-text">IT companies stay abreast of emerging technologies and industry trends to remain competitive and provide innovative solutions to their clients. This includes trends such as artificial intelligence.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-card style8">
                <div class="accordion-header" id="collapse-item-4"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">4. What services does your digital agency offer?</button></div>
                <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    <p class="faq-text">IT companies stay abreast of emerging technologies and industry trends to remain competitive and provide innovative solutions to their clients. This includes trends such as artificial intelligence.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-card style8">
                <div class="accordion-header" id="collapse-item-5"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">5. What services does your digital agency offer?</button></div>
                <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="collapse-item-5" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    <p class="faq-text">IT companies stay abreast of emerging technologies and industry trends to remain competitive and provide innovative solutions to their clients. This includes trends such as artificial intelligence.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="shape-mockup spin d-none d-xl-block" data-top="15%" data-left="5%"><img src="{{ url('/assets/frontend/img/shape/shape_11.png') }}" alt="shape"></div>
      <div class="shape-mockup movingX d-none d-xl-block" data-top="6%" data-right="10%"><img src="{{ url('/assets/frontend/img/shape/shape_12.png') }}" alt="shape"></div>
      <div class="shape-mockup movingX d-none d-xl-block" data-bottom="22%" data-left="4%"><img src="{{ url('/assets/frontend/img/shape/shape_13.png') }}" alt="shape"></div>
      <div class="shape-mockup spin d-none d-xl-block" data-top="32%" data-right="7%"><img src="{{ url('/assets/frontend/img/shape/shape_14.png') }}" alt="shape"></div>
      <div class="shape-mockup spin d-none d-xl-block" data-bottom="16%" data-right="6%"><img src="{{ url('/assets/frontend/img/shape/shape_15.png') }}" alt="shape"></div>
    </section>

    @endsection
@section('script')
@endsection