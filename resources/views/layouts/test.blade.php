<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Giao Diện Mobile First</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@latest/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@latest/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .bottom-menu {
            position: fixed;
            bottom: 0;
            width: 100%;
            background: #fff;
            box-shadow: 0 -2px 10px rgba(0,0,0,0.1);
            z-index: 1000;
        }
        .product-card img {
            height: 150px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-light bg-light fixed-top px-3">
        <button id="searchBtn" class="btn btn-light"><i class="bi bi-search"></i></button>
        <span class="navbar-brand mx-auto"><i class="bi bi-shop"></i> Logo</span>
    </nav>
    
    <!-- Search Form (Hidden) -->
    <div id="searchForm" class="container mt-5 pt-4 d-none">
        <input type="text" class="form-control" placeholder="Tìm kiếm...">
    </div>
    
    <!-- Danh sách sản phẩm -->
    <div class="container mt-5 pt-4">
        <div class="d-flex justify-content-between mb-3">
            <select class="form-select w-50">
                <option value="">Chọn danh mục</option>
                <option value="1">Danh mục 1</option>
                <option value="2">Danh mục 2</option>
            </select>
            <button class="btn btn-outline-secondary">Lọc</button>
        </div>
        <div class="row" id="productList">
            <!-- Sản phẩm -->
            <div class="col-6 mb-3">
                <div class="card product-card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Sản phẩm">
                    <div class="card-body">
                        <h5 class="card-title">Sản phẩm A</h5>
                        <p class="card-text">Mô tả ngắn gọn.</p>
                        <p class="text-danger fw-bold">100.000đ</p>
                        <button class="btn btn-primary w-100">Mua ngay</button>
                    </div>
                </div>
            </div>
            <!-- Thêm sản phẩm tương tự -->
        </div>
    </div>
    
    <!-- Menu Bottom -->
    <div class="bottom-menu d-flex justify-content-around py-2 border-top">
        <button class="btn btn-light" id="searchIcon"><i class="bi bi-search"></i></button>
        <button class="btn btn-light"><i class="bi bi-house"></i></button>
        <button class="btn btn-light"><i class="bi bi-info-circle"></i></button>
        <button class="btn btn-light"><i class="bi bi-envelope"></i></button>
    </div>
    
    <script>
        $(document).ready(function() {
            $("#searchBtn, #searchIcon").click(function() {
                $("#searchForm").toggleClass("d-none");
            });
        });
    </script>
</body>
</html>
