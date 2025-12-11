<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ isset($contentMain->title)?$contentMain->title:'Web Development | Best Website Designing | ScriptCrown' }}</title>
    <link rel="canonical" href="{{url()->current()}}"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('assets/frontend/img/favicon/favicon.ico') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,700&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('assets/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/frontend/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/frontend/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/frontend/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/frontend/css/imageRevealHover.css') }}">
    <link rel="stylesheet" href="{{ url('assets/frontend/css/style-v1.css') }}">
    <link rel="stylesheet" href="{{ url('assets/frontend/css/responsive.css') }}">

</head>
<body>
    <form method="post" action="{{ route('capture-lead') }}"  id="lead-capture-full-screen-form" class="multisteps-form__form"  >
        @csrf
        <section class="background-image">
            <div class="page-form position-relative">
                <div class="form-header" >
                    <div class="form-title"><h5> Search Query </h5> </div>
                    <a href="{{ route('website') }}" class="form-close" onclick="return confirm('Are you sure to quit');">
                        <i class="fas fa-close" > </i>
                    </a>
                </div>
                <div class="container">
                    <div class="position-relative">
                        <div class="form-wizard step-1 js-active">
                            <div class="skill-feature">
                                <div class="progress">
                                    <div class="progress-bar" style="width: 25%; animation: 1.8s ease 0s 1 normal none running animate-positive; opacity: 1;">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-sm-12 col-md-12 justify-content-center text-center mx-auto">
                                    <img src="{{ url('assets/frontend/img/search.png') }}" alt="Image" class="img-fluid mb-3">
                                    <h4 class="mb-4"> Thanks for sharing what you need help with. What is your Business name? </h4>
                                </div>
                            </div>
                            <div class="row justify-content-center mt-3">
                                <div class="col-xl-6 col-sm-12 col-md-12 justify-content-center text-center mx-auto">
                                    <div class=" mb-2">
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Enter Your Name" required>
                                            <label for="company_name">Enter Business name?</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-footer" >
                                <div class="form-next">
                                    <button type="button" class="th-btn style3 shadow-none js-btn-next">
                                        <span> Next</span>
                                        <i class="fas fa-arrow-right ms-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="form-wizard step-2 ">
                            <div class="skill-feature">
                                <div class="progress">
                                    <div class="progress-bar" style="width: 50%; animation: 1.8s ease 0s 1 normal none running animate-positive; opacity: 1;">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-sm-12 col-md-12 justify-content-center text-center mx-auto">
                                    <img src="{{ url('assets/frontend/img/search.png') }}" alt="Image" class="img-fluid mb-3">
                                    <h4 class="mb-4"> Thanks for sharing what you need help with. Can you tell us more about the goals you're aiming to accomplish or any specific needs? </h4>
                                </div>
                            </div>
                            <div class="text-left">
                                <h6>Select Business Type</h6>
                            </div>
                            <div class="business-box-area mt-4">
                                @foreach(getBusinesses() as $value)
                                <label class="business-box-wrap" for="business_type_{{ $value->id }}">
                                    <input type="radio" class="business_type" name="business_type" id="business_type_{{ $value->id }}"  value="{{ $value->id }}" required />
                                    <span class="business-box">
                                        <img src="{{ isset($value->featured_image)?getSizedImage('',$value->featured_image):'https://dummyimage.com/200x100' }}" ></i>
                                        <h6> {{ $value->name }} </h6>
                                    </span>
                                </label>
                                @endforeach
                            </div>
                            <div class="form-footer" >
                                <a href="javascript:void(0)" class="th-btn style3 shadow-none js-btn-prev">
                                    <i class="fas fa-arrow-left ms-1"></i>
                                    <span> Previous</span>
                                </a>
                                <div class="form-next">
                                    <button type="button" class="th-btn style3 shadow-none js-btn-next">
                                        <span> Next</span>
                                        <i class="fas fa-arrow-right ms-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="form-wizard step-3">
                            <div class="skill-feature">
                                <div class="progress">
                                    <div class="progress-bar" style="width: 75%; animation: 1.8s ease 0s 1 normal none running animate-positive; opacity: 1;">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-sm-12 col-md-12 justify-content-center text-center mx-auto">
                                    <img src="{{ url('assets/frontend/img/search.png') }}" alt="Image" class="img-fluid mb-3">
                                    <h4 class="mb-4"> Thanks for sharing what you need help with. Can you tell us more about the goals you're aiming to accomplish or any specific needs? </h4>
                                </div>
                            </div>
                            <div class="text-left">
                                <h6>Select Prefard Services</h6>
                            </div>
                            <div class="business-box-area mt-4">
                                @foreach(getServices() as $value)
                                <label class="small-service-box-wrap" for="service_name_{{ $value->id }}">
                                    <input type="checkbox" class="service_name" name="service_name[]" id="service_name_{{ $value->id }}"  value="{{ $value->id }}" />
                                    <span class="small-service-box">
                                        <img src="{{ isset($value->featured_image)?getSizedImage('',$value->featured_image):'https://dummyimage.com/200x100' }}" ></i>
                                        <h6> {{ $value->name }} </h6>
                                    </span>
                                </label>
                                @endforeach
                            </div>
                            <div class="form-footer" >
                                <a href="javascript:void(0)" class="th-btn style3 shadow-none js-btn-prev">
                                    <i class="fas fa-arrow-left ms-1"></i>
                                    <span> Previous</span>
                                </a>
                                <div class="form-next">
                                    <button type="button" class="th-btn style3 shadow-none js-btn-next">
                                        <span> Next</span>
                                        <i class="fas fa-arrow-right ms-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="form-wizard step-4">
                            <div class="skill-feature">
                                <div class="progress">
                                    <div class="progress-bar" style="width: 100%; animation: 1.8s ease 0s 1 normal none running animate-positive; opacity: 1;">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-sm-12 col-md-12 justify-content-center text-center mx-auto">
                                    <img src="{{ url('assets/frontend/img/search.png') }}" alt="Image" class="img-fluid mb-3">
                                    <h4 class="mb-4"> Thanks for sharing what you need help with. Let me know About Personal Information? </h4>
                                </div>
                            </div>
                            <div class="row justify-content-center mt-3">
                                <div class="col-xl-12 col-sm-12 col-md-12 justify-content-center text-center mx-auto">
                                    <div class=" mb-2">
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Enter Your Name" required>
                                            <label for="full_name">Enter Your Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-sm-12 col-md-6 justify-content-center text-center mx-auto">
                                    <div class=" mb-2">
                                        <div class="form-floating mb-2">
                                            <input type="email" class="form-control" id="email_address" name="email_address" placeholder="Enter Email Address" required>
                                            <label for="email_address">Enter Email Address</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-sm-12 col-md-6 justify-content-center text-center mx-auto">
                                    <div class=" mb-2">
                                        <div class="form-floating mb-2">
                                            <input type="number" class="form-control" id="mobile_number" name="mobile_number" placeholder="Enter Mobile Number" required>
                                            <label for="mobile_number">Enter Mobile Number</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3">
                                <div class="comment-box form-floating mb-2">
                                    <p><i class="fas fa-comments"></i> Write Somthing note</p>
                                    <textarea name="requirement" class="form-control" placeholder="Write here">{{ $search }}</textarea>
                                </div>
                            </div>
                            

                            <div class="form-footer" >
                                <a href="javascript:void(0)" class="th-btn style3 shadow-none js-btn-prev">
                                    <i class="fas fa-arrow-left ms-1"></i>
                                    <span> Previous</span>
                                </a>
                                <div class="form-next">
                                    <button type="submit" class="th-btn style3 shadow-none">
                                        <span> Submit</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>

    <script src="{{ url('assets/frontend/js/vendor/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ url('assets/frontend/js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js"></script>
    <script src="{{ url('assets/frontend/js/form-wizard.js') }}"></script>
</body>