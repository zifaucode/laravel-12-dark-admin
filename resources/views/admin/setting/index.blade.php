@extends('layouts.app')

@section('title', 'Edit Web')

@section('page-title', 'Edit Web')

@section('content')
<div class="container-fluid">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Web</li>
        </ol>
    </nav>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

    <!-- Content Card -->
    <form action="{{ route('setting.store') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Title Website</h5>
            </div>
            <div class="card-body">
                <p class="text-muted mb-0">
                    <input type="text" class="form-control" id="title" name="title" value="{{ $setting->title ?? ''}}">
                </p>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Logo Website</h5>
            </div>
            <div class="card-body">
                <p class="text-muted mb-0">
                    @if ($setting->logo)
                    <img src="{{ asset('img-web/' . $setting->logo) }}" alt="Logo" class="img-fluid" width="300px">
                    @endif
                    <input type="file" class="form-control" id="logo" name="logo">
                </p>
            </div>
        </div>


        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Favicon Website</h5>
            </div>
            <div class="card-body">
                <p class="text-muted mb-0">
                    @if ($setting->favicon)
                    <img src="{{ asset('img-web/' . $setting->favicon) }}" alt="Favicon" class="img-fluid" width="300px">
                    @endif
                    <input type="file" class="form-control" id="favicon" name="favicon">
                </p>
            </div>
        </div>


        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Footer Website</h5>
            </div>
            <div class="card-body">
                <p class="text-muted mb-0">
                    <input type="text" class="form-control" id="footer" name="footer" value="{{ $setting->footer ?? '' }}">
                </p>
            </div>
        </div>

        <div style="text-align: right;">
            <button type="submit" class="btn btn-dark">Simpan</button>
        </div>
    </form>




</div>
@endsection