{{-- contact.blade.php --}}


@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<!-- Contact Header -->
<section class="contact-header text-center">
    <div class="container">
        <p class="text-warning fw-bold">GET IN TOUCH</p>
        <h1>Contact Us</h1>
        <p>We'd love to hear from you.</p>
    </div>
</section>

<!-- Contact Information -->
<section class="container py-5">
    <div class="row g-5">

        <div class="col-md-5">
            <h2 class="fw-bold mb-4">Get In Touch</h2>

            <div class="contact-info mb-4">
                <h5>📍 Our Location</h5>
                <p>123 Restaurant Street, Phnom Penh, Cambodia</p>
            </div>

            <div class="contact-info mb-4">
                <h5>📞 Phone Number</h5>
                <p>+855 12 345 678</p>
            </div>

            <div class="contact-info mb-4">
                <h5>✉️ Email Address</h5>
                <p>hello@savoria.com</p>
            </div>

            <div class="contact-info">
                <h5>🕒 Opening Hours</h5>
                <p>Monday - Sunday: 10:00 AM - 10:00 PM</p>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="col-md-7">
            <div class="contact-box">
                <h2 class="fw-bold mb-4">Send Us a Message</h2>

                <form id="contactForm">

                    <div class="mb-3">
                        <label class="form-label">Your Name</label>
                        <input type="text" class="form-control"
                               placeholder="Enter your name" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <input type="email" class="form-control"
                               placeholder="Enter your email" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Subject</label>
                        <input type="text" class="form-control"
                               placeholder="Enter subject" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Message</label>
                        <textarea class="form-control" rows="5"
                                  placeholder="Write your message..."
                                  required></textarea>
                    </div>

                    <button type="submit" class="btn btn-warning btn-lg w-100">
                        Send Message
                    </button>

                </form>

                <div id="contactMessage"
                     class="alert alert-success mt-3 d-none">
                    Your message has been submitted successfully!
                </div>
            </div>
        </div>

    </div>
</section>

<script>
    document.getElementById('contactForm')
        .addEventListener('submit', function(event) {

            event.preventDefault();

            document.getElementById('contactMessage')
                .classList.remove('d-none');

            this.reset();
        });
</script>

@endsection
