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
                        <div>
                            <span class="mx-2 award-icon"><img src="https://dummyimage.com/100" ></span>
                            <span class="mx-2 award-icon"><img src="https://dummyimage.com/100" ></span>
                            <span class="mx-2 award-icon"><img src="https://dummyimage.com/100" ></span>
                            <span class="mx-2 award-icon"><img src="https://dummyimage.com/100" ></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <section class="service-area4 th-radius5 space" id="service-sec">
        <div class="container th-container4">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="title-area text-left me-xl-5 ms-xl-5">
                        <h2 class="sec-title">Professional {{ $contentMain->name }} Service</h2>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="title-area text-left me-xl-5 ms-xl-5">
                        <p>We build high-performance, responsive, and visually stunning websites tailored to your business goals. From modern UI/UX design to secure backend development, we deliver scalable, SEO-friendly, and conversion-focused websites that drive growth and brand value. </p>
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
                            <h3 class="box-title"><a href="service-details.html">Cyber Security</a></h3>
                            <p class="service-box2_text">Building a cybersecurity culture within organizations is essential to promoting security.</p>
                            <a href="service-details.html" class="icon-btn"><i class="fa-regular fa-arrow-right"></i></a>
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
                            <h3 class="box-title"><a href="service-details.html">Data Protection</a></h3>
                            <p class="service-box2_text">Building a cybersecurity culture within organizations is essential to promoting security.</p>
                            <a href="service-details.html" class="icon-btn"><i class="fa-regular fa-arrow-right"></i></a>
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
                            <h3 class="box-title"><a href="service-details.html">Server Security</a></h3>
                            <p class="service-box2_text">Building a cybersecurity culture within organizations is essential to promoting security.</p>
                            <a href="service-details.html" class="icon-btn"><i class="fa-regular fa-arrow-right"></i></a>
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
                            <h3 class="box-title"><a href="service-details.html">Network Security</a></h3>
                            <p class="service-box2_text">Building a cybersecurity culture within organizations is essential to promoting security.</p>
                            <a href="service-details.html" class="icon-btn"><i class="fa-regular fa-arrow-right"></i></a>
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
                            <h3 class="box-title"><a href="service-details.html">Data Encryption</a></h3>
                            <p class="service-box2_text">Building a cybersecurity culture within organizations is essential to promoting security.</p>
                            <a href="service-details.html" class="icon-btn"><i class="fa-regular fa-arrow-right"></i></a>
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
                            <h3 class="box-title"><a href="service-details.html">Hacking Protection</a></h3>
                            <p class="service-box2_text">Building a cybersecurity culture within organizations is essential to promoting security.</p>
                            <a href="service-details.html" class="icon-btn"><i class="fa-regular fa-arrow-right"></i></a>
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
                            <h3 class="box-title"><a href="service-details.html">Backup & Recovery</a></h3>
                            <p class="service-box2_text">Building a cybersecurity culture within organizations is essential to promoting security.</p>
                            <a href="service-details.html" class="icon-btn"><i class="fa-regular fa-arrow-right"></i></a>
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
                            <h3 class="box-title"><a href="service-details.html">Cloud Security</a></h3>
                            <p class="service-box2_text">Building a cybersecurity culture within organizations is essential to promoting security.</p>
                            <a href="service-details.html" class="icon-btn"><i class="fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
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
                            Business
                        </span>
                        <h2 class="sec-title">Select <span class="text-theme fw-normal">Your Business</span></h2>
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
        <div class="container space">
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
                            <h2 class="box-title">Select a project</h2>
                            <p class="process-card_text">Continua scale empowered metrics with cost effective innovation.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 process-card-wrap">
                        <div class="process-card">
                            <div class="process-card_number">02</div>
                            <div class="process-card_icon">
                                <img src="{{ url('assets/frontend/img/icon/process_card_2.svg') }}" alt="icon">
                            </div>
                            <h2 class="box-title">Project analysis</h2>
                            <p class="process-card_text">Continua scale empowered metrics with cost effective innovation.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 process-card-wrap">
                        <div class="process-card">
                            <div class="process-card_number">03</div>
                            <div class="process-card_icon">
                                <img src="{{ url('assets/frontend/img/icon/process_card_3.svg') }}" alt="icon">
                            </div>
                            <h2 class="box-title">Plan Execute</h2>
                            <p class="process-card_text">Continua scale empowered metrics with cost effective innovation.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 process-card-wrap">
                        <div class="process-card">
                            <div class="process-card_number">04</div>
                            <div class="process-card_icon">
                                <img src="{{ url('assets/frontend/img/icon/process_card_4.svg') }}" alt="icon">
                            </div>
                            <h2 class="box-title">Deliver result</h2>
                            <p class="process-card_text">Continua scale empowered metrics with cost effective innovation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><
    
    <section class="space">
      <div class="container">
        <h3 class="h4 mb-20">Benefits With Our Service</h3>
        <div class="service-feature-wrap">
            <div class="service-feature">
                <div class="service-feature_icon">
                    <img src="{{ url('assets/frontend/img/icon/service_feature_1.svg') }}" alt="icon">
                </div>
                <div class="media-body">
                    <h4 class="service-feature_title">Flexible Solutions</h4>
                    <p class="service-feature_text">Completely grow multimedia based content before global scenarios.</p>
                </div>
            </div>
            <div class="service-feature">
                <div class="service-feature_icon">
                    <img src="{{ url('assets/frontend/img/icon/service_feature_2.svg') }}" alt="icon">
                </div>
                <div class="media-body">
                    <h4 class="service-feature_title">24/7 Unlimited Support</h4>
                    <p class="service-feature_text">Completely grow multimedia based content before global scenarios.</p>
                </div>
            </div>
            <div class="service-feature">
                <div class="service-feature_icon">
                    <img src="{{ url('assets/frontend/img/icon/service_feature_1.svg') }}" alt="icon">
                </div>
                <div class="media-body">
                    <h4 class="service-feature_title">Flexible Solutions</h4>
                    <p class="service-feature_text">Completely grow multimedia based content before global scenarios.</p>
                </div>
            </div>
            <div class="service-feature">
                <div class="service-feature_icon">
                    <img src="{{ url('assets/frontend/img/icon/service_feature_2.svg') }}" alt="icon">
                </div>
                <div class="media-body">
                    <h4 class="service-feature_title">24/7 Unlimited Support</h4>
                    <p class="service-feature_text">Completely grow multimedia based content before global scenarios.</p>
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

    <section class="about-sec-v4 space-bottom" id="about-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="title-area text-left">
                        <span class="sub-title">Why Choose Us</span>
                        <h2 class="sec-title">Why Choose Us</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-xl-4 col-md-6">
                    <div class="feature-card">
                        <div class="shape-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_1.png') }}" alt="icon">
                        </div>
                        <h3 class="box-title">Data Management Service</h3>
                        <p class="feature-card_text">Intrinsicly maximize best-of-breed strategic theme areas whereas premium alignments. Collaboratively transition client.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="feature-card">
                        <div class="shape-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_2.png') }}" alt="icon">
                        </div>
                        <h3 class="box-title">IT Strategy & Consultancy</h3>
                        <p class="feature-card_text">Intrinsicly maximize best-of-breed strategic theme areas whereas premium alignments. Collaboratively transition client.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="feature-card">
                        <div class="shape-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_3.png') }}" alt="icon">
                        </div>
                        <h3 class="box-title">World Class Support</h3>
                        <p class="feature-card_text">Intrinsicly maximize best-of-breed strategic theme areas whereas premium alignments. Collaboratively transition client.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="feature-card">
                        <div class="shape-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_1.png') }}" alt="icon">
                        </div>
                        <h3 class="box-title">Data Management Service</h3>
                        <p class="feature-card_text">Intrinsicly maximize best-of-breed strategic theme areas whereas premium alignments. Collaboratively transition client.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="feature-card">
                        <div class="shape-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_2.png') }}" alt="icon">
                        </div>
                        <h3 class="box-title">IT Strategy & Consultancy</h3>
                        <p class="feature-card_text">Intrinsicly maximize best-of-breed strategic theme areas whereas premium alignments. Collaboratively transition client.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="feature-card">
                        <div class="shape-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_3.png') }}" alt="icon">
                        </div>
                        <h3 class="box-title">World Class Support</h3>
                        <p class="feature-card_text">Intrinsicly maximize best-of-breed strategic theme areas whereas premium alignments. Collaboratively transition client.</p>
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