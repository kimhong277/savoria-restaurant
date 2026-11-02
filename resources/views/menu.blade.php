{{-- menu.blade.php --}}


@extends('layouts.app')

@section('title', 'Menu')

@section('content')

<section class="menu-header text-center">
    <div class="container">
        <p class="text-warning fw-bold">DISCOVER OUR FOOD</p>
        <h1>Our Menu</h1>
        <p>Delicious dishes, carefully prepared for you.</p>
    </div>
</section>

<section class="container py-5">

    <!-- Main Courses -->
    <div class="mb-5">
        <h2 class="menu-category">Main Courses</h2>

        <div class="row g-4">

            <div class="col-md-6">
                <div class="menu-item">
                    <img src="https://images.unsplash.com/photo-1546833999-b9f581a1996d" alt="Grilled steak">
                    <div class="menu-info">
                        <h5>Grilled Steak</h5>
                        <p>Tender steak served with fresh vegetables.</p>
                        <strong>$18.00</strong>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="menu-item">
                    <img src="https://images.unsplash.com/photo-1473093295043-cdd812d0e601" alt="Italian pasta">
                    <div class="menu-info">
                        <h5>Italian Pasta</h5>
                        <p>Classic pasta with our signature sauce.</p>
                        <strong>$12.00</strong>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Appetizers -->
    <div class="mb-5">
        <h2 class="menu-category">Appetizers</h2>

        <div class="row g-4">

            <div class="col-md-6">
                <div class="menu-item">
                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c" alt="Fresh salad">
                    <div class="menu-info">
                        <h5>Fresh Garden Salad</h5>
                        <p>Fresh vegetables with special dressing.</p>
                        <strong>$8.50</strong>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="menu-item">
                    <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38" alt="Pizza">
                    <div class="menu-info">
                        <h5>Italian Pizza</h5>
                        <p>Freshly baked pizza with cheese and herbs.</p>
                        <strong>$14.00</strong>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="text-center mt-5">
        <a href="{{ url('/reservation') }}" class="btn btn-warning btn-lg">
            Reserve a Table
        </a>
    </div>

</section>

@endsection
