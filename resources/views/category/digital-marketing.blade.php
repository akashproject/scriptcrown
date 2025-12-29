@extends('layouts.main')
    @section('content')
    <div class="breadcumb-wrapper " data-bg-src="{{ url('assets/frontend/img/service/service-inner-banner.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="breadcumb-content py-3">
                        <ul class="breadcumb-menu">
                            <li><a href="{{ route('website') }}">Home</a></li>
                            <li>{{ $contentMain->name }}</li>
                        </ul>
                        <h1 class="breadcumb-title">{{ $contentMain->title }}</h1>
                    </div>
                    <div class="banner-content py-3">
                        <p>{{ $contentMain->excerpt }}</p>
                        <div class="swiper th-slider" id="brandSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":2.1},"576":{"slidesPerView":"2.4"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4.5"},"1400":{"slidesPerView":"4.3"}}}'>
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
            </div>
        </div>
    </div>

    <section class="service-sec space bg-white" id="service-sec" >
        <div class="brand-area bg-white space-bottom">
            <div class="container th-container5">
                <div class="title-area mb-30 text-center">
                    <h6 class="brand-title">We’ve worked on over 200 projects with 150+ clients</h6>
                </div>
                <div class="swiper th-slider" id="brandSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"5"},"1200":{"slidesPerView":"5"},"1400":{"slidesPerView":"5"}}}'>
                    <div class="swiper-wrapper">
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
                        <div class="swiper-slide">
                            <div class="brand-box1-1">
                                <img src="{{ url('assets/frontend/img/brand/brand_1_3.png') }}" alt="Brand Logo">
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
                            WHAT WE DO
                        </span>
                        <h2 class="sec-title">Comprehensive <span class="text-theme fw-normal"> Digital Marketing</span> Services</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-9 pe-xl-5">
                    <p>SC Technologies offers a full spectrum of digital marketing services designed to grow your brand and drive measurable results. From SEO, social media marketing, and email campaigns to performance marketing and content strategy, we cover every aspect of online growth. Our data-driven approach ensures every service maximizes engagement, leads, and ROI. </p>
                </div>
            </div>
            <div class="swiper th-slider" id="brandSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1.3},"576":{"slidesPerView":"1.3"},"768":{"slidesPerView":"1.3"},"900":{"slidesPerView":"2.5"},"1200":{"slidesPerView":"3"},"1366":{"slidesPerView":"4.3"},"1400":{"slidesPerView":"4.3"}}}'>
                <div class="swiper-wrapper">
                    @foreach(getServices($contentMain->id) as $value)
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
                                        {!! $value->usps !!}
                                    </div>
                                </div>
                                <div class="bg-shape">
                                    <img src="{{ url('assets/frontend/img/bg/service_box_bg.png') }}" alt="bg">
                                </div>
                            </div>
                            <div class="service-call-to-action-btn">
                                <a href="https://api.whatsapp.com/send?phone=6290565997" class="th-btn th-btn-service-mobile width-49"><i class="fab fa-whatsapp ms-2"></i> Let's Chat</a>
                                <a href="#lead-generate-popup" class="th-btn width-49  open-popup-link">Get Quote<i class="fa-regular fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="bg-auto space" data-bg-src="{{ url('assets/frontend/img/bg/testi_bg_2.png') }}">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-6 col-sm-9 pe-xl-5">
                    <div class="title-area text-center text-lg-start">
                        <span class="sub-title">
                            <div class="icon-masking me-2">
                                <span class="mask-icon" data-mask-src="{{ url('assets/frontend/img/theme-img/title_shape_2.svg') }}"></span>
                                <img src="{{ url('assets/frontend/img/theme-img/title_shape_2.svg') }}" alt="shape">
                                 Our Brand Value
                            </div>
                        </span>
                        <h2 class="sec-title">Expertise to transform business with  <span class="text-theme">Technology and Marketing</span></h2>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-9 pe-xl-5">
                    <div class="sub-description-area text-lg-start">
                        <p>We build high-performance, responsive, and visually stunning websites tailored to your business goals. From modern UI/UX design to secure backend development, we deliver scalable, SEO-friendly, and conversion-focused websites that drive growth and brand value.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="counter-area-9 overflow-hidden space-extra2" >
            <div class="container">
                <div class="row justify-content-md-between justify-content-center gy-40">
                    <div class="col-xl-auto col-sm-6">
                        <div class="counter-card6 text-center">
                            <img src="{{ url('assets/frontend/img/responsive.png') }}" alt="Clients Worlwide" class="mb-3">
                            <h3 class="box-number"><span class="counter-number">5500</span>+</h3>
                            <div class="media-body">
                                <p class=" counter-text mb-n2"> World Wide Projects Delivered </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-auto col-sm-6">
                        <div class="counter-card6 text-center">
                            <img src="{{ url('assets/frontend/img/international.png') }}" alt="Clients Worlwide" class="mb-3">
                            <h3 class="box-number"><span class="counter-number">1500</span>+</h3>
                            <div class="media-body">
                                <p class=" counter-text mb-n2">Clients Worlwide</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-auto col-sm-6">
                        <div class="counter-card6 text-center">
                            <img src="{{ url('assets/frontend/img/residential.png') }}" alt="Years In IT Industries" class="mb-3">
                            <h3 class="box-number"><span class="counter-number">15</span>+</h3>
                            <div class="media-body">
                                <p class=" counter-text mb-n2">Years In IT Industries.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-auto col-sm-6">
                        <div class="counter-card6 text-center">
                            <img src="{{ url('assets/frontend/img/leadership.png') }}" alt="Experts Team Members" class="mb-3">
                            <h3 class="box-number"><span class="counter-number">50</span>+</h3>
                            <div class="media-body">
                                <p class=" counter-text mb-n2">Experts Team Members.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service-area4 th-radius5 space" id="service-sec">
        <div class="container th-container4">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="title-area text-left">
                        <h2 class="sec-title">Our Professional {{ $contentMain->name }} Service</h2>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="title-area text-left me-xl-5 ms-xl-5">
                        <p>SC Technologies offers a complete range of digital marketing services to help your business grow online. From SEO and social media to performance marketing and video campaigns, we cover every aspect of digital strategy. Our goal is to drive engagement, leads, and measurable results for your brand.</p>
                    </div>
                </div>
            </div>
            <div class="row gy-3 justify-content-between align-items-center">
                <div class="col-md-6 col-xl-3">
                    <div class="service-box2 wow fadeInRight">
                        <div class="service-box2_shape" data-bg-src="{{ url('assets/frontend/img/shape/ser_shape_1.png') }}"></div>
                        <div class="service-box2_content">
                            <div class="service-box2_icon">
                                <img src="{{ url('assets/frontend/img/icon/service_3_1.svg') }}" alt="Icon">
                            </div>
                            <h3 class="box-title">Search Engine Optimization (SEO)</h3>
                            <p class="service-box2_text">Improve website visibility and rank higher on search engines to attract organic traffic.</p>
                            <span class="icon-btn"><i class="fa-regular fa-arrow-right"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="service-box2 wow fadeInRight">
                        <div class="service-box2_shape" data-bg-src="{{ url('assets/frontend/img/shape/ser_shape_1.png') }}"></div>
                        <div class="service-box2_content">
                            <div class="service-box2_icon">
                                <img src="{{ url('assets/frontend/img/icon/service_3_2.svg') }}" alt="Icon">
                            </div>
                            <h3 class="box-title">Pay-Per-Click (PPC) Advertising</h3>
                            <p class="service-box2_text">Drive targeted traffic and leads through paid search and display campaigns.</p>
                            <span class="icon-btn"><i class="fa-regular fa-arrow-right"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="service-box2 wow fadeInRight">
                        <div class="service-box2_shape" data-bg-src="{{ url('assets/frontend/img/shape/ser_shape_1.png') }}"></div>
                        <div class="service-box2_content">
                            <div class="service-box2_icon">
                                <img src="{{ url('assets/frontend/img/icon/service_3_3.svg') }}" alt="Icon">
                            </div>
                            <h3 class="box-title">Social Media Marketing</h3>
                            <p class="service-box2_text">Build brand awareness, engagement, and community across platforms like Facebook, Instagram, and LinkedIn.</p>
                            <span class="icon-btn"><i class="fa-regular fa-arrow-right"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="service-box2 wow fadeInRight">
                        <div class="service-box2_shape" data-bg-src="{{ url('assets/frontend/img/shape/ser_shape_1.png') }}"></div>
                        <div class="service-box2_content">
                            <div class="service-box2_icon">
                                <img src="{{ url('assets/frontend/img/icon/service_3_4.svg') }}" alt="Icon">
                            </div>
                            <h3 class="box-title">Email Marketing</h3>
                            <p class="service-box2_text">Nurture leads and retain customers with personalized, result-driven email campaigns.</p>
                            <span class="icon-btn"><i class="fa-regular fa-arrow-right"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="service-box2 ">
                        <div class="service-box2_shape" data-bg-src="{{ url('assets/frontend/img/shape/ser_shape_1.png') }}"></div>
                        <div class="service-box2_content">
                            <div class="service-box2_icon">
                                <img src="{{ url('assets/frontend/img/icon/service_3_5.svg') }}" alt="Icon">
                            </div>
                            <h3 class="box-title">Content Marketing</h3>
                            <p class="service-box2_text">Create valuable content to educate, engage, and convert your audience.</p>
                            <span class="icon-btn"><i class="fa-regular fa-arrow-right"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="service-box2">
                        <div class="service-box2_shape" data-bg-src="{{ url('assets/frontend/img/shape/ser_shape_1.png') }}"></div>
                        <div class="service-box2_content">
                            <div class="service-box2_icon">
                                <img src="{{ url('assets/frontend/img/icon/service_3_6.svg') }}" alt="Icon">
                            </div>
                            <h3 class="box-title">Affiliate Marketing</h3>
                            <p class="service-box2_text">Expand reach and sales through partnerships with affiliates and influencers.</p>
                            <span class="icon-btn"><i class="fa-regular fa-arrow-right"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="service-box2">
                        <div class="service-box2_shape" data-bg-src="{{ url('assets/frontend/img/shape/ser_shape_1.png') }}"></div>
                        <div class="service-box2_content">
                            <div class="service-box2_icon">
                                <img src="{{ url('assets/frontend/img/icon/service_3_7.svg') }}" alt="Icon">
                            </div>
                            <h3 class="box-title">Performance Marketing</h3>
                            <p class="service-box2_text">Focus on measurable results like clicks, conversions, and ROI-driven campaigns.</p>
                            <span class="icon-btn"><i class="fa-regular fa-arrow-right"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="service-box2">
                        <div class="service-box2_shape" data-bg-src="{{ url('assets/frontend/img/shape/ser_shape_1.png') }}"></div>
                        <div class="service-box2_content">
                            <div class="service-box2_icon">
                                <img src="{{ url('assets/frontend/img/icon/service_3_8.svg') }}" alt="Icon">
                            </div>
                            <h3 class="box-title">influencer Marketing</h3>
                            <p class="service-box2_text">Use engaging videos, animations, and visuals to capture attention and drive conversions.</p>
                            <span class="icon-btn"><i class="fa-regular fa-arrow-right"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-12 text-center">
                    <a href="{{ route('search-keyword') }}" class="th-btn style7 style-radius">Share your Requirement <i class="far fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-smoke" id="process-sec" data-bg-src="{{ url('assets/frontend/img/bg/process_bg_1.png') }}">
        <div class="container space  th-container4">
            <div class="title-area text-center">
                <div class="shadow-title">PROCESS</div>
                <span class="sub-title">
                    <div class="icon-masking me-2">
                        <span class="mask-icon" data-mask-src="{{ url('assets/frontend/img/theme-img/title_shape_2.svg') }}"></span>
                        <img src="{{ url('assets/frontend/img/theme-img/title_shape_2.svg') }}" alt="shape">
                    </div>
                    WORK PROCESS
                </span>
                <h2 class="sec-title">How to work <span class="text-theme">it!</span></h2>
            </div>
            <div class="process-card-area">
                <div class="process-line">
                    <img src="{{ url('assets/frontend/img/bg/process_line.svg') }}" alt="line">
                </div>
                <div class="row gy-40">
                    <div class="col-sm-6 col-xl-3 process-card-wrap">
                        <div class="process-card">
                            <div class="process-card_number">01</div>
                            <div class="process-card_icon">
                                <img src="{{ url('assets/frontend/img/icon/process_card_1.svg') }}" alt="icon">
                            </div>
                            <h2 class="box-title">Keyword Research</h2>
                            <p class="process-card_text">Identify high-impact keywords to target the right audience and drive qualified traffic.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 process-card-wrap">
                        <div class="process-card">
                            <div class="process-card_number">02</div>
                            <div class="process-card_icon">
                                <img src="{{ url('assets/frontend/img/icon/process_card_2.svg') }}" alt="icon">
                            </div>
                            <h2 class="box-title">Content Strategy</h2>
                            <p class="process-card_text">Create and optimize content aligned with business goals and search intent for maximum engagement.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 process-card-wrap">
                        <div class="process-card">
                            <div class="process-card_number">03</div>
                            <div class="process-card_icon">
                                <img src="{{ url('assets/frontend/img/icon/process_card_3.svg') }}" alt="icon">
                            </div>
                            <h2 class="box-title">Campaign Execution</h2>
                            <p class="process-card_text">Launch multi-channel marketing campaigns including SEO, PPC, social media, and email marketing to boost visibility.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 process-card-wrap">
                        <div class="process-card">
                            <div class="process-card_number">04</div>
                            <div class="process-card_icon">
                                <img src="{{ url('assets/frontend/img/icon/process_card_4.svg') }}" alt="icon">
                            </div>
                            <h2 class="box-title">Daily Optimization</h2>
                            <p class="process-card_text">Continuously monitor, analyze, and refine campaigns to achieve consistent growth and improved ROI.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service-area4 th-radius5 space" id="service-sec">
        <div class="container th-container4">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="title-area text-left">
                        <h2 class="sec-title">5 Reasons Why Industry Leaders Trust SC Technologies</h2>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="title-area text-left me-xl-5 ms-xl-5">
                        <p>Industry leaders trust SC Technologies for our proven expertise in digital marketing, data-driven strategies, and customized solutions. We deliver measurable results while maintaining transparency and performance. Our long-term partnerships ensure sustained growth and continued digital success.</p>
                    </div>
                </div>
            </div>
            <div class="row gy-3 justify-content-center">
                <div class="col-md-4">
                    <div class="service_card4 active text-left">
                        <div class="box-icon">
                            <img src="{{ url('assets/frontend/img/icon/service_7_1.svg') }}" alt="Icon">
                        </div>
                        <h3 class="box-title">Proven Digital Expertise</h3>
                        <p class="service_card4_text">Our team leverages deep knowledge in SEO, PPC, social media, content, and performance marketing to deliver measurable results.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="service_card4 active text-left">
                        <div class="box-icon">
                            <img src="{{ url('assets/frontend/img/icon/service_7_1.svg') }}" alt="Icon">
                        </div>
                        <h3 class="box-title">Data-Driven Strategies</h3>
                        <p class="service_card4_text">We use analytics and insights to craft marketing campaigns that maximize ROI and drive targeted growth.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service_card4 active text-left">
                        <div class="box-icon">
                            <img src="{{ url('assets/frontend/img/icon/service_7_1.svg') }}" alt="Icon">
                        </div>
                        <h3 class="box-title">Customized Solutions</h3>
                        <p class="service_card4_text">Every digital marketing strategy is tailored to the unique goals, audience, and industry of each client.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service_card4 active text-left">
                        <div class="box-icon">
                            <img src="{{ url('assets/frontend/img/icon/service_7_1.svg') }}" alt="Icon">
                        </div>
                        <h3 class="box-title">Performance & Transparency</h3>
                        <p class="service_card4_text">We track, report, and optimize campaigns continuously to ensure consistent improvement and accountability.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service_card4 active text-left">
                        <div class="box-icon">
                            <img src="{{ url('assets/frontend/img/icon/service_7_1.svg') }}" alt="Icon">
                        </div>
                        <h3 class="box-title">Long-Term Partnership</h3>
                        <p class="service_card4_text">We work as an extension of your team, providing ongoing support and strategic guidance to sustain digital success.</p>
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-12 text-center">
                    <a href="{{ route('search-keyword') }}" class="th-btn style7 style-radius"> Request a Project Quote <i class="far fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="position-relative overflow-hidden project-area11 space" id="project-sec">
      <div class="container th-container4">
        <div class="row justify-content-lg-between justify-content-center align-items-center">
          <div class="col-lg-6 col-sm-9 pe-xl-5">
            <div class="title-area text-center text-lg-start"><span class="sub-title sub-title8">Our Projects</span>
              <h2 class="sec-title sec-title3">Our <span class="">Recent</span> Projects</h2>
              <p class="fs-20">Unveiling the extraordinary power. delving into the exceptionally powerfull features of data analysis</p>
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
                        <h3 class="box-title">
                            <a href="{{ route('projects',$project->slug) }}">{{ $project->name }}</a>
                        </h3>
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

    <section class="bg-auto space" data-bg-src="{{ url('assets/frontend/img/bg/testi_bg_2.png') }}">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">
                    <div class="icon-masking me-2">
                        <span class="mask-icon" data-mask-src="{{ url('assets/frontend/img/theme-img/title_shape_2.svg') }}"></span>
                        <img src="{{ url('assets/frontend/img/theme-img/title_shape_2.svg') }}" alt="shape">
                    </div>
                    CUSTOMER FEEDBACK
                </span>
                <h2 class="sec-title">What Happy Clients Says <br> <span class="text-theme fw-normal"> About Us?</span></h2>
            </div>

            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="testiSlider2" data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"1"},"1200":{"slidesPerView":"2"}}}'>
                    <div class="swiper-wrapper">
                        @foreach(getTestimonials() as $value)
                        <div class="swiper-slide">
                            <div class="testi-box">
                                <div class="testi-box_img">
                                    <img src="{{ url('assets/frontend/img/testimonial/testi_2_1.jpg') }}" alt="Avater">
                                    <div class="testi-box_quote">
                                        <img src="{{ url('assets/frontend/img/icon/quote_left_2.svg') }}" alt="quote">
                                    </div>
                                </div>
                                <div class="testi-box_content">
                                    <div class="testi-box_text">{!! $value->description !!}</div>
                                    <div class="testi-box_review">
                                        @for($i = 1; $i <= $value->rating; $i++)
                                        <i class="fa-solid fa-star-sharp"></i>
                                        @endfor
                                    </div>
                                    <h3 class="box-title">{{ $value->client_name }}</h3>
                                    <p class="testi-box_desig">{{ $value->designation }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <button data-slider-prev="#testiSlider2" class="slider-arrow style3 slider-prev"><i class="far fa-arrow-left"></i></button>
                <button data-slider-next="#testiSlider2" class="slider-arrow style3 slider-next"><i class="far fa-arrow-right"></i></button>
            </div>
        </div>
        <div class="shape-mockup moving d-none d-xl-block" data-bottom="0%" data-left="10%"><img src="{{ url('assets/frontend/img/shape/line_1.png') }}" alt="shape"></div>
        <div class="shape-mockup jump d-none d-xl-block" data-top="20%" data-right="2%"><img src="{{ url('assets/frontend/img/shape/line_2.png') }}" alt="shape"></div>
    </section>

    @include('common.embedForm')

    @if($contentMain->faqs)
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
              @foreach(getFaqsById($contentMain->faqs) as $key => $value)
              <div class="accordion-card style8">
                <div class="accordion-header" id="collapse-item-{{ $key }}"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $key }}" aria-expanded="false" aria-controls="collapse-{{ $key }}">{{ $key + 2 }}. {{ $value->question }}</button></div>
                <div id="collapse-{{ $key }}" class="accordion-collapse collapse" aria-labelledby="collapse-item-{{ $key }}" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    <p class="faq-text">{!! $value->answer !!}</p>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
        <div class="row my-5">
            <div class="col-12 text-center">
                <a href="#lead-generate-popup" class="th-btn style7 style-radius open-popup-link"> Know More <i class="far fa-arrow-right ms-2"></i></a>
            </div>
        </div>
      </div>
      <div class="shape-mockup spin d-none d-xl-block" data-top="15%" data-left="5%"><img src="{{ url('/assets/frontend/img/shape/shape_11.png') }}" alt="shape"></div>
      <div class="shape-mockup movingX d-none d-xl-block" data-top="6%" data-right="10%"><img src="{{ url('/assets/frontend/img/shape/shape_12.png') }}" alt="shape"></div>
      <div class="shape-mockup movingX d-none d-xl-block" data-bottom="22%" data-left="4%"><img src="{{ url('/assets/frontend/img/shape/shape_13.png') }}" alt="shape"></div>
      <div class="shape-mockup spin d-none d-xl-block" data-top="32%" data-right="7%"><img src="{{ url('/assets/frontend/img/shape/shape_14.png') }}" alt="shape"></div>
      <div class="shape-mockup spin d-none d-xl-block" data-bottom="16%" data-right="6%"><img src="{{ url('/assets/frontend/img/shape/shape_15.png') }}" alt="shape"></div>
    </section>
    @endif
    
    @endsection
@section('script')
@endsection