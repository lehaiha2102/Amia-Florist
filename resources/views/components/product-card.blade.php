<div class="card product-card">
    <img src="{{ $image }}" class="card-img-top" alt="{{ $title }}">
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text">{{ $description }}</p>
        <div class="d-flex justify-content-between">
            <p class="text-primary fw-bold">{{ number_format($price, 0, ',', '.') }}đ</p>
            <button class="btn btn-primary">mua</button>
        </div>
    </div>
</div>
