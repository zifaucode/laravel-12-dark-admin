@extends('layouts.app')

@section('title', 'Profile')

@section('page-title', 'Edit Profile')

@section('content')
<div class="container-fluid">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profile</li>
        </ol>
    </nav>

    <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <!-- Left Column: Profile Card -->
            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow-sm rounded-4 h-100">
                    <div class="card-body text-center p-5">
                        <div class="position-relative d-inline-block mb-4">
                            <div class="ratio ratio-1x1" style="width: 150px;">
                                @if($profile->photo)
                                <img src="{{ asset('photo-user/' . $profile->photo) }}"
                                    alt="{{ $profile->name }}"
                                    class="rounded-circle img-thumbnail shadow-sm object-fit-cover w-100 h-100"
                                    id="preview-image">
                                @else
                                <img src="https://ui-avatars.com/api/?name={{ urlencode($profile->name) }}&background=random&size=150"
                                    alt="{{ $profile->name }}"
                                    class="rounded-circle img-thumbnail shadow-sm w-100 h-100"
                                    id="preview-image">
                                @endif
                            </div>
                            <span class="position-absolute bottom-0 end-0 p-2 bg-success border border-light rounded-circle">
                                <span class="visually-hidden">Active</span>
                            </span>
                        </div>

                        <h4 class="fw-bold mb-1">{{ $profile->name }}</h4>
                        <p class="text-muted mb-4">{{ $profile->position ?? 'Member' }}</p>

                        <div class="d-grid gap-2">
                            <input type="file" name="photo" id="photo" class="d-none" accept="image/*" onchange="previewImage(this)">
                            <button type="button" class="btn btn-dark rounded-3 fw-medium" onclick="document.getElementById('photo').click()">
                                <i class="bi bi-camera me-2"></i>Change Photo
                            </button>
                        </div>
                        <small class="text-muted mt-2 d-block">Allowed: JPG, JPEG, PNG (Max 2MB)</small>
                    </div>
                </div>
            </div>

            <!-- Right Column: Details -->
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-header bg-white border-bottom-0 pt-4 px-4 pb-0 d-flex justify-content-between align-items-center">
                        <h5 class="fw-bold mb-0">Edit Profile Details</h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="row g-4">
                            <!-- Full Name -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="form-label small text-muted text-uppercase fw-bold">Full Name</label>
                                    <input type="text"
                                        class="form-control bg-light"
                                        id="name"
                                        name="name"
                                        value="{{ old('name', $profile->name) }}"
                                        required>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" class="form-label small text-muted text-uppercase fw-bold">Email Address</label>
                                    <input type="email"
                                        class="form-control bg-light"
                                        id="email"
                                        name="email"
                                        value="{{ old('email', $profile->email) }}"
                                        required>
                                </div>
                            </div>

                            <!-- Position -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="position" class="form-label small text-muted text-uppercase fw-bold">Position / Role</label>
                                    <input type="text"
                                        class="form-control bg-light"
                                        id="position"
                                        name="position"
                                        value="{{ old('position', $profile->position) }}" disabled>
                                </div>
                            </div>

                            <!-- Address -->
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="address" class="form-label small text-muted text-uppercase fw-bold">Address</label>
                                    <textarea class="form-control bg-light"
                                        id="address"
                                        name="address"
                                        rows="3">{{ old('address', $profile->address) }}</textarea>
                                </div>
                            </div>

                            <div class="col-12 text-end mt-4">
                                <a href="{{ route('profile.index') }}" class="btn btn-light me-2">Cancel</a>
                                <button type="submit" class="btn btn-dark px-4">Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@push('scripts')
<script>
    function previewImage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                document.getElementById('preview-image').src = e.target.result;
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endpush
@endsection