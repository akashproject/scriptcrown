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
                        <h2 class="sec-title">We Provide Exclusive Service For <span class="text-theme fw-normal">Your Business</span></h2>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <a href="service.html" class="th-btn">VIEW ALL SERVICES<i class="fa-regular fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="tab-container my-4">
                <div class="tab">
                    <a > Website Development </a>
                </div>
                <div class="tab">
                    <a > Mobile App Development </a>
                </div>
                <div class="tab">
                    <a > Website Development </a>
                </div>
            </div>
            <div class="row">
                @foreach(getServices() as $value)
                <div class="col-md-4 col-lg-3 mb-3">
                    <div class="service-box">
                        <a href="{{ route('services',$value->slug) }}" class="service-box_img">
                            <img src="{{ isset($value->featured_image)?getSizedImage('',$value->featured_image):url('assets/frontend/img/service/web-development.webp') }}" alt="Icon">
                        </a>
                        <div class="service-box_content">
                            <div class="service-box_icon">
                                <img src="{{ url('assets/frontend/img/icon/service_box_1.svg') }}" alt="Icon">
                            </div>
                            <h3 class="box-title"><a href="{{ route('services',$value->slug) }}">{{ $value->name }}</a></h3>
                            <div class="service-stat">
                                <span> 100+ Projects</span>
                                <span> 100+ Projects</span>
                            </div>
                            <div class="service-stat">
                                <span> PHP </span>
                                <span>Wordpress</span>
                                <span>Laravel</span>
                                <span>HTML</span>
                                <span>CSS</span>
                                <span>Javascript</span>
                            </div>
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
                @endforeach
            </div>
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
                            </div>
                            WHAT WE DO
                        </span>
                        <h2 class="sec-title">We Provide Exclusive Service For <span class="text-theme fw-normal">Your Business</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach(getBusinesses() as $value)
                <div class="col-lg-2 mb-2">
                    <a href="" class="business-box">
                        <img src="https://dummyimage.com/200x100" ></i>
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
                <div class="col-md-3">
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
                <div class="col-md-9">
                    <div class="technogy-wrap text-center justify-conten-center">
                        @foreach(getTechnologies() as $value)
                        <div class="technogy-content mb-2">
                            <a href="" class="technology-box">
                                <div>
                                    <img src="{{ url('assets/frontend/img/tech/php.png') }}">
                                </div>
                                <div class="mx-2">
                                    <p> {{ $value->name }} </p>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
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
            <div class="sec-btn"><a href="service.html" class="th-btn btn-gradient2 style-radius">View All Projects</a></div>
          </div>
        </div>
        <div class="slider-area">
          <div class="swiper th-slider" id="projectSlider10" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"2"}}}'>
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="project-card4">
                  <div class="project-img"><img src="{{ url('assets/frontend/img/project/project_12_1.jpg') }}" alt="project image"></div>
                  <div class="project-content-wrap">
                    <div class="project-content"><span>Web Design</span><span>Web Design</span><span>Landing Page</span>
                      <h3 class="box-title"><a href="project-details.html">Finance Management Landing Page Responsive Website</a></h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="project-card4">
                  <div class="project-img"><img src="{{ url('assets/frontend/img/project/project_12_2.jpg') }}" alt="project image"></div>
                  <div class="project-content-wrap">
                    <div class="project-content"><span>Web Design</span><span>Web Design</span><span>Landing Page</span>
                      <h3 class="box-title"><a href="project-details.html">Nexacard - Digital Bank Card Responsive Page Website</a></h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="project-card4">
                  <div class="project-img"><img src="{{ url('assets/frontend/img/project/project_12_1.jpg') }}" alt="project image"></div>
                  <div class="project-content-wrap">
                    <div class="project-content"><span>Web Design</span><span>Web Design</span><span>Landing Page</span>
                      <h3 class="box-title"><a href="project-details.html">Finance Management Landing Page Responsive Website</a></h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="project-card4">
                  <div class="project-img"><img src="{{ url('assets/frontend/img/project/project_12_2.jpg') }}" alt="project image"></div>
                  <div class="project-content-wrap">
                    <div class="project-content"><span>Web Design</span><span>Web Design</span><span>Landing Page</span>
                      <h3 class="box-title"><a href="project-details.html">Nexacard - Digital Bank Card Responsive Page Website</a></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="slider-pagination text-center"></div>
          </div>
        </div>
      </div>
    </section>

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