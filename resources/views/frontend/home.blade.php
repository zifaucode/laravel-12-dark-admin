@extends('frontend.layouts.app')

@section('title', 'Rakus - Home')

@section('content')

<!-- Hero Section -->
<section class="hero-section d-flex align-items-center" id="home">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <span class="badge bg-secondary-custom text-primary-custom mb-3 px-3 py-2 rounded-pill fw-bold">Perpustakaan Masyarakat</span>
                <h1 class="display-4 fw-bold mb-3 text-dark">Membuka Jendela Dunia Lewat <span class="text-primary-custom">Buku</span></h1>
                <p class="lead text-secondary mb-4">
                    Bergabunglah dengan komunitas literasi kami. Akses ribuan buku, ikuti event menarik, dan donasikan buku untuk masa depan yang lebih cerah.
                </p>
                <div class="d-flex gap-3">
                    <a href="#events" class="btn btn-custom btn-lg shadow-sm">Lihat Event</a>
                    <a href="#about" class="btn btn-outline-dark btn-lg ms-2">Tentang Kami</a>
                </div>
            </div>
            <div class="col-lg-6">
               <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1481627834876-b7833e8f5570?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Library" class="img-fluid rounded-2xl shadow-lg w-100 object-fit-cover" style="height: 400px;">
                    <div class="position-absolute bottom-0 start-0 bg-white p-4 rounded-xl shadow-lg m-4 d-none d-md-block" style="max-width: 250px;">
                        <div class="d-flex align-items-center mb-2">
                            <div class="bg-primary-custom text-white rounded-circle p-2 me-3">
                                <i class="bi bi-book fs-4"></i>
                            </div>
                            <div>
                                <h6 class="mb-0 fw-bold">5,000+</h6>
                                <small class="text-secondary">Buku Tersedia</small>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-5">
    <div class="container py-5">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-8">
                <h6 class="text-primary-custom fw-bold text-uppercase">Tentang Kami</h6>
                <h2 class="fw-bold mb-3">Membangun Budaya Literasi</h2>
                <p class="text-secondary">
                    Rakus hadir sebagai wadah bagi masyarakat untuk saling berbagi ilmu melalui buku. Kami percaya bahwa akses literasi yang mudah adalah hak setiap orang.
                </p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card-custom h-100 p-4 smooth-shadow text-center">
                    <div class="mb-3 text-primary-custom">
                        <i class="bi bi-people fs-1"></i>
                    </div>
                    <h5 class="fw-bold">Komunitas Aktif</h5>
                    <p class="text-secondary small">Bergabung dengan ribuan anggota yang memiliki minat yang sama dalam membaca dan berbagi.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-custom h-100 p-4 smooth-shadow text-center">
                    <div class="mb-3 text-primary-custom">
                        <i class="bi bi-calendar-event fs-1"></i>
                    </div>
                    <h5 class="fw-bold">Event Rutin</h5>
                    <p class="text-secondary small">Berbagai kegiatan literasi, bedah buku, dan workshop yang diadakan secara berkala.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-custom h-100 p-4 smooth-shadow text-center">
                    <div class="mb-3 text-primary-custom">
                        <i class="bi bi-heart fs-1"></i>
                    </div>
                    <h5 class="fw-bold">Donasi Buku</h5>
                    <p class="text-secondary small">Salurkan buku layak baca Anda untuk mereka yang membutuhkan di seluruh pelosok.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Events Section -->
<section id="events" class="py-5 bg-secondary-custom">
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-end mb-5">
            <div>
                <h6 class="text-primary-custom fw-bold text-uppercase">Event Kami</h6>
                <h2 class="fw-bold mb-0">Event Sedang Berlangsung</h2>
            </div>
            <a href="#" class="text-decoration-none fw-bold text-dark d-none d-md-block">Lihat Semua <i class="bi bi-arrow-right ms-1"></i></a>
        </div>

        <div class="row g-4">
            <!-- Event Item 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-custom h-100 overflow-hidden smooth-shadow">
                    <img src="https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Event 1" style="height: 200px; object-fit: cover;">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge bg-primary-custom text-white">Workshop</span>
                            <small class="text-secondary"><i class="bi bi-calendar me-1"></i> 25 Feb 2024</small>
                        </div>
                        <h5 class="card-title fw-bold mb-2">Menulis Kreatif untuk Pemula</h5>
                        <p class="card-text text-secondary small mb-4">Pelajari dasar-dasar penulisan kreatif langsung dari penulis best-seller.</p>
                        <hr class="border-secondary opacity-25">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-geo-alt text-primary-custom me-2"></i>
                                <small class="text-secondary">Perpus Rakus Lt. 2</small>
                            </div>
                            <a href="#" class="btn btn-sm btn-outline-dark rounded-pill px-3">Detail</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Event Item 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-custom h-100 overflow-hidden smooth-shadow">
                    <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Event 2" style="height: 200px; object-fit: cover;">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge bg-primary-custom text-white">Bedah Buku</span>
                            <small class="text-secondary"><i class="bi bi-calendar me-1"></i> 02 Mar 2024</small>
                        </div>
                        <h5 class="card-title fw-bold mb-2">Review Buku: Laut Bercerita</h5>
                        <p class="card-text text-secondary small mb-4">Diskusi mendalam mengenai novel sejarah fenomenal karya Leila S. Chudori.</p>
                        <hr class="border-secondary opacity-25">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-geo-alt text-primary-custom me-2"></i>
                                <small class="text-secondary">Online Zoom</small>
                            </div>
                            <a href="#" class="btn btn-sm btn-outline-dark rounded-pill px-3">Detail</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Event Item 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-custom h-100 overflow-hidden smooth-shadow">
                    <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Event 3" style="height: 200px; object-fit: cover;">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge bg-primary-custom text-white">Donasi</span>
                            <small class="text-secondary"><i class="bi bi-calendar me-1"></i> 10 Mar 2024</small>
                        </div>
                        <h5 class="card-title fw-bold mb-2">Bazar Buku Murah & Donasi</h5>
                        <p class="card-text text-secondary small mb-4">Temukan buku berkualitas dengan harga terjangkau. Sebagian hasil akan didonasikan.</p>
                        <hr class="border-secondary opacity-25">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-geo-alt text-primary-custom me-2"></i>
                                <small class="text-secondary">Halaman Depan</small>
                            </div>
                            <a href="#" class="btn btn-sm btn-outline-dark rounded-pill px-3">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Donation Stats Section -->
<section id="donation" class="py-5">
    <div class="container py-5">
        <div class="row align-items-center">
             <div class="col-lg-5 mb-4 mb-lg-0">
                <h6 class="text-primary-custom fw-bold text-uppercase">Statistik Donasi</h6>
                <h2 class="fw-bold mb-4">Terima Kasih Atas Kontribusi Anda</h2>
                <p class="text-secondary mb-4">
                    Setiap donasi yang Anda berikan sangat berarti bagi pengembangan literasi di Indonesia. Berikut adalah pencapaian yang telah kita raih bersama dalam event terakhir.
                </p>
                <div class="bg-secondary-custom p-4 rounded-xl mb-4">
                    <h4 class="fw-bold mb-3">Total Donasi Terkumpul</h4>
                    <h1 class="display-5 fw-bold text-primary-custom mb-0">Rp 45.250.000</h1>
                    <small class="text-secondary">Update Terakhir: 12 Feb 2024</small>
                </div>
                <a href="#" class="btn btn-custom btn-lg shadow-sm">Donasi Sekarang</a>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6">
                        <div class="p-4 border rounded-xl bg-white smooth-shadow text-center h-100 d-flex flex-column justify-content-center">
                            <h2 class="fw-bold display-6 text-dark mb-1">1,250</h2>
                            <p class="text-secondary mb-0">Buku Terkumpul</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-4 border rounded-xl bg-white smooth-shadow text-center h-100 d-flex flex-column justify-content-center">
                            <h2 class="fw-bold display-6 text-dark mb-1">320</h2>
                            <p class="text-secondary mb-0">Donatur</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="p-4 bg-dark text-white rounded-xl smooth-shadow d-flex justify-content-between align-items-center">
                            <div>
                                <h4 class="fw-bold mb-1">50+</h4>
                                <p class="text-white-50 mb-0">Komunitas Terbantu</p>
                            </div>
                            <i class="bi bi-globe fs-1 text-primary-custom"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
