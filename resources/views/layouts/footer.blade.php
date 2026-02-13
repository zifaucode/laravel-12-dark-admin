@php
use App\Models\Setting;
$setting = Setting::first();
@endphp

<footer class="mt-auto py-3 border-top" style="background-color: var(--primary-bg); border-color: var(--border-color) !important;">
    <div class="container-fluid px-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <small class="text-muted">
                    &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. {{ $setting->footer ?? 'All rights reserved' }}
                </small>
            </div>
            <div class="col-md-6 text-md-end">
                <small class="text-muted">
                    Version 1.0.0
                </small>
            </div>
        </div>
    </div>
</footer>