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
                        <p>Maximize your digital ROI with a team that masters the entire technology lifecycle. We build with AI and Web/Mobile expertise, promote through Data-Driven Marketing, and captivate with Professional Media Services. Whatever your goal, we have the tools and the talent to deliver measurable results under one roof.</p>
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
                <div class="swiper th-slider" id="brandSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"900":{"slidesPerView":"4"},"1200":{"slidesPerView":"5"},"1400":{"slidesPerView":"5"}}}'>
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

    @foreach(getCategories() as $key => $category)
    <section class="service-sec space" id="service-sec" data-bg-src="{{ url('assets/frontend/img/bg/service_bg_1.png') }}">
        <div class="container-fluid">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-6 col-sm-9 pe-xl-5">
                    <div class="title-area text-lg-start">
                        <span class="sub-title">
                            <div class="icon-masking me-2">
                                <span class="mask-icon" data-mask-src="{{ url('assets/frontend/img/theme-img/title_shape_2.svg') }}"></span>
                                <img src="{{ url('assets/frontend/img/theme-img/title_shape_2.svg') }}" alt="shape">
                            </div>
                            Choose {{ $category->name }} service
                        </span>
                        <h2 class="sec-title">  {{ $category->name }} For<span class="text-theme fw-normal"> Your Business</span></h2>

                    </div>
                </div>
                <div class="col-lg-6 col-sm-9 pe-xl-5">
                    <div class="sub-description-area text-lg-start">
                        <p>{{ $category->excerpt }}</p>
                    </div>
                </div>
            </div>
            
            <div class="swiper th-slider" id="brandSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1.3},"576":{"slidesPerView":"1.3"},"768":{"slidesPerView":"1.3"},"900":{"slidesPerView":"2.5"},"1200":{"slidesPerView":"3"},"1366":{"slidesPerView":"4.1"},"1400":{"slidesPerView":"4.3"}}}'>
                <div class="swiper-wrapper">
                    @foreach(getServices($category->id) as $value)
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
    @endforeach

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

    <section class="position-relative overflow-hidden project-area11 space" id="project-sec">
      <div class="container th-container4">
        <div class="row justify-content-lg-between justify-content-center align-items-center">
          <div class="col-lg-6 col-sm-9 pe-xl-5">
            <div class="title-area text-center text-lg-start"><span class="sub-title sub-title8">Our Projects</span>
              <h2 class="sec-title sec-title3">Case Studies &  <span class="">Recent Work</span> </h2>
              <p class="fs-20">Explore our gallery of recent work, where we combine strategy, design, and code to help brands reach their full potential.</p>
            </div>
          </div>
          <div class="col-auto">
            <div class="sec-btn"><a href="{{ route('page','projects') }}" class="th-btn style7 style-radius">View All Projects <i class="far fa-arrow-right ms-2"></i></a></div>
          </div>
        </div>
        <div class="slider-area">
          <div class="swiper th-slider" id="projectSlider10" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1.2},"576":{"slidesPerView":"1.2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"}}}'>
            <div class="swiper-wrapper">
            @foreach(getProjects() as $project)
              <div class="swiper-slide">
                <div class="project-card4 text-center">
                  <div class="project-img"><img src="{{ isset($project->featured_image)?getSizedImage('',$project->featured_image):'assets/frontend/img/project/project_12_1.jpg' }}" alt="project image"></div>
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
        <div class="row my-5">
            <div class="col-12 text-center">
                <a href="{{ route('search-keyword') }}" class="th-btn style7 style-radius">Get An Expert Consultant <i class="far fa-arrow-right ms-2"></i></a>
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