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
                        <h1 class="breadcumb-title">About Our Company</h1>
                    </div>
                    <div class="banner-content py-3">
                        <p>SC Technologies is a technology-driven organization delivering end-to-end digital, AI, and software solutions for businesses worldwide. With a strong focus on innovation, scalability, and performance, we help organizations streamline operations, enhance customer experiences, and achieve sustainable growth through reliable and future-ready technology.</p>
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

    <div class="position-relative overflow-hidden space">
        <div class="container th-container4">
            <div class="feature-wrap9 style2">
                <div class="row gy-5 justify-content-center justify-content-lg-between align-items-center">
                    
                    <div class="col-12">
                        <div class="feature9-content pe-xl-5">
                            <h1 class="feature-content-title mb-20">OUR STORY</h1>
                            <div class="col-12 pt-20 pb-20">
                                <hr class="feature-line mt-0">
                            </div>
                            <p class="mb-0">SC Technologies was founded with a simple vision: to help businesses grow through reliable, future-ready technology. What began as a focused IT services initiative has evolved into a full-scale digital, AI, and software solutions company trusted by clients across industries. From the very beginning, our goal has been to build solutions that are not only technically strong but also aligned with real business needs.</p>
                            <p class="mb-0">As technology rapidly evolved, we grew with it. We expanded our expertise from web and mobile development into digital marketing, AI consulting, generative AI, data science, and intelligent automation. Each step in our journey was driven by one belief—technology should simplify operations, enhance customer experiences, and create measurable business value. This belief continues to shape every solution we deliver.</p>
                            <p class="mb-0">Our team brings together strategists, designers, developers, marketers, and AI specialists who collaborate closely with clients. We take time to understand business challenges, industry dynamics, and growth objectives before building solutions. This consultative, client-first approach has helped us deliver scalable, secure, and performance-driven systems that stand the test of time.</p>
                            <p class="mb-0">Today, SC Technologies partners with startups, growing enterprises, and global organizations to drive digital transformation. Whether it’s building robust platforms, launching data-driven marketing strategies, or deploying advanced AI solutions, we focus on long-term success rather than short-term wins. Transparency, quality, and continuous innovation remain at the core of our work.</p>
                            <p class="mb-0">Our story is still being written. As technologies evolve and new possibilities emerge, we remain committed to helping businesses adapt, innovate, and lead in their industries. At SC Technologies, we don’t just build technology—we build long-term partnerships that power sustainable growth.</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="overflow-hidden space" id="about-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 mb-30 mb-xl-0">
                    <div class="img-box1">
                        <div class="img1">
                            <img src="{{ url('assets/frontend/img/normal/about_1_1.png') }}" alt="About">
                        </div>
                        <div class="shape1">
                            <img src="{{ url('assets/frontend/img/normal/about_shape_1.png') }}" alt="shape">
                        </div>
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
    
    <div class="position-relative overflow-hidden space">
        <div class="container th-container4">
            <div class="feature-wrap9 style2">
                <div class="row gy-5 justify-content-center justify-content-lg-between align-items-center">
                    <div class="col-xl-6">
                        <div class="feature-thumb12_wrapp">
                            <div class="feature-thumb12-1">
                                <img src="{{ url('assets/frontend/img/who-we-are.webp') }}" alt="img">
                            </div>
                            <div class="feature-thumb12-2 movingX">
                                <img src="{{ url('assets/frontend/img/handshake.webp') }}" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="feature9-content pe-xl-5">
                            <h1 class="feature-content-title mb-20">Who We Are as an Organization</h1>
                            <p class="mb-40">SC Technologies is a full-service IT, AI, and digital solutions company delivering scalable, secure, and performance-driven technology for modern businesses. We help organizations innovate faster, optimize operations, and achieve long-term growth through reliable and future-ready solutions.</p>
                            <div class="btn-wrap">
                                <a href="#lead-generate-popup" class="th-btn style-radius text-capitalize open-popup-link">Know More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 pt-20 pb-20">
                        <hr class="feature-line mt-0">
                    </div>
                    <div class="col-xl-6 order-lg-4">
                        <div class="feature-thumb12_wrapp">
                            <div class="feature-thumb12-3">
                                <img src="{{ url('assets/frontend/img/work-station.webp') }}" alt="img">
                            </div>
                            <div class="feature-thumb12-4 movingX">
                                <img src="{{ url('assets/frontend/img/meeting.webp') }}" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="feature9-content pe-xl-5">
                            <h1 class="feature-content-title mb-20">WHAT WE DO</h1>
                            <p class="mb-40">We deliver end-to-end IT, digital, and AI solutions designed to solve complex business challenges. From strategy and development to deployment and growth, SC Technologies helps organizations build scalable, secure, and high-performance technology that drives measurable results.</p>
                            <div class="btn-wrap">
                                <a href="#lead-generate-popup" class="th-btn style-radius text-capitalize open-popup-link">Know More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="shape-mockup body-shape-content d-none d-xl-block" data-top="50%" data-right="1%">
            <h4 class="shepe-text style3">Feature</h4>
        </div>
    </div>

    <section class="team-sec space">
        <div class="container z-index-common">
            <div class="title-area text-center">
                <span class="sub-title">
                    <div class="icon-masking me-2">
                        <span class="mask-icon" data-mask-src="{{ url('assets/frontend/img/theme-img/title_shape_1.svg') }}"></span>
                        <img src="{{ url('assets/frontend/img/theme-img/title_shape_1.svg') }}" alt="shape">
                    </div>
                    TEAM MEMBER
                </span>
                <h2 class="sec-title">See Our Skilled Expert <span class="text-theme">Team</span></h2>
            </div>

            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="teamSlider2" data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="team-img">
                                    <img src="{{ url('assets/frontend/img/team/team_1_1.jpg') }}" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="box-particle" id="team-p1"></div>
                                    <div class="team-social">
                                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                        <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                    <h3 class="box-title"><a href="team-details.html">Rayan Athels</a></h3>
                                    <span class="team-desig">Founder & CEO</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="team-img">
                                    <img src="{{ url('assets/frontend/img/team/team_1_2.jpg') }}" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="box-particle" id="team-p2"></div>
                                    <div class="team-social">
                                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                        <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                    <h3 class="box-title"><a href="team-details.html">Alex Furnandes</a></h3>
                                    <span class="team-desig">Project Manager</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="team-img">
                                    <img src="{{ url('assets/frontend/img/team/team_1_3.jpg') }}" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="box-particle" id="team-p3"></div>
                                    <div class="team-social">
                                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                        <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                    <h3 class="box-title"><a href="team-details.html">Mary Crispy</a></h3>
                                    <span class="team-desig">Cheif Expert</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="team-img">
                                    <img src="{{ url('assets/frontend/img/team/team_1_4.jpg') }}" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="box-particle" id="team-p4"></div>
                                    <div class="team-social">
                                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                        <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                    <h3 class="box-title"><a href="team-details.html">Henry Joshep</a></h3>
                                    <span class="team-desig">Product Manager</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="team-img">
                                    <img src="{{ url('assets/frontend/img/team/team_1_5.jpg') }}" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="box-particle" id="team-p5"></div>
                                    <div class="team-social">
                                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                        <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                    <h3 class="box-title"><a href="team-details.html">Sanjida Carlose</a></h3>
                                    <span class="team-desig">IT Consultant</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="team-img">
                                    <img src="{{ url('assets/frontend/img/team/team_1_6.jpg') }}" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="box-particle" id="team-p6"></div>
                                    <div class="team-social">
                                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                        <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                    <h3 class="box-title"><a href="team-details.html">Marian Widjya</a></h3>
                                    <span class="team-desig">Head Manager</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="team-img">
                                    <img src="{{ url('assets/frontend/img/team/team_1_7.jpg') }}" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="box-particle" id="team-p7"></div>
                                    <div class="team-social">
                                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                        <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                    <h3 class="box-title"><a href="team-details.html">Peter Parker</a></h3>
                                    <span class="team-desig">Web Developer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="team-img">
                                    <img src="{{ url('assets/frontend/img/team/team_1_8.jpg') }}" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="box-particle" id="team-p8"></div>
                                    <div class="team-social">
                                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                        <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                    <h3 class="box-title"><a href="team-details.html">Grayson Gabriel</a></h3>
                                    <span class="team-desig">UI/UX Designer</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <button data-slider-prev="#teamSlider2" class="slider-arrow style3 slider-prev"><i class="far fa-arrow-left"></i></button>
                <button data-slider-next="#teamSlider2" class="slider-arrow style3 slider-next"><i class="far fa-arrow-right"></i></button>
            </div>
        </div>
        <div class="shape-mockup" data-bottom="0" data-left="0">
            <div class="particle-2" id="particle-2"></div>
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
    @endsection
@section('script')
@endsection