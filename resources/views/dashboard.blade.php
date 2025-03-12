@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1 data-aos="fade-up">Welcome to the Laravel App</h1>
            <p>This is a page with Bootstrap 5, jQuery, Bootstrap Icons, and AOS animations.</p>
        </div>
    </div>
    <button class="btn btn-primary" data-aos="fade-in" data-aos-delay="300">
        <i class="bi bi-house-door"></i> Home Button
    </button>
@endsection
