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
                        <h1 class="breadcumb-title">Custom {{ $contentMain->name }} Solutions That Drive Results</h1>
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
                        <p>From awareness to conversion, we deploy a diverse mix of content types to ensure your brand reaches your audience wherever they spend their time.</p>
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
                            <h3 class="box-title">Social Media Content</h3>
                            <p class="service-box2_text">Platform-specific posts designed to spark engagement, build community, and drive traffic back to your website.</p>
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
                            <h3 class="box-title">Email Newsletters</h3>
                            <p class="service-box2_text">Nurturing leads and maintaining brand loyalty through curated updates, industry insights, and personalized offers.</p>
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
                            <h3 class="box-title">Articles & Blog Posts</h3>
                            <p class="service-box2_text">Informative, SEO-driven long-form content designed to capture search traffic and answer customer pain points.</p>
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
                            <h3 class="box-title">Case Studies & Success Stories</h3>
                            <p class="service-box2_text">Real-world proof of your impact, detailing how your solutions solved specific challenges for past clients.</p>
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
                            <h3 class="box-title">Whitepapers & E-books</h3>
                            <p class="service-box2_text">In-depth, high-value technical resources used for lead generation and establishing authority in complex industries.</p>
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
                            <h3 class="box-title">Video Marketing</h3>
                            <p class="service-box2_text">Engaging visual storytelling ranging from product demos and "how-to" guides to brand documentaries and interviews.</p>
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
                            <h3 class="box-title">Infographics & Data Visualization</h3>
                            <p class="service-box2_text">Transforming complex data and statistics into easy-to-digest, highly shareable visual assets.</p>
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
                            <h3 class="box-title">Podcasts & Audio Content</h3>
                            <p class="service-box2_text">Building a personal connection with your audience through long-form discussions and industry expert interviews.</p>
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
                            <h2 class="box-title">Keyword Research</h2>
                            <p class="process-card_text">Identify the Right Users with Intent-Driven Insights</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 process-card-wrap">
                        <div class="process-card">
                            <div class="process-card_number">02</div>
                            <div class="process-card_icon">
                                <img src="{{ url('assets/frontend/img/icon/process_card_2.svg') }}" alt="icon">
                            </div>
                            <h2 class="box-title">Content Planning</h2>
                            <p class="process-card_text">Create a Scalable Content Blueprint That Ranks</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 process-card-wrap">
                        <div class="process-card">
                            <div class="process-card_number">03</div>
                            <div class="process-card_icon">
                                <img src="{{ url('assets/frontend/img/icon/process_card_3.svg') }}" alt="icon">
                            </div>
                            <h2 class="box-title">Content Creation</h2>
                            <p class="process-card_text">Produce High-Quality Content and Deliver It at Scale</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 process-card-wrap">
                        <div class="process-card">
                            <div class="process-card_number">04</div>
                            <div class="process-card_icon">
                                <img src="{{ url('assets/frontend/img/icon/process_card_4.svg') }}" alt="icon">
                            </div>
                            <h2 class="box-title">Performance Tracking & Conversion</h2>
                            <p class="process-card_text">Measure, Optimize, and Scale What Converts</p>
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
                    <h4 class="service-feature_title">Authority-Driven Brand Growth</h4>
                    <p class="service-feature_text">Establish yourself as an industry leader through high-impact, expert storytelling. In the competitive US market, trust is your most valuable currency. Our content marketing service isn't just about publishing posts; it’s about positioning your brand as the go-to authority. By creating deeply researched, high-value content, we help you earn the "Expert" badge in your niche, making it a no-brainer for customers to choose you over the competition.</p>
                </div>
            </div>
            <div class="service-feature">
                <div class="service-feature_icon">
                    <img src="{{ url('assets/frontend/img/icon/service_feature_2.svg') }}" alt="icon">
                </div>
                <div class="media-body">
                    <h4 class="service-feature_title">Sustainable Compound Traffic</h4>
                    <p class="service-feature_text">Build a long-term digital asset that drives organic leads while you sleep. Unlike paid ads that stop the moment the budget runs out, our strategic content creates a "snowball effect." By targeting high-intent keywords with evergreen articles and guides, we build a traffic engine that grows in value over time. This means your cost-per-acquisition drops significantly as your organic reach expands, providing a stable foundation for your sales funnel.</p>
                </div>
            </div>
            <div class="service-feature">
                <div class="service-feature_icon">
                    <img src="{{ url('assets/frontend/img/icon/service_feature_1.svg') }}" alt="icon">
                </div>
                <div class="media-body">
                    <h4 class="service-feature_title">Enhanced Lead Nurturing</h4>
                    <p class="service-feature_text">Move prospects through the funnel with content that solves real-world problems. American consumers are savvy and often require multiple touchpoints before making a purchase. We map out a content journey that meets your prospects where they are—whether they are just identifying a problem or comparing final solutions. By providing the right answers at the right time, we reduce sales friction and warm up leads before they ever talk to your sales team.</p>
                </div>
            </div>
            <div class="service-feature">
                <div class="service-feature_icon">
                    <img src="{{ url('assets/frontend/img/icon/service_feature_2.svg') }}" alt="icon">
                </div>
                <div class="media-body">
                    <h4 class="service-feature_title">Data-Backed Content Strategy</h4>
                    <p class="service-feature_text">Eliminate guesswork with performance metrics that prove your content’s value. We treat content as a science, not just an art. At SC Technologies, every topic we select and every whitepaper we write is backed by rigorous search data and competitor analysis. We track engagement, scroll depth, and conversion rates to ensure your content isn't just "pretty"—it's a high-performing tool designed to move the needle on your bottom line.</p>
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
                        <h2 class="">Why Choose SC Technologies for {{ $contentMain->name }} Services?</h2>
                        <p class="">Choosing SC Technologies for content marketing ensures your brand transitions from simply "creating posts" to building a high-value digital asset that drives measurable revenue. We distinguish ourselves by blending editorial excellence with technical SEO precision, ensuring that every piece of content—from whitepapers to blog posts—is engineered to rank on search engines while establishing your brand as a dominant industry authority. Our data-backed approach eliminates the guesswork of traditional blogging by mapping content directly to your customer’s journey</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2">
                    <div class="feature-card style2">
                        <div class="feature-card-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_8_3.svg') }}" alt="icon">
                        </div>
                        <h3 class="box-title">Strategy Before Content</h3>
                        <p class="feature-card_text">We don’t create content just to fill space. Every blog, post, or campaign starts with a clear strategy—aligned with your business goals, audience behavior, and growth targets—so your content works harder and delivers real results.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2">
                    <div class="feature-card style2">
                        <div class="feature-card-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_8_4.svg') }}" alt="icon">
                        </div>
                        <h3 class="box-title">Advanced Marketing Tools</h3>
                        <p class="feature-card_text">SC Technologies uses premium paid tools for keyword research, competitor analysis, content optimization, and performance tracking. This ensures your content is not only creative but also data-backed, SEO-strong, and market-ready.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2">
                    <div class="feature-card style2">
                        <div class="feature-card-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_8_1.svg') }}" alt="icon">
                        </div>
                        <h3 class="box-title">AI-Powered Content Intelligence</h3>
                        <p class="feature-card_text">We blend human creativity with AI-powered insights to identify trending topics, optimize readability, improve engagement, and predict what content will perform best—giving you a competitive edge in your industry.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2">
                    <div class="feature-card style2">
                        <div class="feature-card-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_8_2.svg') }}" alt="icon">
                        </div>
                        <h3 class="box-title">Human-First, Brand-Focused Writing</h3>
                        <p class="feature-card_text">Our content is written for people, not algorithms. We maintain your brand voice, tone, and messaging while crafting content that feels natural, relatable, and trustworthy—helping you connect with your audience emotionally.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2">
                    <div class="feature-card style2">
                        <div class="feature-card-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_8_3.svg') }}" alt="icon">
                        </div>
                        <h3 class="box-title">Performance-Driven Approach</h3>
                        <p class="feature-card_text">Every piece of content is tracked and optimized for performance. We analyze engagement, traffic, leads, and conversions, then refine the strategy continuously to improve ROI and long-term growth.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2">
                    <div class="feature-card style2">
                        <div class="feature-card-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_8_4.svg') }}" alt="icon">
                        </div>
                        <h3 class="box-title">End-to-End Content Marketing Support</h3>
                        <p class="feature-card_text">From planning and creation to distribution and optimization, SC Technologies manages the complete content marketing cycle—so you can focus on your business while we build your brand authority and visibility.</p>
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
                        <p> Our comprehensive content marketing services encompass a range of strategic components designed to elevate your brand's online presence and drive measurable results. Here's what sets our approach apart:</p>
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
                        <h3 class="box-title">Content Strategy</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="feature-card  px-0">
                        <div class="shape-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_2.png') }}" alt="icon">
                        </div>
                        <h3 class="box-title">Audience Research</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="feature-card style3 px-0">
                        <div class="shape-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_3.png') }}" alt="icon">
                        </div>
                        <h3 class="box-title">Keyword Planning</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="feature-card  px-0">
                        <div class="shape-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_1.png') }}" alt="icon">
                        </div>
                        <h3 class="box-title">SEO Optimization</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="feature-card px-0">
                        <div class="shape-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_1.png') }}" alt="icon">
                        </div>
                        <h3 class="box-title">Creative Storytelling</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="feature-card style3 px-0">
                        <div class="shape-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_2.png') }}" alt="icon">
                        </div>
                        <h3 class="box-title">Content Distribution</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="feature-card px-0">
                        <div class="shape-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_3.png') }}" alt="icon">
                        </div>
                        <h3 class="box-title">Performance Tracking</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="feature-card style3 px-0">
                        <div class="shape-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_2.png') }}" alt="icon">
                        </div>
                        <h3 class="box-title">Conversion Focus</h3>
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
                <div class="accordion-header" id="collapse-item-{{ $key }}"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $key }}" aria-expanded="false" aria-controls="collapse-{{ $key }}">{{ $key + 2 }}. {!! $value->question !!}</button></div>
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