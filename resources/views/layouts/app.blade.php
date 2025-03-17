<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App</title>

    <!-- Bootstrap 5 CSS (via CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons CSS (via CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- AOS (Animate On Scroll) CSS (via CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Vite CSS -->
    @vite(['resources/css/app.css']) 

    @yield('styles')  <!-- This is where page-specific styles can be added -->
</head>
<body>
<!-- <div id="popup-overlay" class="popup-overlay">
        <div class="popup-content">
            <h2>Chúng tôi bán hoa theo giá thị trường!</h2>
            <p>Giá hoa có thể thay đổi theo mùa, vui lòng kiểm tra kỹ trước khi đặt hàng.</p>
            <button id="popup-btn" class="popup-btn">Đồng ý</button>
        </div>
    </div> -->
    @include('components.navbar')

    @yield('content')  <!-- The content of the page will be injected here -->

    @include('components.bottom-menu')

    <button id="scrollTopBtn" class="btn btn-warning">
        <i class="bi bi-arrow-up"></i>
    </button>

    <!-- jQuery (via CDN) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap 5 JS (via CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS (Animate On Scroll) JS (via CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <!-- Initialize AOS -->
    <script>
        AOS.init();
    </script>

    <!-- Vite JavaScript -->
    @vite(['resources/js/app.js'])  

    @yield('scripts')  <!-- This is where page-specific scripts can be added -->
</body>
</html>
