<header class="header">
    <div class="d-flex align-items-center">
        <button class="btn btn-link d-md-none me-2" onclick="toggleSidebar()" type="button">
            <i class="bi bi-list" style="font-size: 1.5rem; color: var(--text-primary);"></i>
        </button>
        <h5 class="mb-0 d-none d-md-block">@yield('page-title', 'Dashboard')</h5>
    </div>

    <div class="user-dropdown">
        <div class="dropdown">
            <button class="btn btn-link text-decoration-none text-dark p-0 d-flex align-items-center" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="user-avatar me-2">
                    @if(Auth::user()->photo)
                    <img src="{{ asset('photo-user/' . Auth::user()->photo) }}" alt="Avatar" class="img-fluid rounded-circle" style="width: 40px; height: 40px;">
                    @else
                    <i class="bi bi-person-fill"></i>
                    @endif
                </div>
                <span class="d-none d-md-inline">{{ Auth::user()->name ?? 'Admin' }}</span>
                <i class="bi bi-chevron-down ms-2"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="userDropdown">
                <li>
                    <a class="dropdown-item" href="{{ route('profile.index') }}">
                        <i class="bi bi-person me-2"></i> Profile
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('setting.index') }}">
                        <i class="bi bi-gear me-2"></i> Settings
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li>
                    @if(Route::has('logout'))
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item text-danger">
                            <i class="bi bi-box-arrow-right me-2"></i> Logout
                        </button>
                    </form>
                    @else
                    <a class="dropdown-item text-danger" href="#">
                        <i class="bi bi-box-arrow-right me-2"></i> Logout
                    </a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</header>