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
                        <h1 class="breadcumb-title mt-2">{{ $contentMain->title }}</h1>
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

    <section class="service-area4 th-radius5 space" id="service-sec">
        <div class="container th-container4">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="title-area text-left">
                        <h2 class="sec-title">Professional {{ $contentMain->name }} Service</h2>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="title-area text-left me-xl-5 ms-xl-5">
                        <p>Elevate your brand with our Professional SEO Service, designed to turn search rankings into revenue. We blend technical audits, intent-based keywords, and authority-building content to put you in front of the right customers at the right time. </p>
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
                            <h3 class="box-title">Personal Portfolio</h3>
                            <p class="service-box2_text">Showcasing individual skills, experience, and creative excellence in one powerful digital space.</p>
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
                            <h3 class="box-title">Creative Portfolio</h3>
                            <p class="service-box2_text">Highlighting design, art, and innovation through visually engaging and interactive layouts.</p>
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
                            <h3 class="box-title">Professional Portfolio</h3>
                            <p class="service-box2_text">Built to establish credibility, expertise, and trust for career growth and business opportunities.</p>
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
                            <h3 class="box-title">Agency Portfolio</h3>
                            <p class="service-box2_text">Displaying team capabilities, case studies, and successful projects that drive client confidence.</p>
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
                            <h3 class="box-title">Corporate Portfolio</h3>
                            <p class="service-box2_text">Presenting company achievements, services, and brand authority with a clean, structured approach.</p>
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
                            <h3 class="box-title">Freelancer Portfolio</h3>
                            <p class="service-box2_text">Designed to attract clients by showcasing services, testimonials, and proven work results.</p>
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
                            <h3 class="box-title">Product Portfolio</h3>
                            <p class="service-box2_text">Focused on presenting products, features, and value propositions with clarity and impact.</p>
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
                            <h3 class="box-title">Photography Portfolio</h3>
                            <p class="service-box2_text">Crafted to showcase visual storytelling, high-quality imagery, and creative vision.</p>
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

    <section class="space" id="business-sec">
        <div class="container th-container4">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="title-area text-left">
                        <h2 class="sec-title">Professional {{ $contentMain->name }} Service</h2>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="title-area text-left me-xl-5 ms-xl-5">
                        <p>We build high-performance, responsive, and visually stunning websites tailored to your business goals. From modern UI/UX design to secure backend development, we deliver scalable, SEO-friendly, and conversion-focused websites that drive growth and brand value. </p>
                    </div>
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
                            <h2 class="box-title">Design Flowchart</h2>
                            <p class="process-card_text">We understand your goals, target audience, brand style, and content needs to define a clear project roadmap.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 process-card-wrap">
                        <div class="process-card">
                            <div class="process-card_number">02</div>
                            <div class="process-card_icon">
                                <img src="{{ url('assets/frontend/img/icon/process_card_2.svg') }}" alt="icon">
                            </div>
                            <h2 class="box-title">Database Design</h2>
                            <p class="process-card_text">Custom UI/UX designs and layouts are created to reflect your brand and showcase work effectively.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 process-card-wrap">
                        <div class="process-card">
                            <div class="process-card_number">03</div>
                            <div class="process-card_icon">
                                <img src="{{ url('assets/frontend/img/icon/process_card_3.svg') }}" alt="icon">
                            </div>
                            <h2 class="box-title">Development</h2>
                            <p class="process-card_text">Developed with clean, responsive code and thoroughly tested for performance, speed, and compatibility.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 process-card-wrap">
                        <div class="process-card">
                            <div class="process-card_number">04</div>
                            <div class="process-card_icon">
                                <img src="{{ url('assets/frontend/img/icon/process_card_4.svg') }}" alt="icon">
                            </div>
                            <h2 class="box-title">Bug Free Deployment</h2>
                            <p class="process-card_text">Deployed live with security, SEO basics, and performance optimization in place.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if(count($technologies) > 0)
    <section class="space" id="business-sec">
        <div class="container th-container4">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="title-area text-left">
                        <h2 class="sec-title">Tools we integrate</h2>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="title-area text-left me-xl-5 ms-xl-5">
                        <p>We build high-performance, responsive, and visually stunning websites tailored to your business goals. From modern UI/UX design to secure backend development, we deliver scalable, SEO-friendly, and conversion-focused websites that drive growth and brand value. </p>
                    </div>
                </div>
            </div>
            
            <div class="technogy-wrap text-center">
                @foreach($technologies as $value)
                <div class="technogy-content mb-2">
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
            </div>
            <div class="row my-5">
                <div class="col-12 text-center">
                    <a href="{{ route('search-keyword') }}" class="th-btn style7 style-radius"> Hire Dedicated Experts <i class="far fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </section>
    @endif
    
    <section class="space">
      <div class="container">
        <h3 class="h4 mb-20">Benefits With Our Service</h3>
        <div class="service-feature-wrap">
            <div class="service-feature">
                <div class="service-feature_icon">
                    <img src="{{ url('assets/frontend/img/icon/service_feature_1.svg') }}" alt="icon">
                </div>
                <div class="media-body">
                    <h4 class="service-feature_title">Scalable Digital Solutions</h4>
                    <p class="service-feature_text">SC Technologies builds websites that grow with your business, not against it. Our development approach focuses on performance, flexibility, and future-ready architecture, ensuring your website can handle increased traffic, new features, and evolving business needs without costly rebuilds.</p>
                </div>
            </div>
            <div class="service-feature">
                <div class="service-feature_icon">
                    <img src="{{ url('assets/frontend/img/icon/service_feature_2.svg') }}" alt="icon">
                </div>
                <div class="media-body">
                    <h4 class="service-feature_title">Conversion-Driven Design</h4>
                    <p class="service-feature_text">Every website we develop is designed to turn visitors into customers. From intuitive user journeys to fast-loading pages and clear call-to-actions, we align design and functionality to maximize engagement, leads, and sales.</p>
                </div>
            </div>
            <div class="service-feature">
                <div class="service-feature_icon">
                    <img src="{{ url('assets/frontend/img/icon/service_feature_1.svg') }}" alt="icon">
                </div>
                <div class="media-body">
                    <h4 class="service-feature_title">Complete SEO Readiness</h4>
                    <p class="service-feature_text">Every website we develop at SC Technologies is built with SEO at its core, not added later. From clean code structure and fast load speeds to mobile optimization, schema integration, and on-page SEO best practices, we ensure your website is fully search-engine friendly and ready to rank from day one.</p>
                </div>
            </div>
            <div class="service-feature">
                <div class="service-feature_icon">
                    <img src="{{ url('assets/frontend/img/icon/service_feature_2.svg') }}" alt="icon">
                </div>
                <div class="media-body">
                    <h4 class="service-feature_title">Results-Focused Partnership</h4>
                    <p class="service-feature_text">SC Technologies works as your growth partner, not just a service provider. We continuously optimize performance, apply best practices, and align technology decisions with your business goals to deliver measurable, long-term results.</p>
                </div>
            </div>
        </div>
      </div>
    </section>

    <div class="service-sec space background-image" id="service-sec">
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

                <div class="col-xl-6 col-lg-8 col-md-6 ">
                    <div class="feature-card style6">
                        <h2 class="">Why Choose SC Technologies for a Business Portfolio Website??</h2>
                        <p class="">Choosing SC Technologies for your business portfolio website means partnering with a team that understands branding, performance, and growth. We design visually refined, high-performing portfolio websites that clearly showcase your expertise, build trust, and convert visitors into opportunities. With a strategy-driven approach, SEO-ready development, and attention to detail, we create portfolio websites that strengthen your brand presence and support long-term business success.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2">
                    <div class="feature-card style2">
                        <div class="feature-card-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_8_3.svg') }}" alt="icon">
                        </div>
                        <h3 class="box-title">Brand-Focused Design</h3>
                        <p class="feature-card_text">We design portfolio websites that reflect your brand identity with clarity and elegance. Every layout, color, and interaction is crafted to communicate trust, professionalism, and credibility. Your portfolio becomes a strong brand asset, not just a showcase.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2">
                    <div class="feature-card style2">
                        <div class="feature-card-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_8_4.svg') }}" alt="icon">
                        </div>
                        <h3 class="box-title">Performance-Driven Development</h3>
                        <p class="feature-card_text">Our websites are built for speed, responsiveness, and smooth user experience across all devices. Clean code and optimized architecture ensure fast loading and stable performance. This keeps users engaged and reduces bounce rates.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2">
                    <div class="feature-card style2">
                        <div class="feature-card-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_8_1.svg') }}" alt="icon">
                        </div>
                        <h3 class="box-title">Conversion-Ready Structure</h3>
                        <p class="feature-card_text">We structure portfolio websites to guide visitors toward meaningful actions. Strategic content placement, clear navigation, and strong CTAs help turn interest into inquiries. Your portfolio works as a lead-generating tool.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2">
                    <div class="feature-card style2">
                        <div class="feature-card-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_8_2.svg') }}" alt="icon">
                        </div>
                        <h3 class="box-title">SEO-Optimized Build</h3>
                        <p class="feature-card_text">Every portfolio website is developed with SEO best practices from the ground up. From mobile optimization and site structure to schema and on-page elements, we ensure your site is search-engine friendly and visible online.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2">
                    <div class="feature-card style2">
                        <div class="feature-card-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_8_3.svg') }}" alt="icon">
                        </div>
                        <h3 class="box-title">Scalable Architecture Setup</h3>
                        <p class="feature-card_text">We build future-ready portfolio websites that can grow with your business. Whether you add new projects, services, or features, the site scales smoothly without performance issues. This saves time and long-term development costs.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2">
                    <div class="feature-card style2">
                        <div class="feature-card-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_8_4.svg') }}" alt="icon">
                        </div>
                        <h3 class="box-title">End-to-End Execution</h3>
                        <p class="feature-card_text">SC Technologies manages the entire process—from strategy and design to development and deployment. You get a seamless experience with consistent quality and timely delivery. One team, one vision, complete execution.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="about-sec-v4 space-bottom" id="about-sec">
        <div class="container th-container4">
            <div class="row my-5">
                <div class="col-lg-5">
                    <div class="title-area text-left">
                        <h2 class="sec-title">Key Components of Our Professional {{ $contentMain->name }} Services</h2>
                        <p> Our business portfolio website services are built to showcase your expertise with clarity and impact. We combine strategic design, performance-driven development, and SEO-ready structure. Every component works together to strengthen your brand presence and drive business growth. </p>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="skill-circle-wrap">
                        <div class="skill-circle">
                            <div class="progressbar" data-path-color="#3E66F3">
                                <div class="circle" data-percent="100">
                                    <div class="circle-num"></div>
                                    <span class="box-text">Client Satisfaction</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill-circle">
                            <div class="progressbar" data-path-color="#3E66F3">
                                <div class="circle" data-percent="99">
                                    <div class="circle-num"></div>
                                    <span class="box-text">Success Rate</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill-circle">
                            <div class="progressbar" data-path-color="#3E66F3">
                                <div class="circle" data-percent="60">
                                    <div class="circle-num"></div>
                                    <span class="box-text">Yearly Growth</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-xl-3 col-md-6">
                    <div class="feature-card style3  px-0">
                        <div class="shape-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_1.png') }}" alt="icon">
                        </div>
                        <h3 class="box-title">Responsive Design</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="feature-card  px-0">
                        <div class="shape-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_2.png') }}" alt="icon">
                        </div>
                        <h3 class="box-title">Visual Gallery</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="feature-card style3  px-0">
                        <div class="shape-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_3.png') }}" alt="icon">
                        </div>
                        <h3 class="box-title">SEO Optimization</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="feature-card  px-0">
                        <div class="shape-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_1.png') }}" alt="icon">
                        </div>
                        <h3 class="box-title">PSD Mockup Design</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="feature-card px-0">
                        <div class="shape-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_1.png') }}" alt="icon">
                        </div>
                        <h3 class="box-title">Exellent Page Speed </h3>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="feature-card style3 px-0">
                        <div class="shape-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_2.png') }}" alt="icon">
                        </div>
                        <h3 class="box-title">CRM Integrated</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="feature-card px-0">
                        <div class="shape-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_3.png') }}" alt="icon">
                        </div>
                        <h3 class="box-title">SSL/SMTP Setup</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="feature-card style3 px-0">
                        <div class="shape-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_2.png') }}" alt="icon">
                        </div>
                        <h3 class="box-title">Dynamic Admin Panel</h3>
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