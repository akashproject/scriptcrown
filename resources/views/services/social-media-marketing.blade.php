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
                        <p>Your Digital Footprint with Strategic Social Marketing Sub-heading: We combine data-driven targeting with creative storytelling to build an active, loyal community around your brand and turn followers into customers.</p>
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
                            <h3 class="box-title">Social Media Management</h3>
                            <p class="service-box2_text">The daily handling of profile updates, community engagement, and brand monitoring across all major platforms.</p>
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
                            <h3 class="box-title">Paid Social Advertising</h3>
                            <p class="service-box2_text">Creating and optimizing highly targeted ad campaigns on Meta, LinkedIn, and X to drive immediate traffic and conversions.</p>
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
                            <h3 class="box-title">Influencer Partnerships</h3>
                            <p class="service-box2_text">Collaborating with industry voices to build trust and reach new audiences through authentic, third-party endorsements.</p>
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
                            <h3 class="box-title">Integrated Shopping</h3>
                            <p class="service-box2_text">Setting up and managing "in-app" storefronts like Instagram Shops and TikTok Shop to shorten the path to purchase.</p>
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
                            <h3 class="box-title">Video & Short-Form Content</h3>
                            <p class="service-box2_text">Producing viral-ready reels, shorts, and TikToks designed to capture attention in fast-moving social feeds.</p>
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
                            <h3 class="box-title">Community Building</h3>
                            <p class="service-box2_text">Developing dedicated spaces like Facebook Groups or Discord servers to foster deep brand loyalty and peer-to-peer discussion.</p>
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
                            <h3 class="box-title">Social Listening & Analytics</h3>
                            <p class="service-box2_text">Monitoring brand mentions and industry trends to gain actionable insights into customer sentiment and competitor strategy.</p>
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
                            <h3 class="box-title">Platform-Specific Giveaways</h3>
                            <p class="service-box2_text">Launching viral-oriented campaigns to rapidly increase follower count and boost organic brand engagement.</p>
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
        <h3 class="h4 mb-20">What Sets Our Digital Strategy Apart</h3>
        <div class="service-feature-wrap">
            <div class="service-feature">
                <div class="service-feature_icon">
                    <img src="{{ url('assets/frontend/img/icon/service_feature_1.svg') }}" alt="icon">
                </div>
                <div class="media-body">
                    <h4 class="service-feature_title">Bridge the Gap Between Target Audience and your product</h4>
                    <p class="service-feature_text">While many agencies are purely data-driven, we believe data only tells half the story. We combine deep analytical insights with empathetic storytelling. By understanding the psychology behind the click, we create marketing campaigns that don't just reach people—they resonate with them on a personal level.</p>
                </div>
            </div>
            <div class="service-feature">
                <div class="service-feature_icon">
                    <img src="{{ url('assets/frontend/img/icon/service_feature_2.svg') }}" alt="icon">
                </div>
                <div class="media-body">
                    <h4 class="service-feature_title">AI-Enhanced, Not AI-Dependent</h4>
                    <p class="service-feature_text">We leverage cutting-edge AI-powered solutions to automate the mundane and predict market trends, but we never let the machines take the driver's seat. Our human experts curate every output to ensure your brand maintains its Unique soul and Authenticity, giving you the speed of modern tech with the nuance of human creativity.</p>
                </div>
            </div>
            <div class="service-feature">
                <div class="service-feature_icon">
                    <img src="{{ url('assets/frontend/img/icon/service_feature_1.svg') }}" alt="icon">
                </div>
                <div class="media-body">
                    <h4 class="service-feature_title">Full-Spectrum Synergy</h4>
                    <p class="service-feature_text">Because we are a full-service IT agency, your marketing team sits in the same room as your web developers and app designers. This means your digital strategy isn't a "plug-in"—it’s integrated into your tech stack. We ensure your landing pages are lightning-fast and your user journeys are seamless, eliminating the friction that usually kills conversions.</p>
                </div>
            </div>
            <div class="service-feature">
                <div class="service-feature_icon">
                    <img src="{{ url('assets/frontend/img/icon/service_feature_2.svg') }}" alt="icon">
                </div>
                <div class="media-body">
                    <h4 class="service-feature_title">Radical Transparency & Ownership</h4>
                    <p class="service-feature_text">We don’t hide behind "vanity metrics" like likes or impressions if they aren't leading to revenue. You get a clear, jargon-free window into exactly where your budget is going and how it’s performing. We treat your business like our own, providing honest advice even when it means pivoting away from a "trendy" tactic that isn't right for your specific goals.</p>
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
                        <h2 class="">Why Choose SC Technologies for Social Media Marketing Services?</h2>
                        <p class="">Choosing SC Technologies for your social media marketing means partnering with a team that views social platforms as sophisticated business engines rather than just digital billboards. We stand out by integrating our deep IT roots with creative marketing, ensuring that your social strategy is powered by real-time data and advanced AI insights. Instead of just chasing "likes," we focus on high-intent engagement and conversion-driven storytelling, bridging the gap between your brand’s technical excellence and the human connection your customers crave.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2">
                    <div class="feature-card style2">
                        <div class="feature-card-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_8_3.svg') }}" alt="icon">
                        </div>
                        <h3 class="box-title">Data-First Strategy</h3>
                        <p class="feature-card_text"><strong>No Guesswork, Just Growth.</strong> We move beyond "post and pray." Every campaign at SC Technologies starts with deep audience research and competitive auditing, ensuring your content is engineered to meet specific business objectives and measurable KPIs.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2">
                    <div class="feature-card style2">
                        <div class="feature-card-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_8_4.svg') }}" alt="icon">
                        </div>
                        <h3 class="box-title">Tech-Integrated Marketing</h3>
                        <p class="feature-card_text"><strong>Seamless Digital Ecosystems.</strong> Unlike standalone agencies, we bridge the gap between social media and your tech stack. We ensure your social campaigns, pixels, and tracking are perfectly synced with your website and CRM for a frictionless user journey.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2">
                    <div class="feature-card style2">
                        <div class="feature-card-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_8_1.svg') }}" alt="icon">
                        </div>
                        <h3 class="box-title">AI-Driven Insights</h3>
                        <p class="feature-card_text"><strong>Predicting the Next Trend.</strong> We leverage advanced AI tools to analyze sentiment and predict viral trends before they peak. This proactive approach allows your brand to lead the conversation rather than just joining it, keeping you ahead of the competition.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2">
                    <div class="feature-card style2">
                        <div class="feature-card-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_8_2.svg') }}" alt="icon">
                        </div>
                        <h3 class="box-title">Cinematic Media Production</h3>
                        <p class="feature-card_text"><strong>Thumb-Stopping Visuals. </strong>With our in-house videography and graphics expertise, your social feed becomes a premium experience. We produce high-production-value Reels, TikToks, and designs that capture attention in an era of endless scrolling.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2">
                    <div class="feature-card style2">
                        <div class="feature-card-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_8_3.svg') }}" alt="icon">
                        </div>
                        <h3 class="box-title">Conversion-Centric Approach</h3>
                        <p class="feature-card_text"><strong>Beyond the "Like" Button.</strong> Engagement is vanity; conversion is sanity. Our content funnels are designed to nurture followers through the buyer’s journey, turning casual observers into brand advocates and paying customers.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2">
                    <div class="feature-card style2">
                        <div class="feature-card-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_8_4.svg') }}" alt="icon">
                        </div>
                        <h3 class="box-title">Radical Transparency</h3>
                        <p class="feature-card_text">Real Results, Zero Jargon. We believe in total accountability. You’ll receive comprehensive monthly reports that break down exactly how your budget is performing, focusing on the metrics that actually impact your bottom line and ROI.</p>
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
                        <p>We deliver data-driven social media solutions that build brand awareness, increase engagement, and convert followers into loyal customers.</p>
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
                        <h3 class="box-title">Strategy & Goal Setting</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="feature-card  px-0">
                        <div class="shape-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_2.png') }}" alt="icon">
                        </div>
                        <h3 class="box-title">Content Creation</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="feature-card style3  px-0">
                        <div class="shape-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_3.png') }}" alt="icon">
                        </div>
                        <h3 class="box-title">Platform Selection</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="feature-card  px-0">
                        <div class="shape-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_1.png') }}" alt="icon">
                        </div>
                        <h3 class="box-title">Branding & Visual Identity</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="feature-card px-0">
                        <div class="shape-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_1.png') }}" alt="icon">
                        </div>
                        <h3 class="box-title">Community Engagement</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="feature-card style3 px-0">
                        <div class="shape-icon">
                            <img src="{{ url('/assets/frontend/img/icon/feature_card_2.png') }}" alt="icon">
                        </div>
                        <h3 class="box-title">Paid Advertising</h3>
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
                        <h3 class="box-title">Optimization & Growth</h3>
                    </div>
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
                    <p class="faq-text">{{ $value->answer }}</p>
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