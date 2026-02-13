@php
use App\Models\Setting;
$setting = Setting::first();
@endphp
<aside class="sidebar">
    <div class="sidebar-brand">
        <img src="{{ asset('img-web/' . $setting->logo ?? 'logo.png') }}" alt="Logo" class="img-fluid" style="width: 50px; height: 50px;">
        <span>{{ config('app.name', 'Admin Panel') }}</span>
    </div>

    <nav class="mt-3">
        <ul class="sidebar-menu">
            <li class="sidebar-menu-item">
                <a href="{{ route('dashboard') }}" class="sidebar-menu-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <i class="bi bi-speedometer2"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sidebar-menu-item">
                <a href="{{ route('profile.index') }}" class="sidebar-menu-link {{ request()->routeIs('profile.index') ? 'active' : '' }}">
                    <i class="bi bi-people"></i>
                    <span>Profile</span>
                </a>
            </li>

            <li class="sidebar-menu-item">
                <a href="{{ route('setting.index') }}" class="sidebar-menu-link {{ request()->routeIs('setting.index') ? 'active' : '' }}">
                    <i class="bi bi-gear"></i>
                    <span>Settings</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>