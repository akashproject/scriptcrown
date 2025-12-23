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


    <section class="service-area4 th-radius5 space" id="service-sec">
        <div class="container th-container4">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title-area text-center me-xl-5 ms-xl-5">
                        <span class="sub-title sub-title3">Our Services</span>
                        <h2 class="sec-title">We Provide Experts cyber security services</h2>
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
              @php $key++ @endphp
              <div class="accordion-card style8">
                <div class="accordion-header" id="collapse-item-{{$key}}"><button class="accordion-button {{($key!=1)?'collapsed':''}}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{$key}}" aria-expanded="true" aria-controls="collapse-{{$key}}">{{$key}}. {{ $value->question }}</button></div>
                <div id="collapse-{{$key}}" class="accordion-collapse collapse {{($key==1)?'show':''}}" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    <div class="faq-text">{!! $value->answer !!}</div>
                  </div>
                </div>
              </div>
              @endforeach
              
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
    @endif
    @endsection
@section('script')
@endsection