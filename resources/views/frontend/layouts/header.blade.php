@php
use App\Models\Setting;
$setting = Setting::first();
@endphp

<header class="navbar-custom fixed-top">
    <div class="container d-flex justify-content-between align-items-center py-3">
        <!-- Logo -->

        <a class="navbar-brand text-primary-custom fw-bold fs-4" href="{{ route('home') }}">
            <img src="{{ asset('img-web/' . $setting->logo ?? 'logo.png') }}" alt="Logo" class="img-fluid" style="width: 50px; height: 50px;">
            {{ $setting->title }}
        </a>

        <!-- Navigation -->
        <nav class="d-none d-md-flex gap-4">
            <a href="#" class="nav-link">Home</a>
            <a href="#about" class="nav-link">About</a>
            <a href="#events" class="nav-link">Events</a>
            <a href="#donation" class="nav-link">Donation</a>
        </nav>

        <!-- Mobile Menu Toggle (Simplified) -->
        <button class="d-md-none btn btn-link text-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu">
            <i class="bi bi-list fs-3"></i>
        </button>
    </div>
</header>