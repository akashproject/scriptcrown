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
            <div class="col-md-6 my-3">
                <div class="project-card4">
                    <a href="" class="project-img"><img src="{{ url('assets/frontend/img/project/project_12_1.jpg') }}" alt="project image"></a>
                    <div class="project-content-wrap">
                    <div class="project-content">
                        <p> Industry : <strong> Healthcare </strong>
                        <div>
                            Skills : <span>Web Design</span><span>Web Design</span><span>Landing Page</span>
                        </div>
                        <h3 class="box-title"><a href="project-details.html">Finance Management Landing Page Responsive Website</a></h3>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 my-3">
                <div class="project-card4">
                    <div class="project-img"><img src="{{ url('assets/frontend/img/project/project_12_2.jpg') }}" alt="project image"></div>
                    <div class="project-content-wrap">
                        <div class="project-content">
                            <p> Industry : <strong> Healthcare </strong>
                            <span>Web Design</span><span>Web Design</span><span>Landing Page</span>
                            <h3 class="box-title"><a href="project-details.html">Nexacard - Digital Bank Card Responsive Page Website</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 my-3">
                <div class="project-card4">
                    <div class="project-img"><img src="{{ url('assets/frontend/img/project/project_12_1.jpg') }}" alt="project image"></div>
                    <div class="project-content-wrap">
                    <div class="project-content"><span>Web Design</span><span>Web Design</span><span>Landing Page</span>
                        <h3 class="box-title"><a href="project-details.html">Finance Management Landing Page Responsive Website</a></h3>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 my-3">
                <div class="project-card4">
                    <div class="project-img"><img src="{{ url('assets/frontend/img/project/project_12_2.jpg') }}" alt="project image"></div>
                    <div class="project-content-wrap">
                    <div class="project-content"><span>Web Design</span><span>Web Design</span><span>Landing Page</span>
                        <h3 class="box-title"><a href="project-details.html">Nexacard - Digital Bank Card Responsive Page Website</a></h3>
                    </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>

    @endsection
@section('script')
@endsection