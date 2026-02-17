@php
use App\Models\Setting;
$setting = Setting::first();
@endphp

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <title>Register - {{ $setting->title }}</title>
    <link rel="icon" href="{{ asset('img-web/' . ($setting->favicon ?? 'favicon.png')) }}">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        :root {
            --primary-bg: #ffffff;
            --secondary-bg: #f8f9fa;
            --dark-bg: #212529;
            --dark-secondary: #2c3034;
            --text-primary: #212529;
            --text-secondary: #6c757d;
            --border-color: #dee2e6;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background-color: var(--primary-bg);
            color: var(--text-primary);
            font-size: 14px;
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            margin: 0;
            overflow: hidden;
        }

        .login-wrapper {
            display: flex;
            width: 100%;
            min-height: 100vh;
        }

        .illustration-section {
            width: 40%;
            background: linear-gradient(135deg, var(--dark-bg) 0%, var(--dark-secondary) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        /* Disable all animations and transitions for illustration */
        .illustration-section * {
            animation: none !important;
            transition: none !important;
        }

        .illustration-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 2rem;
            position: relative;
        }

        .illustration-box {
            width: 240px;
            height: 240px;
            background: rgba(138, 138, 168, 0.15);
            border-radius: 32px;
            position: relative;
            margin-bottom: 2rem;
            box-shadow:
                0 30px 80px rgba(0, 0, 0, 0.5),
                inset 0 2px 15px rgba(255, 255, 255, 0.1),
                inset 0 -2px 15px rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transform: perspective(1000px) rotateY(-5deg) rotateX(5deg);
        }

        .illustration-box::before {
            content: '';
            position: absolute;
            top: 30px;
            left: 50%;
            transform: translateX(-50%);
            width: 50%;
            height: 12px;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 6px;
            box-shadow:
                0 3px 10px rgba(0, 0, 0, 0.3),
                inset 0 1px 3px rgba(255, 255, 255, 0.4);
        }

        .illustration-box::after {
            content: '';
            position: absolute;
            top: 30px;
            right: 45px;
            width: 50px;
            height: 50px;
            background: rgba(255, 217, 0, 0.9);
            border-radius: 10px;
            box-shadow:
                0 8px 25px rgba(255, 217, 0, 0.6),
                inset 0 2px 5px rgba(255, 255, 255, 0.3);
        }

        .illustration-circle {
            position: absolute;
            bottom: 40px;
            left: 35px;
            width: 50px;
            height: 50px;
            border: 3px solid rgba(255, 255, 255, 0.4);
            border-radius: 50%;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }

        .illustration-dots {
            position: absolute;
            bottom: 50px;
            right: 100px;
            display: flex;
            gap: 12px;
        }

        .illustration-dot {
            width: 16px;
            height: 16px;
            background: rgba(173, 216, 230, 0.8);
            border-radius: 50%;
            box-shadow: 0 4px 12px rgba(173, 216, 230, 0.6);
        }

        .checkmark-float {
            position: absolute;
            top: 40px;
            left: 50%;
            transform: translateX(-50%);
            width: 65px;
            height: 65px;
            background: rgba(255, 217, 0, 0.95);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
            font-weight: bold;
            box-shadow: 0 12px 35px rgba(255, 217, 0, 0.7);
            z-index: 10;
        }

        .form-section {
            width: 60%;
            background-color: var(--primary-bg);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 3rem;
        }

        .login-container {
            width: 100%;
            max-width: 450px;
        }

        .login-header {
            margin-bottom: 2rem;
        }

        .login-header h2 {
            font-size: 2rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
            letter-spacing: -0.5px;
        }

        .login-header p {
            color: var(--text-secondary);
            font-size: 0.95rem;
            margin-bottom: 0;
        }

        .form-label {
            font-weight: 500;
            margin-bottom: 0.5rem;
            color: var(--text-primary);
        }

        .form-control {
            border-radius: 8px;
            border: 1px solid var(--dark-bg);
            padding: 0.875rem 1rem;
            transition: all 0.2s ease;
            font-size: 0.95rem;
            background-color: var(--primary-bg);
        }

        .form-control:focus {
            border-color: var(--dark-bg);
            box-shadow: 0 0 0 0.15rem rgba(33, 37, 41, 0.1);
            outline: none;
        }

        .form-control::placeholder {
            color: #adb5bd;
        }

        .btn-login {
            background-color: var(--dark-bg);
            border-color: var(--dark-bg);
            color: #ffffff;
            padding: 0.875rem;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.2s ease;
            width: 100%;
            font-size: 0.95rem;
        }

        .btn-login:hover {
            background-color: var(--dark-secondary);
            border-color: var(--dark-secondary);
            color: #ffffff;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(33, 37, 41, 0.2);
        }

        .btn-login:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }

        /* Touch improvements for mobile */
        @media (hover: none) and (pointer: coarse) {
            .btn-login:active {
                transform: translateY(0);
                box-shadow: 0 2px 8px rgba(33, 37, 41, 0.15);
            }

            .password-toggle:active {
                opacity: 0.7;
            }

            .form-control:focus {
                border-width: 2px;
            }
        }

        .alert {
            border-radius: 8px;
            border: none;
            margin-bottom: 1.5rem;
        }

        .password-toggle {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: var(--text-secondary);
            cursor: pointer;
            z-index: 10;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .password-toggle:hover {
            color: var(--text-primary);
        }

        .password-wrapper {
            position: relative;
            width: 100%;
        }

        .password-wrapper .form-control {
            padding-right: 45px;
        }

        .form-link {
            color: var(--dark-bg);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s ease;
        }

        .form-link:hover {
            color: var(--dark-secondary);
            text-decoration: underline;
        }

        .form-footer {
            text-align: center;
            font-size: 0.9rem;
            color: var(--text-secondary);
        }

        .form-footer>div {
            margin-bottom: 0.5rem;
        }

        .form-footer>div:last-child {
            margin-bottom: 0;
        }

        .form-footer a {
            color: var(--dark-bg);
            text-decoration: none;
            font-weight: 500;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }

        /* Tablet and below */
        @media (max-width: 968px) {

            /* Prevent horizontal scroll on mobile */
            html,
            body {
                overflow-x: hidden;
                width: 100%;
                position: relative;
            }

            body {
                min-height: 100vh;
                min-height: -webkit-fill-available;
                /* iOS Safari fix */
                overflow-y: auto;
            }

            .login-wrapper {
                flex-direction: column;
                overflow-y: auto;
                min-height: 100vh;
                min-height: -webkit-fill-available;
                /* iOS Safari fix */
            }

            .illustration-section {
                width: 100%;
                min-height: 250px;
                max-height: 300px;
            }

            .illustration-box {
                width: 180px;
                height: 180px;
                margin-bottom: 1rem;
            }

            .checkmark-float {
                width: 50px;
                height: 50px;
                font-size: 1.5rem;
            }

            .form-section {
                width: 100%;
                padding: 2rem;
            }

            .login-container {
                max-width: 100%;
            }
        }

        /* Mobile devices */
        @media (max-width: 768px) {
            body {
                overflow-y: auto;
            }

            .login-wrapper {
                min-height: 100vh;
                height: auto;
            }

            .illustration-section {
                min-height: 200px;
                max-height: 250px;
                padding: 1rem;
            }

            .illustration-container {
                padding: 1rem;
            }

            .illustration-box {
                width: 150px;
                height: 150px;
                margin-bottom: 0.75rem;
                transform: perspective(800px) rotateY(-3deg) rotateX(3deg);
            }

            .checkmark-float {
                width: 45px;
                height: 45px;
                font-size: 1.25rem;
                top: 30px;
            }

            .illustration-circle {
                width: 35px;
                height: 35px;
                bottom: 25px;
                left: 25px;
            }

            .illustration-dots {
                bottom: 30px;
                right: 60px;
                gap: 8px;
            }

            .illustration-dot {
                width: 12px;
                height: 12px;
            }

            .form-section {
                padding: 1.5rem;
                min-height: calc(100vh - 250px);
            }

            .login-header h2 {
                font-size: 1.75rem;
            }

            .login-header p {
                font-size: 0.9rem;
            }

            .form-control {
                padding: 0.75rem 0.875rem;
                font-size: 16px;
                /* Prevents zoom on iOS */
            }

            .btn-login {
                padding: 0.875rem;
                font-size: 1rem;
            }
        }

        /* Small mobile devices */
        @media (max-width: 576px) {

            .illustration-section {
                min-height: 180px;
                max-height: 220px;
            }

            .illustration-box {
                width: 120px;
                height: 120px;
                margin-bottom: 0.5rem;
            }

            .checkmark-float {
                width: 40px;
                height: 40px;
                font-size: 1.1rem;
                top: 25px;
            }

            .illustration-circle {
                width: 30px;
                height: 30px;
                bottom: 20px;
                left: 20px;
            }

            .illustration-dots {
                bottom: 25px;
                right: 50px;
                gap: 6px;
            }

            .illustration-dot {
                width: 10px;
                height: 10px;
            }

            .form-section {
                padding: 1.25rem 1rem;
            }

            .login-header {
                margin-bottom: 1.5rem;
            }

            .login-header h2 {
                font-size: 1.5rem;
                margin-bottom: 0.25rem;
            }

            .login-header p {
                font-size: 0.85rem;
            }

            .form-label {
                font-size: 0.9rem;
                margin-bottom: 0.375rem;
            }

            .form-control {
                padding: 0.7rem 0.8rem;
                font-size: 16px;
                /* Prevents zoom on iOS */
                border-radius: 6px;
            }

            .btn-login {
                padding: 0.8rem;
                font-size: 0.95rem;
                border-radius: 6px;
            }

            .alert {
                font-size: 0.875rem;
                padding: 0.75rem;
                margin-bottom: 1rem;
            }

            .password-toggle {
                right: 10px;
                font-size: 1rem;
            }

            .password-wrapper .form-control {
                padding-right: 40px;
            }

            .mb-4 {
                margin-bottom: 1rem !important;
            }
        }

        /* Extra small devices */
        @media (max-width: 400px) {
            .illustration-section {
                min-height: 150px;
                max-height: 180px;
            }

            .illustration-box {
                width: 100px;
                height: 100px;
            }

            .checkmark-float {
                width: 35px;
                height: 35px;
                font-size: 1rem;
            }

            .form-section {
                padding: 1rem 0.75rem;
            }

            .login-header h2 {
                font-size: 1.35rem;
            }
        }

        /* Landscape orientation on mobile */
        @media (max-width: 968px) and (orientation: landscape) {
            .illustration-section {
                min-height: 150px;
                max-height: 180px;
            }

            .illustration-box {
                width: 120px;
                height: 120px;
            }

            .form-section {
                padding: 1rem;
            }
        }
    </style>
</head>

<body>
    <div class="login-wrapper">
        <!-- Left Section: Illustration -->
        <div class="illustration-section">
            <div class="illustration-container">
                <img src="{{ asset('img-web/' . ($setting->logo ?? 'logo.png')) }}" alt="Logo" width="200">
            </div>
        </div>

        <!-- Right Section: Login Form -->
        <div class="form-section">
            <div class="login-container">
                <div class="login-header">
                    <h2>REGISTER {{ $setting->title ?? 'Admin' }}</h2>
                </div>

                @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="bi bi-exclamation-triangle me-2"></i>
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle me-2"></i>
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="bi bi-exclamation-triangle me-2"></i>
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <form id="loginForm" method="POST" action="{{ route('register') }}">
                    @csrf


                    <div class="mb-4">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text"
                            class="form-control @error('name') is-invalid @enderror"
                            id="name"
                            name="name"
                            value="{{ old('name', '') }}"
                            placeholder="Masukkan Nama Lengkap"
                            required
                            autofocus>
                        {{ old('name', '') }}
                        @error('name')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="text"
                            class="form-control @error('email') is-invalid @enderror"
                            id="email"
                            name="email"
                            value="{{ old('email', '') }}"
                            placeholder="Masukan Email"
                            required
                            autofocus>
                        {{ old('email', '') }}
                        @error('email')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="username" class="form-label">Username</label>
                        <input type="text"
                            class="form-control @error('username') is-invalid @enderror"
                            id="username"
                            name="username"
                            value="{{ old('username', '') }}"
                            placeholder="Masukkan Username"
                            required
                            autofocus>
                        {{ old('username', '') }}
                        @error('username')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <div class="password-wrapper">
                            <input type="password"
                                class="form-control @error('password') is-invalid @enderror"
                                id="password"
                                name="password"
                                placeholder="Masukkan Password"
                                required>
                            <button type="button" class="password-toggle" onclick="togglePassword()">
                                <i class="bi bi-eye" id="passwordToggleIcon"></i>
                            </button>
                        </div>
                        @error('password')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="mb-4">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <div class="password-wrapper">
                            <input type="password"
                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                id="password_confirmation"
                                name="password_confirmation"
                                placeholder="Masukkan Konfirmasi Password"
                                required>
                            <button type="button" class="password-toggle" onclick="togglePassword()">
                                <i class="bi bi-eye" id="passwordToggleIcon"></i>
                            </button>
                        </div>
                        @error('password_confirmation')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-login mb-4" id="loginBtn">
                        <span id="loginBtnText">LOGIN</span>
                    </button>


                </form>
            </div>
        </div>
    </div>

    <!-- Error suppression before Bootstrap loads -->
    <script>
        // Suppress checkout popup errors globally
        (function() {
            // Suppress console errors
            const originalError = console.error;
            console.error = function(...args) {
                const errorText = args.map(arg => String(arg)).join(' ');
                if (errorText.includes('checkout popup') || errorText.includes('checkout')) {
                    return; // Suppress this error
                }
                originalError.apply(console, args);
            };

            // Suppress window errors (capture phase)
            window.addEventListener('error', function(e) {
                const errorMessage = e.message || e.error?.message || String(e.error || '');
                if (errorMessage.includes('checkout popup') || errorMessage.includes('checkout')) {
                    e.preventDefault();
                    e.stopPropagation();
                    e.stopImmediatePropagation();
                    return false;
                }
            }, true);

            // Suppress unhandled promise rejections
            window.addEventListener('unhandledrejection', function(e) {
                const reason = e.reason;
                let errorMessage = '';

                if (reason) {
                    if (typeof reason === 'string') {
                        errorMessage = reason;
                    } else if (reason.message) {
                        errorMessage = reason.message;
                    } else if (reason.toString) {
                        errorMessage = reason.toString();
                    }
                }

                if (errorMessage.includes('checkout popup') || errorMessage.includes('checkout')) {
                    e.preventDefault();
                    e.stopPropagation();
                    e.stopImmediatePropagation();
                    return false;
                }
            }, true);

            // Suppress errors in async functions
            const originalAsyncFunction = window.AsyncFunction || (async function() {}).constructor;
        })();
    </script>

    <script>
        // Vanilla JavaScript - No Bootstrap JS needed
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const passwordToggleIcon = document.getElementById('passwordToggleIcon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordToggleIcon.classList.remove('bi-eye');
                passwordToggleIcon.classList.add('bi-eye-slash');
            } else {
                passwordInput.type = 'password';
                passwordToggleIcon.classList.remove('bi-eye-slash');
                passwordToggleIcon.classList.add('bi-eye');
            }
        }

        // Form submission
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            const loginBtn = document.getElementById('loginBtn');
            const loginBtnText = document.getElementById('loginBtnText');

            loginBtn.disabled = true;
            loginBtnText.textContent = 'Memproses...';
        });

        // Simple alert dismiss functionality (replaces Bootstrap alert dismiss)
        document.addEventListener('DOMContentLoaded', function() {
            const alertCloseButtons = document.querySelectorAll('.btn-close');
            alertCloseButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    const alert = this.closest('.alert');
                    if (alert) {
                        alert.style.transition = 'opacity 0.3s';
                        alert.style.opacity = '0';
                        setTimeout(function() {
                            alert.remove();
                        }, 300);
                    }
                });
            });
        });
    </script>
</body>

</html>