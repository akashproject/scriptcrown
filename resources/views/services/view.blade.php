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
            <div class="row">
                @foreach(getBusinesses() as $value)
                <div class="col-lg-2 mb-2">
                    <a href="" class="business-box">
                        <img src="https://dummyimage.com/200x100" ></i>
                        <h6> {{ $value->name }} </h6>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endsection
@section('script')
@endsection