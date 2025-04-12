<!DOCTYPE html>
<html lang="zxx">
<!-- Designed & Customized by Swotboysandy -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('img/icons/favicon.png') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/plugins/bootstrap-grid.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>FlowVox</title>

</head>

<body>
    @include('layouts.header') 
    
    @yield('content') 
    
    @include('layouts.footer')

    <!-- Scripts -->
    <script src="{{ asset('js/plugins/jquery.min.js') }}"></script>
    <script src="{{ asset('js/plugins/swup.min.js') }}"></script>
    <script src="{{ asset('js/plugins/swiper.min.js') }}"></script>
    <script src="{{ asset('js/plugins/fancybox.min.js') }}"></script>
    <script src="{{ asset('js/plugins/gsap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/smooth-scroll.js') }}"></script>
    <script src="{{ asset('js/plugins/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('js/plugins/ScrollTo.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>