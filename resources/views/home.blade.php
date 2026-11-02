


@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1>Experience the Taste of Excellence</h1>

        <p>
            Discover delicious food, unforgettable flavors,
            and exceptional dining.
        </p>

        <a href="{{ url('/menu') }}" class="btn btn-warning btn-lg">
            Explore Our Menu
        </a>

        <a href="{{ url('/reservation') }}" class="btn btn-outline-light btn-lg ms-2">
            Book a Table
        </a>
    </div>
</section>

<!-- Featured Dishes -->
<section class="featured-dishes py-5">
    <div class="container">

        <div class="text-center mb-5">
            <p class="text-warning fw-bold">OUR SPECIALTIES</p>
            <h2 class="section-title">Popular Dishes</h2>
            <p>Discover some of our customers' favorite dishes.</p>
        </div>

        <div class="row g-4">

            <!-- Dish 1 -->
            <div class="col-md-4">
                <div class="card food-card h-100 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c"
                         class="card-img-top food-image"
                         alt="Fresh salad">

                    <div class="card-body text-center">
                        <h5 class="card-title">Fresh Garden Salad</h5>
                        <p class="card-text">
                            Fresh vegetables with our special dressing.
                        </p>
                        <h5 class="text-warning">$8.50</h5>
                    </div>
                </div>
            </div>

            <!-- Dish 2 -->
            <div class="col-md-4">
                <div class="card food-card h-100 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1546833999-b9f581a1996d"
                         class="card-img-top food-image"
                         alt="Grilled steak">

                    <div class="card-body text-center">
                        <h5 class="card-title">Grilled Steak</h5>
                        <p class="card-text">
                            Tender grilled steak with delicious seasoning.
                        </p>
                        <h5 class="text-warning">$18.00</h5>
                    </div>
                </div>
            </div>

            <!-- Dish 3 -->
            <div class="col-md-4">
                <div class="card food-card h-100 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1473093295043-cdd812d0e601"
                         class="card-img-top food-image"
                         alt="Pasta">

                    <div class="card-body text-center">
                        <h5 class="card-title">Italian Pasta</h5>
                        <p class="card-text">
                            Delicious pasta prepared with our signature sauce.
                        </p>
                        <h5 class="text-warning">$12.00</h5>
                    </div>
                </div>
            </div>

        </div>

        <div class="text-center mt-5">
            <a href="{{ url('/menu') }}" class="btn btn-dark btn-lg">
                View Full Menu
            </a>
        </div>

    </div>
</section>


@endsection


