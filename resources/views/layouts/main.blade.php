<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ isset($contentMain->title)?$contentMain->title:'Web Development | Best Website Designing | ScriptCrown' }}</title>
    <meta name="facebook-domain-verification" content="he9zy5upymc72288m3qpcwda5dygul" />
    <meta name="description" content="{{ isset($contentMain->meta_description)?$contentMain->meta_description:'Scriptcrown delivers you the best web development in affordable prices including website designing, mobile app development, digital marketing solutions and many more.' }}" />
    <link rel="canonical" href="{{url()->current()}}"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="{{ isset($contentMain->title)?$contentMain->title:'' }}">
    <meta name="robots" content="{{ isset($contentMain->robots)?$contentMain->robots:'' }}" />
    <meta name="google-site-verification" content="_Is7-guFC312LQs0E9yYfc90B7NW6Dx--HQZrLtBeLs" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name" content="Scriptcrown Infotech" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ isset($contentMain->title)?$contentMain->title:'Web Development | Best Website Designing | ScriptCrown' }}" />
    <meta property="og:description" content="{{ isset($contentMain->meta_description)?$contentMain->meta_description:'Scriptcrown delivers you the best web development in affordable prices including website designing, mobile app development, digital marketing solutions and many more.' }}" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:image" content="https://www.facebook.com/gtzindiapvtltd" />
    <meta property="og:image:secure_url" content="https://www.facebook.com/gtzindiapvtltd" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@GTZIndiaPvtLtd" />
    <meta name="twitter:title" content="{{ isset($contentMain->title)?$contentMain->title:'Web Development | Best Website Designing | ScriptCrown' }}" />
    <meta name="twitter:description" content="{{ isset($contentMain->meta_description)?$contentMain->meta_description:'Scriptcrown delivers you the best web development in affordable prices including website designing, mobile app development, digital marketing solutions and many more.' }}" />
    <meta name="twitter:creator" content="@GTZIndiaPvtLtd" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:label1" content="Written by" />
    <meta name="twitter:data1" content="scriptcrown" />
    <meta name="twitter:label2" content="Est. reading time" />
    <meta name="twitter:data2" content="1 minute" />

    
    <link rel="icon" href="{{ asset('assets/frontend/img/favicon/favicon.ico') }}">
 
    <!-- Icon Font Stylesheet -->
     <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,700&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ url('assets/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/frontend/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/frontend/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/frontend/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/frontend/css/imageRevealHover.css') }}">
    <link rel="stylesheet" href="{{ url('assets/frontend/css/style.css') }}">
    
    @yield('style')
    @if(isset($contentMain->schema))
    {!! $contentMain->schema !!}
    @else
    {!! (get_theme_setting('schema') != null)?get_theme_setting('schema'):'' !!}
    @endif
    <script>
        let popUp = 1
	</script>
</head>

<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
    <script>
        let globalUrl = "{{ env("APP_URL") }}"
        let isAjaxSubmit = "{{ get_theme_setting('ajax_submit') }}"
    </script>
    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>

    <!--==============================
    All Js File
============================== -->
    <!-- Jquery -->
    <script src="{{ url('assets/frontend/js/vendor/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ url('assets/frontend/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ url('assets/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ url('assets/frontend/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ url('assets/frontend/js/circle-progress.js') }}"></script>
    <script src="{{ url('assets/frontend/js/jquery-ui.min.js') }}"></script>
    <script src="{{ url('assets/frontend/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ url('assets/frontend/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('assets/frontend/js/tilt.jquery.min.js') }}"></script>
    <script src="{{ url('assets/frontend/js/gsap.min.js') }}"></script>
    <script src="{{ url('assets/frontend/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ url('assets/frontend/js/smooth-scroll.js') }}"></script>
    <script src="{{ url('assets/frontend/js/particles.min.js') }}"></script>
    <script src="{{ url('assets/frontend/js/particles-config.js') }}"></script>
    <script src="{{ url('assets/frontend/js/imageRevealHover.js') }}"></script>
    <script src="{{ url('assets/frontend/js/main.js') }}"></script>
</body>
</html>