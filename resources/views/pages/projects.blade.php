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

    <section class="position-relative overflow-hidden project-area11 space" id="project-sec">
      <div class="container th-container4">
        <div class="row justify-content-lg-between justify-content-center align-items-center">
          <div class="col-lg-6 col-sm-9 pe-xl-5">
            <div class="title-area text-center text-lg-start"><span class="sub-title sub-title8">Our Projects</span>
              <h2 class="sec-title sec-title3">Our <span class="">Recent</span> Projects</h2>
              <p class="fs-20">Unveiling the extraordinary power. delving into the exceptionally powerfull features of data analysis</p>
            </div>
          </div>
          
        </div>
        <div class="row">
            @foreach(getProjects() as $project)   
            <div class="col-md-4 my-3">
                <div class="project-card4">
                  <div class="project-img"><img src="{{ isset($project->featured_image)?getSizedImage('',$project->featured_image):'assets/frontend/img/project/project_12_1.jpg' }}" alt="project image"></div>
                  <div class="project-content-wrap">
                    <div class="project-content">
                      <h3 class="box-title"><a href="project-details.html">{{ $project->name }} </a></h3>
                        @if($project->service_id)
                        <div class="project-service" >
                            <ul>
                                @foreach(getServices(null,$project->service_id) as $serve_id )
                                <li> <a href="" >Service: {{ $serve_id->name }}</a></li>
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
      </div>
    </section>

    @include('common.embedForm')

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