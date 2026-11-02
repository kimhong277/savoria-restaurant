{{-- reservation.blade.php --}}


@extends('layouts.app')

@section('title', 'Reservation')

@section('content')

<section class="reservation-header text-center">
    <div class="container">
        <p class="text-warning fw-bold">BOOK YOUR EXPERIENCE</p>
        <h1>Make a Reservation</h1>
        <p>Reserve your table and enjoy an unforgettable dining experience.</p>
    </div>
</section>

<section class="container py-5">
    <div class="reservation-box mx-auto">

        <h2 class="text-center mb-4">Book Your Table</h2>

        <form id="reservationForm">

            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-control"
                       placeholder="Enter your name" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control"
                       placeholder="Enter your email" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Phone Number</label>
                <input type="tel" class="form-control"
                       placeholder="Enter your phone number" required>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Reservation Date</label>
                    <input type="date" class="form-control"
                           id="reservationDate" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Reservation Time</label>
                    <input type="time" class="form-control" required>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Number of Guests</label>
                <select class="form-select" required>
                    <option value="">Select guests</option>
                    <option>1 Person</option>
                    <option>2 People</option>
                    <option>3 People</option>
                    <option>4 People</option>
                    <option>5 People</option>
                    <option>6+ People</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="form-label">Special Requests</label>
                <textarea class="form-control" rows="3"
                          placeholder="Any special requests?"></textarea>
            </div>

            <button type="submit" class="btn btn-warning w-100 btn-lg">
                Confirm Reservation
            </button>

        </form>

        <div id="reservationMessage"
             class="alert alert-success mt-3 d-none">
            Your reservation request has been submitted successfully!
        </div>

    </div>
</section>

<script>
    const reservationForm = document.getElementById('reservationForm');

    reservationForm.addEventListener('submit', function(event) {
        event.preventDefault();

        document.getElementById('reservationMessage')
            .classList.remove('d-none');

        reservationForm.reset();
    });

    document.getElementById('reservationDate').min =
        new Date().toLocaleDateString('en-CA');
</script>

@endsection
