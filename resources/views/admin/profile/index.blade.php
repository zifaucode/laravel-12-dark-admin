@extends('layouts.app')

@section('title', 'Profile')

@section('page-title', 'My Profile')

@section('content')
<div class="container-fluid">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profile</li>
        </ol>
    </nav>

    <div class="row">
        <!-- Left Column: Profile Card -->
        <div class="col-lg-4 mb-4">
            <div class="card border-0 shadow-sm rounded-4 h-100">
                <div class="card-body text-center p-5">
                    <div class="position-relative d-inline-block mb-4">
                        @if(Auth::user()->photo)
                        <img src="{{ asset('photo-user/' . Auth::user()->photo) }}"
                            alt="{{ Auth::user()->name }}"
                            class="rounded-circle img-thumbnail shadow-sm object-fit-cover"
                            style="width: 150px; height: 150px;">
                        @else
                        <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=random&size=150"
                            alt="{{ Auth::user()->name }}"
                            class="rounded-circle img-thumbnail shadow-sm"
                            style="width: 150px; height: 150px;">
                        @endif
                        <span class="position-absolute bottom-0 end-0 p-2 bg-success border border-light rounded-circle">
                            <span class="visually-hidden">Active</span>
                        </span>
                    </div>

                    <h4 class="fw-bold mb-1">{{ Auth::user()->name }}</h4>
                    <p class="text-muted mb-4">{{ Auth::user()->position ?? 'Member' }}</p>

                    <div class="d-grid gap-2">
                        <a href="/profile/edit" class="btn btn-dark rounded-3 fw-medium">
                            <i class="bi bi-pencil-square me-2"></i>Edit Profile
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column: Details -->
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-header bg-white border-bottom-0 pt-4 px-4 pb-0">
                    <h5 class="fw-bold mb-0">Profile Details</h5>
                </div>
                <div class="card-body p-4">
                    <div class="row g-4">
                        <!-- Full Name -->
                        <div class="col-md-6">
                            <div class="p-3 bg-light rounded-3">
                                <label class="small text-muted text-uppercase fw-bold mb-1">Full Name</label>
                                <p class="mb-0 fw-medium text-dark">{{ Auth::user()->name }}</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="col-md-6">
                            <div class="p-3 bg-light rounded-3">
                                <label class="small text-muted text-uppercase fw-bold mb-1">Email Address</label>
                                <p class="mb-0 fw-medium text-dark">{{ Auth::user()->email }}</p>
                            </div>
                        </div>

                        <!-- Position -->
                        <div class="col-md-6">
                            <div class="p-3 bg-light rounded-3">
                                <label class="small text-muted text-uppercase fw-bold mb-1">Position / Role</label>
                                <p class="mb-0 fw-medium text-dark">{{ Auth::user()->position ?? '-' }}</p>
                            </div>
                        </div>

                        <!-- Joined Date -->
                        <div class="col-md-6">
                            <div class="p-3 bg-light rounded-3">
                                <label class="small text-muted text-uppercase fw-bold mb-1">Joined Date</label>
                                <p class="mb-0 fw-medium text-dark">{{ Auth::user()->created_at->format('d F Y') }}</p>
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="col-12">
                            <div class="p-3 bg-light rounded-3">
                                <label class="small text-muted text-uppercase fw-bold mb-1">Address</label>
                                <p class="mb-0 fw-medium text-dark">{{ Auth::user()->address ?? '-' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection