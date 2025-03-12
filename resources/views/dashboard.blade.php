@extends('layouts.app')

@section('content')
    @include('components.carousel')

    <section class="container product-list-section">
        <div class="filter-bar">
            <a>Filter</a>
            <select>
                <option>1</option>
                <option>22</option>
                <option>3</option>
            </select>
        </div>
        <div class="product-list row">
            <div class="product-item col-lg-3 col-md-4 col-sm-6 col-12 mb-3 px-3">
                <img class="img" src="https://placehold.co/600x400">
                <div class="product-info">
                    <h3>product name</h3>
                    <span>product priceprice</span>
                </div>
            </div>
            <div class="product-item col-lg-3 col-md-4 col-sm-6 col-12 mb-3 px-3">
                <img class="img" src="https://placehold.co/600x400">
               <div class="product-info">
                    <h3>product name</h3>
                    <span>product priceprice</span>
                </div>
            </div>
            <div class="product-item col-lg-3 col-md-4 col-sm-6 col-12 mb-3 px-3">
                <img class="img" src="https://placehold.co/600x400">
               <div class="product-info">
                    <h3>product name</h3>
                    <span>product priceprice</span>
                </div>
            </div>
            <div class="product-item col-lg-3 col-md-4 col-sm-6 col-12 mb-3 px-3">
                <img class="img" src="https://placehold.co/600x400">
               <div class="product-info">
                    <h3>product name</h3>
                    <span>product priceprice</span>
                </div>
            </div>
        </div>
        <div>
        <button class="btn btn-primary">Load more</button>
        </div>
    </section>

    <section class="mobile-menu">
        <a class="mobile-menu-icon"><i class="bi bi-three-dots"></i></a>
        <a class="mobile-menu-icon"><i class="bi bi-search"></i></a>
        <a class="mobile-menu-icon"><i class="bi bi-house"></i></a>
        <a class="mobile-menu-icon"><i class="bi bi-person"></i></a>
    </section>
@endsection
