
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') | SAVORIA</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">
          <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand" href="{{ url('/') }}">
            SAVORIA
        </a>

        <!-- Mobile Hamburger Button -->
        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu"
                aria-controls="navbarMenu"
                aria-expanded="false"
                aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Links -->
        <div class="collapse navbar-collapse" id="navbarMenu">

            
<div class="navbar-nav ms-auto">

    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
       href="{{ url('/') }}">Home</a>

    <a class="nav-link {{ request()->is('menu') ? 'active' : '' }}"
       href="{{ url('/menu') }}">Menu</a>

    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}"
       href="{{ url('/about') }}">About</a>

    <a class="nav-link {{ request()->is('reservation') ? 'active' : '' }}"
       href="{{ url('/reservation') }}">Reservation</a>

    <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}"
       href="{{ url('/contact') }}">Contact</a>

</div>


        </div>
    </div>
</nav>


    <!-- Page Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    
<footer class="site-footer">
    <div class="container py-4">

        <div class="row g-4">

            <div class="col-md-5">
                <h3>SAVORIA</h3>
                <p>
                    Experience delicious food, unforgettable flavors,
                    and exceptional dining.
                </p>
            </div>

            <div class="col-md-3">
                <h5>Quick Links</h5>
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/menu') }}">Our Menu</a>
                <a href="{{ url('/about') }}">About Us</a>
            </div>

            <div class="col-md-4">
                <h5>Contact</h5>
                <p>Phnom Penh, Cambodia</p>
                <p>+855 12 345 678</p>
                <p>hello@savoria.com</p>
            </div>

        </div>

        <hr>

        <p class="text-center mb-0">
            &copy; 2026 SAVORIA Restaurant. All Rights Reserved.
        </p>

    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
