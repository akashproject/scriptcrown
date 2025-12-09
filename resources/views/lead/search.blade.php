<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ isset($contentMain->title)?$contentMain->title:'Web Development | Best Website Designing | ScriptCrown' }}</title>
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
                    <span class="eduhive-btn__icon"><i class="icon-right-up"></i></span>
                    <span> Previous</span>
                </a>
                <div class="form-next">
                    <button type="submit" class="th-btn style3 shadow-none">
                        <span> NEXT</span>
                        <span class="eduhive-btn__icon"><i class="icon-right-up"></i></span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ url('assets/frontend/js/vendor/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ url('assets/frontend/js/bootstrap.min.js') }}"></script>
</body>