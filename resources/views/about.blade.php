{{-- about.blade.php --}}


@extends('layouts.app')

@section('title', 'About Us')

@section('content')

<!-- About Header -->
<section class="about-header">
    <div class="container text-center">
        <p class="text-warning fw-bold">OUR STORY</p>
        <h1>About SAVORIA</h1>
        <p>More than food, it's an experience.</p>
    </div>
</section>

<!-- About Content -->
<section class="container py-5">
    <div class="row align-items-center g-5">

        <div class="col-md-6">
            <img
                src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0"
                class="img-fluid rounded-4 shadow"
                alt="SAVORIA restaurant dining"
            >
        </div>

        <div class="col-md-6">
            <p class="text-warning fw-bold">WELCOME TO SAVORIA</p>

            <h2 class="fw-bold mb-4">
                A Passion for Great Food
            </h2>

            <p>
                At SAVORIA, we believe that great food brings people
                together. Our restaurant is dedicated to creating
                memorable dining experiences through delicious dishes
                and warm hospitality.
            </p>

            <p>
                Every dish is prepared with care, using quality
                ingredients and a passion for exceptional flavors.
            </p>

            <a href="{{ url('/menu') }}" class="btn btn-dark mt-3">
                Discover Our Menu
            </a>
        </div>

    </div>
</section>

<!-- Why Choose Us -->
<section class="why-us py-5">
    <div class="container text-center">

        <h2 class="fw-bold mb-5">Why Choose SAVORIA?</h2>

        <div class="row g-4">

            <div class="col-md-4">
                <h3>🍽️</h3>
                <h5>Quality Food</h5>
                <p>Fresh ingredients and carefully prepared dishes.</p>
            </div>

            <div class="col-md-4">
                <h3>👨‍🍳</h3>
                <h5>Expert Chefs</h5>
                <p>Food made with passion and attention to detail.</p>
            </div>

            <div class="col-md-4">
                <h3>❤️</h3>
                <h5>Warm Service</h5>
                <p>A welcoming atmosphere for every guest.</p>
            </div>

        </div>
    </div>
</section>

@endsection
