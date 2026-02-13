@extends('layouts.app')

@section('title', 'Dashboard')

@section('page-title', 'Dashboard')

@section('content')
<div class="container-fluid">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>

    <!-- Page Title -->
    <h1 class="page-title">Dashboard</h1>

    <!-- Stats Cards -->
    <div class="row mb-4">
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-muted mb-2">Total Users</h6>
                            <h3 class="mb-0">1,234</h3>
                        </div>
                        <div class="user-avatar" style="background-color: #e9ecef; color: var(--dark-bg);">
                            <i class="bi bi-people-fill"></i>
                        </div>
                    </div>
                    <small class="text-success">
                        <i class="bi bi-arrow-up"></i> 12% from last month
                    </small>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-muted mb-2">Total Data</h6>
                            <h3 class="mb-0">5,678</h3>
                        </div>
                        <div class="user-avatar" style="background-color: #e9ecef; color: var(--dark-bg);">
                            <i class="bi bi-database-fill"></i>
                        </div>
                    </div>
                    <small class="text-success">
                        <i class="bi bi-arrow-up"></i> 8% from last month
                    </small>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-muted mb-2">Reports</h6>
                            <h3 class="mb-0">234</h3>
                        </div>
                        <div class="user-avatar" style="background-color: #e9ecef; color: var(--dark-bg);">
                            <i class="bi bi-file-earmark-text-fill"></i>
                        </div>
                    </div>
                    <small class="text-danger">
                        <i class="bi bi-arrow-down"></i> 3% from last month
                    </small>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-muted mb-2">Revenue</h6>
                            <h3 class="mb-0">$12,345</h3>
                        </div>
                        <div class="user-avatar" style="background-color: #e9ecef; color: var(--dark-bg);">
                            <i class="bi bi-currency-dollar"></i>
                        </div>
                    </div>
                    <small class="text-success">
                        <i class="bi bi-arrow-up"></i> 15% from last month
                    </small>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts and Tables Row -->
    <div class="row">
        <!-- Recent Activity -->
        <div class="col-lg-8 mb-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Recent Activity</h5>
                    <button class="btn btn-sm btn-outline-dark">View All</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Action</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="user-avatar me-2" style="width: 32px; height: 32px; font-size: 12px;">
                                                <i class="bi bi-person"></i>
                                            </div>
                                            <span>John Doe</span>
                                        </div>
                                    </td>
                                    <td>Created new record</td>
                                    <td>2024-01-15 10:30</td>
                                    <td><span class="badge bg-success">Success</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="user-avatar me-2" style="width: 32px; height: 32px; font-size: 12px;">
                                                <i class="bi bi-person"></i>
                                            </div>
                                            <span>Jane Smith</span>
                                        </div>
                                    </td>
                                    <td>Updated data</td>
                                    <td>2024-01-15 09:15</td>
                                    <td><span class="badge bg-success">Success</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="user-avatar me-2" style="width: 32px; height: 32px; font-size: 12px;">
                                                <i class="bi bi-person"></i>
                                            </div>
                                            <span>Bob Johnson</span>
                                        </div>
                                    </td>
                                    <td>Deleted record</td>
                                    <td>2024-01-15 08:30</td>
                                    <td><span class="badge bg-warning text-dark">Warning</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="user-avatar me-2" style="width: 32px; height: 32px; font-size: 12px;">
                                                <i class="bi bi-person"></i>
                                            </div>
                                            <span>Alice Brown</span>
                                        </div>
                                    </td>
                                    <td>Generated report</td>
                                    <td>2024-01-14 16:45</td>
                                    <td><span class="badge bg-success">Success</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="col-lg-4 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Quick Actions</h5>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <button class="btn btn-dark">
                            <i class="bi bi-plus-circle me-2"></i> Add New Record
                        </button>
                        <button class="btn btn-outline-dark">
                            <i class="bi bi-file-earmark-arrow-down me-2"></i> Export Data
                        </button>
                        <button class="btn btn-outline-dark">
                            <i class="bi bi-file-earmark-arrow-up me-2"></i> Import Data
                        </button>
                        <button class="btn btn-outline-dark">
                            <i class="bi bi-printer me-2"></i> Print Report
                        </button>
                    </div>
                </div>
            </div>

            <!-- System Status -->
            <div class="card mt-3">
                <div class="card-header">
                    <h5 class="mb-0">System Status</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <small class="text-muted">CPU Usage</small>
                            <small class="text-muted">45%</small>
                        </div>
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar bg-dark" role="progressbar" style="width: 45%"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <small class="text-muted">Memory Usage</small>
                            <small class="text-muted">62%</small>
                        </div>
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar bg-dark" role="progressbar" style="width: 62%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="d-flex justify-content-between mb-1">
                            <small class="text-muted">Disk Usage</small>
                            <small class="text-muted">38%</small>
                        </div>
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar bg-dark" role="progressbar" style="width: 38%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection