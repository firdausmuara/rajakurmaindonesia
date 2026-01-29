<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title', 'Home') - Raja Kurma Indonesia</title>
    <meta name="description" content="@yield('meta_description', 'Raja Kurma Indonesia - Kurma Berkualitas Tinggi')">
    
    <!-- Favicons -->
    <link href="{{ url('landing/assets/img/logo.png') }}" rel="icon">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Poppins:wght@400;500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    
    <!-- Vendor CSS -->
    <link href="{{ url('landing/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('landing/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('landing/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ url('landing/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ url('landing/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    
    <!-- Main CSS -->
    <link href="{{ url('landing/assets/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">
    @include('landing.partials.header')
    
    <main class="main">
        @yield('content')
    </main>
    
    @include('landing.partials.footer')
    
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>
    
    <!-- Preloader -->
    <div id="preloader"></div>
    
    <!-- Vendor JS -->
    <script src="{{ url('landing/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('landing/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ url('landing/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ url('landing/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ url('landing/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ url('landing/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('landing/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    
    <!-- Main JS -->
    <script src="{{ url('landing/assets/js/main.js') }}"></script>
    
    @stack('scripts')
</body>
</html>
