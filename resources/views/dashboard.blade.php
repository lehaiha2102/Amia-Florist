@extends('layouts.app')

@section('content')
<div class="container bottom-spacing mt-5 pt-4">
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
            <div class="col-12 col-ms-6 col-md-4 mb-3">
                <div class="card product-card">
                    <img src="https://placehold.co/600x400" class="card-img-top" alt="Sản phẩm">
                    <div class="card-body">
                        <h5 class="card-title">Sản phẩm A</h5>
                        <p class="card-text">Mô tả ngắn gọn.</p>
                        <p class="text-primary fw-bold">100.000đ</p>
                        <button class="btn btn-primary w-100">Mua ngay</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-ms-6 col-md-4 mb-3">
                <div class="card product-card">
                    <img src="https://placehold.co/600x400" class="card-img-top" alt="Sản phẩm">
                    <div class="card-body">
                        <h5 class="card-title">Sản phẩm A</h5>
                        <p class="card-text">Mô tả ngắn gọn.</p>
                        <p class="text-primary fw-bold">100.000đ</p>
                        <button class="btn btn-primary w-100">Mua ngay</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-ms-6 col-md-4 mb-3">
                <div class="card product-card">
                    <img src="https://placehold.co/600x400" class="card-img-top" alt="Sản phẩm">
                    <div class="card-body">
                        <h5 class="card-title">Sản phẩm A</h5>
                        <p class="card-text">Mô tả ngắn gọn.</p>
                        <p class="text-primary fw-bold">100.000đ</p>
                        <button class="btn btn-primary w-100">Mua ngay</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-ms-6 col-md-4 mb-3">
                <div class="card product-card">
                    <img src="https://placehold.co/600x400" class="card-img-top" alt="Sản phẩm">
                    <div class="card-body">
                        <h5 class="card-title">Sản phẩm A</h5>
                        <p class="card-text">Mô tả ngắn gọn.</p>
                        <p class="text-primary fw-bold">100.000đ</p>
                        <button class="btn btn-primary w-100">Mua ngay</button>
                    </div>
                </div>
            </div>
            <!-- Thêm sản phẩm tương tự -->
        </div>
    </div>
@endsection
