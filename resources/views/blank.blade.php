@extends('layouts.app')

@section('title', 'Blank Page')

@section('page-title', 'Blank Page')

@section('content')
<div class="container-fluid">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blank Page</li>
        </ol>
    </nav>

    <!-- Page Title -->
    <h1 class="page-title">Blank Page</h1>

    <!-- Content Card -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Example Card</h5>
        </div>
        <div class="card-body">
            <p class="text-muted mb-0">
                This is an example blank page. You can use this as a starting point for your pages.
            </p>
        </div>
    </div>

    <!-- Example Grid -->
    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Card 1</h6>
                    <p class="card-text text-muted small">Example card content</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Card 2</h6>
                    <p class="card-text text-muted small">Example card content</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Card 3</h6>
                    <p class="card-text text-muted small">Example card content</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Example Table -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Example Table</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>john@example.com</td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jane Smith</td>
                            <td>jane@example.com</td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Example Buttons -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Example Buttons</h5>
        </div>
        <div class="card-body">
            <div class="d-flex flex-wrap gap-2">
                <button class="btn btn-dark">Primary Button</button>
                <button class="btn btn-outline-dark">Outline Button</button>
                <button class="btn btn-secondary">Secondary Button</button>
                <button class="btn btn-outline-secondary">Outline Secondary</button>
            </div>
        </div>
    </div>
</div>
@endsection