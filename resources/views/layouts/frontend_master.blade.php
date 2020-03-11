<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from pixner.net/boleto/demo/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Mar 2020 06:56:31 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/odometer.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/jquery.animatedheadline.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/main.css')}}">

    <link rel="shortcut icon" href="../../backend/favicon/{{ $gnrlstng->favicon }}" type="image/x-icon">

    <title>{{$gnrlstng->name}}</title>


</head>

<body>

    
    @yield('content')

    
     <!-- ==========Preloader========== -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ==========Preloader========== -->
    <!-- ==========Overlay========== -->
    <div class="overlay"></div>
    <a href="#0" class="scrollToTop">
        <i class="fas fa-angle-up"></i>
    </a>

    
    
    <!-- ==========Overlay========== -->

    @include('includes.header')
    


    @include('includes.footer')

    <script src="{{asset('frontend/assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/plugins.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/heandline.js')}}"></script>
    <script src="{{asset('frontend/assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/magnific-popup.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/countdown.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/odometer.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/viewport.jquery.js')}}"></script>
    <script src="{{asset('frontend/assets/js/nice-select.js')}}"></script>
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @include('layouts.message')
</body>


<!-- Mirrored from pixner.net/boleto/demo/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Mar 2020 06:56:50 GMT -->
</html>