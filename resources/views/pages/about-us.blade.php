@extends('layouts.main')
    @section('content')
     <div class="breadcumb-wrapper " data-bg-src="{{ url('assets/frontend/img/service/service-inner-banner.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="breadcumb-content py-3">
                        <ul class="breadcumb-menu">
                            <li><a href="index.html">Home</a></li>
                            <li>{{ $contentMain->name }}</li>
                        </ul>
                        <h1 class="breadcumb-title">Custom {{ $contentMain->name }} Solutions That Drive Results</h1>
                    </div>
                    <div class="banner-content py-3">
                        <p>We build high-quality, responsive, and user-friendly websites tailored to your business needs. From modern UI/UX design to powerful backend development, our team delivers fast, secure, and scalable web solutions that help you grow your online presence and convert visitors into customers.</p>
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
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="title-area text-center">
                        <span class="sub-title">our Feature</span>
                        <h2 class="sec-title">Explore the defining attributes</h2>
                    </div>
                </div>
            </div>
            <div class="feature-wrap9 style2">
                <div class="row gy-5 justify-content-center justify-content-lg-between align-items-center">
                    <div class="col-xl-6">
                        <div class="feature-thumb12_wrapp">
                            <div class="feature-thumb12-1">
                                <img src="{{ url('assets/frontend/img/normal/feature-img-12-1.png') }}" alt="img">
                            </div>
                            <div class="feature-thumb12-2 movingX">
                                <img src="{{ url('assets/frontend/img/normal/feature-img-12-2.png') }}" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="feature9-content pe-xl-5">
                            <h1 class="feature-content-title mb-20">Comprehensive Analytics Integration</h1>
                            <p class="mb-40">We seamlessly integrate industry-leading analytics tools like Google Analytics
                                to track website traffic, user behavior, and conversions.We seamlessly integrate
                                industry-leading analytics tools like Google Analytics to track website traffic.</p>
                            <div class="btn-wrap">
                                <a href="about.html" class="th-btn style-radius text-capitalize">view details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 pt-20 pb-20">
                        <hr class="feature-line mt-0">
                    </div>
                    <div class="col-xl-6 order-lg-4">
                        <div class="feature-thumb12_wrapp">
                            <div class="feature-thumb12-3">
                                <img src="{{ url('assets/frontend/img/normal/feature-img-12-3.png') }}" alt="img">
                            </div>
                            <div class="feature-thumb12-4 movingX">
                                <img src="{{ url('assets/frontend/img/normal/feature-img-12-4.png') }}" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="feature9-content pe-xl-5">
                            <h1 class="feature-content-title mb-20">Tailored reports for diverse analytical needs</h1>
                            <p class="mb-40">Creating captivating content that resonates with target audiences, while
                                strategically aligning with brand objectives and values. Utilizing data-driven insights to
                                optimize content performance and drive meaningful audience interactions.</p>
                            <div class="btn-wrap">
                                <a href="about.html" class="th-btn style-radius text-capitalize">view details</a>
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
    </section><!--==============================
Counter Area  
==============================-->
    <div class="bg-theme space-extra" data-bg-src="{{ url('assets/frontend/img/bg/counter_bg_1.png') }}">
        <div class="container py-2">
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
    </div><!--==============================
Feature Area  
==============================-->
    <div class="space" data-bg-src="{{ url('assets/frontend/img/bg/why_bg_1.png') }}">
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
                        <div class="swiper-slide">
                            <div class="testi-box">
                                <div class="testi-box_img">
                                    <img src="{{ url('assets/frontend/img/testimonial/testi_2_1.jpg') }}" alt="Avater">
                                    <div class="testi-box_quote">
                                        <img src="{{ url('assets/frontend/img/icon/quote_left_2.svg') }}" alt="quote">
                                    </div>
                                </div>
                                <div class="testi-box_content">
                                    <p class="testi-box_text">Objectively visualize error-free technology for B2B alignment. Monotonectally harness an expanded array of models via effective collaboration.</p>
                                    <div class="testi-box_review">
                                        <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i>
                                    </div>
                                    <h3 class="box-title">David Farnandes</h3>
                                    <p class="testi-box_desig">CEO at Anaton</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-box">
                                <div class="testi-box_img">
                                    <img src="{{ url('assets/frontend/img/testimonial/testi_2_2.jpg') }}" alt="Avater">
                                    <div class="testi-box_quote">
                                        <img src="{{ url('assets/frontend/img/icon/quote_left_2.svg') }}" alt="quote">
                                    </div>
                                </div>
                                <div class="testi-box_content">
                                    <p class="testi-box_text">Objectively visualize error-free technology for B2B alignment. Monotonectally harness an expanded array of models via effective collaboration.</p>
                                    <div class="testi-box_review">
                                        <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i>
                                    </div>
                                    <h3 class="box-title">Jackline Techie</h3>
                                    <p class="testi-box_desig">CEO at Kormola</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-box">
                                <div class="testi-box_img">
                                    <img src="{{ url('assets/frontend/img/testimonial/testi_2_3.jpg') }}" alt="Avater">
                                    <div class="testi-box_quote">
                                        <img src="{{ url('assets/frontend/img/icon/quote_left_2.svg') }}" alt="quote">
                                    </div>
                                </div>
                                <div class="testi-box_content">
                                    <p class="testi-box_text">Objectively visualize error-free technology for B2B alignment. Monotonectally harness an expanded array of models via effective collaboration.</p>
                                    <div class="testi-box_review">
                                        <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i>
                                    </div>
                                    <h3 class="box-title">Abraham Khalil</h3>
                                    <p class="testi-box_desig">CEO at Rimasu</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-box">
                                <div class="testi-box_img">
                                    <img src="{{ url('assets/frontend/img/testimonial/testi_2_1.jpg') }}" alt="Avater">
                                    <div class="testi-box_quote">
                                        <img src="{{ url('assets/frontend/img/icon/quote_left_2.svg') }}" alt="quote">
                                    </div>
                                </div>
                                <div class="testi-box_content">
                                    <p class="testi-box_text">Objectively visualize error-free technology for B2B alignment. Monotonectally harness an expanded array of models via effective collaboration.</p>
                                    <div class="testi-box_review">
                                        <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i>
                                    </div>
                                    <h3 class="box-title">David Farnandes</h3>
                                    <p class="testi-box_desig">CEO at Anaton</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-box">
                                <div class="testi-box_img">
                                    <img src="{{ url('assets/frontend/img/testimonial/testi_2_2.jpg') }}" alt="Avater">
                                    <div class="testi-box_quote">
                                        <img src="{{ url('assets/frontend/img/icon/quote_left_2.svg') }}" alt="quote">
                                    </div>
                                </div>
                                <div class="testi-box_content">
                                    <p class="testi-box_text">Objectively visualize error-free technology for B2B alignment. Monotonectally harness an expanded array of models via effective collaboration.</p>
                                    <div class="testi-box_review">
                                        <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i>
                                    </div>
                                    <h3 class="box-title">Jackline Techie</h3>
                                    <p class="testi-box_desig">CEO at Kormola</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-box">
                                <div class="testi-box_img">
                                    <img src="{{ url('assets/frontend/img/testimonial/testi_2_3.jpg') }}" alt="Avater">
                                    <div class="testi-box_quote">
                                        <img src="{{ url('assets/frontend/img/icon/quote_left_2.svg') }}" alt="quote">
                                    </div>
                                </div>
                                <div class="testi-box_content">
                                    <p class="testi-box_text">Objectively visualize error-free technology for B2B alignment. Monotonectally harness an expanded array of models via effective collaboration.</p>
                                    <div class="testi-box_review">
                                        <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i>
                                    </div>
                                    <h3 class="box-title">Abraham Khalil</h3>
                                    <p class="testi-box_desig">CEO at Rimasu</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button data-slider-prev="#testiSlider2" class="slider-arrow style3 slider-prev"><i class="far fa-arrow-left"></i></button>
                <button data-slider-next="#testiSlider2" class="slider-arrow style3 slider-next"><i class="far fa-arrow-right"></i></button>
            </div>
        </div>
        <div class="shape-mockup moving d-none d-xl-block" data-bottom="0%" data-left="10%"><img src="{{ url('assets/frontend/img/shape/line_1.png') }}" alt="shape"></div>
        <div class="shape-mockup jump d-none d-xl-block" data-top="20%" data-right="2%"><img src="{{ url('assets/frontend/img/shape/line_2.png') }}" alt="shape"></div>
    </section>

    @endsection
@section('script')
@endsection