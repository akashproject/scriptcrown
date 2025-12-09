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
    
    <section class="background-image">
        <div class="page-form position-relative">
            <div class="form-header" >
                <div class="form-title"><h5> Search Query </h5> </div>
                <div class="form-close">
                    <span > X </span>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-6 justify-content-center text-center mx-auto">
                        <img src="{{ url('assets/frontend/img/search.png') }}" alt="Image" class="img-fluid mb-3">
                        <h4 class="mb-4"> Thanks for sharing what you need help with. Can you tell us more about the goals you're aiming to accomplish or any specific needs? </h4>
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
            
            <div class="form-footer" >
                <a href="" class="th-btn style3 shadow-none">
                    <i class="fas fa-arrow-left ms-1"></i>
                    <span> Previous</span>
                </a>
                <div class="form-next">
                    <button type="submit" class="th-btn style3 shadow-none">
                        <span> NEXT</span>
                        <i class="fas fa-arrow-right ms-1"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ url('assets/frontend/js/vendor/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ url('assets/frontend/js/bootstrap.min.js') }}"></script>
</body>