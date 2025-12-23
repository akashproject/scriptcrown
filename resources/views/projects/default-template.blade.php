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

    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-8">
                    <div class="page-single">
                        <div class="page-img">
                            <img src="{{ url('assets/frontend/img/project/project_details.jpg') }}" alt="Project Image">
                        </div>
                        <div class="page-content">
                            <h2 class="h3 page-title">IT Consultency</h2>
                            <p class="">Interactively implement top-line ROI vis-a-vis 24/7 e-markets. Assertively communicate web-enabled catalysts for change through low-risk high-yield functionalities. Quickly optimize maintainable data for virtual interfaces. Phosfluorescently monetize cost effective ROI before leveraged sources. Holisticly envisioneer technically sound imperatives without just in time networks.</p>

                            <div class="project-inner-box mb-40">
                                <h3 class="box-title">The challenge of project</h3>
                                <p class="">Authoritatively scale business meta-services before client-based technologies. Collaboratively strategize synergistic scenarios rather than flexible action items. Continually deliver market positioning convergence and mission-critical infrastructures.</p>
                                <div class="row gy-4 align-items-center">
                                    <div class="col-md-5">
                                        <img class="w-100 rounded-3" src="{{ url('assets/frontend/img/project/project_inner_1.jpg') }}" alt="project">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="checklist">
                                            <ul>
                                                <li><i class="fas fa-badge-check"></i> It is a long established fact that reader will</li>
                                                <li><i class="fas fa-badge-check"></i> There are many variations of passages</li>
                                                <li><i class="fas fa-badge-check"></i> All the Lorem Ipsum generators</li>
                                                <li><i class="fas fa-badge-check"></i> Asearch for 'lorem ipsum' will uncover many</li>
                                                <li><i class="fas fa-badge-check"></i> injected humour words which</li>
                                                <li><i class="fas fa-badge-check"></i> There are many variations of passages of</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="project-inner-box">
                                <h3 class="box-title">The result of project</h3>
                                <p class="mb-3">Objectively utilize client-based e-service after corporate niche markets. Dynamically morph compelling channels vis-a-vis multifunctional interfaces. Credibly administrate wireless opportunities after B2B materials. Phosfluorescently engineer flexible "outside the box" thinking through process-centric web services. Progressively target multidisciplinary.</p>
                                <div class="row gy-4 align-items-center">
                                    <div class="col-md-6">
                                        <img class="w-100 rounded-3" src="{{ url('assets/frontend/img/project/project_inner_2.jpg') }}" alt="project">
                                    </div>
                                    <div class="col-md-6">
                                        <img class="w-100 rounded-3" src="{{ url('assets/frontend/img/project/project_inner_3.jpg') }}" alt="project">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget widget_info  ">
                            <h3 class="widget_title">Project Information</h3>
                            <div class="project-info-list">
                                <div class="contact-feature">
                                    <div class="icon-btn">
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                    <div class="media-body">
                                        <p class="contact-feature_label">Clients:</p>
                                        <a href="https://www.trustpilot.com/" class="contact-feature_link">David Jackson</a>
                                    </div>
                                </div>
                                <div class="contact-feature">
                                    <div class="icon-btn">
                                        <i class="fa-solid fa-folder-open"></i>
                                    </div>
                                    <div class="media-body">
                                        <p class="contact-feature_label">Category:</p>
                                        <a href="project.html" class="contact-feature_link">IT Technology</a>
                                    </div>
                                </div>
                                <div class="contact-feature">
                                    <div class="icon-btn">
                                        <i class="fa-solid fa-calendar-days"></i>
                                    </div>
                                    <div class="media-body">
                                        <p class="contact-feature_label">Date</p>
                                        <span class="contact-feature_link">20 Sep, 2024</span>
                                    </div>
                                </div>
                                <div class="contact-feature">
                                    <div class="icon-btn">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                    <div class="media-body">
                                        <p class="contact-feature_label">Address:</p>
                                        <a href="project.html" class="contact-feature_link">55 Main Address, USA</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget_download  ">
                            <h4 class="widget_title">Download Brochure</h4>
                            <div class="download-widget-wrap">
                                <a href="service-details.html" class="th-btn"><i class="fa-light fa-file-pdf me-2"></i>DOWNLOAD PDF</a>
                                <a href="service-details.html" class="th-btn style5"><i class="fa-light fa-file-lines me-2"></i>DOWNLOAD DOC</a>
                            </div>
                        </div>
                        <div class="widget widget_banner  " data-bg-src="{{ url('assets/frontend/img/bg/widget_banner.jpg') }}">
                            <div class="widget-banner">
                                <span class="text">CONTACT US NOW</span>
                                <h2 class="title">You Need Help?</h2>
                                <a href="contact.html" class="th-btn style3">GET A QUOTE<i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
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