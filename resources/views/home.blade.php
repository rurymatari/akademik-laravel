@extends('layouts.main')

@section('title', 'Beranda - Sistem Informasi Akademik')

@section('content')
<div class="container py-4">

    {{-- Minimalist Hero Section --}}
    <div class="hero-premium mb-5">
        <div class="row align-items-center">
            <div class="col-lg-8 text-center text-lg-start mb-4 mb-lg-0">
                <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill fs-8 fw-semibold mb-3">
                    <i class="bi bi-rocket-takeoff-fill me-1"></i> Dashboard Akademik v2.0
                </span>
                <h1 class="display-4 fw-extrabold mb-3 text-main">
                    Sistem Informasi Mahasiswa & Dosen
                </h1>
                <p class="lead mb-4 text-muted">
                    Sistem informasi modern berbasis web untuk mengelola dan memantau data akademik Jurusan Teknologi Informasi dengan mudah, cepat, dan terintegrasi.
                </p>
                <div class="d-flex flex-wrap gap-3 justify-content-center justify-content-lg-start">
                    <a href="{{ route('mahasiswa.index') }}" class="btn btn-primary btn-lg px-4 py-2.5 rounded-3 fw-bold shadow-sm hover-lift" style="background-color: var(--primary-color); border-color: var(--primary-color);">
                        <i class="bi bi-people-fill me-2"></i> Data Mahasiswa
                    </a>
                    <a href="{{ route('dosen.index') }}" class="btn btn-outline-secondary btn-lg px-4 py-2.5 rounded-3 fw-bold hover-lift">
                        <i class="bi bi-person-workspace me-2"></i> Data Dosen
                    </a>
                </div>
            </div>
            <div class="col-lg-4 text-center d-none d-lg-block">
                <div class="position-relative d-inline-block">
                    <!-- Elegant visual placeholder with solid colors -->
                    <svg class="img-fluid" width="260" height="260" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="100" cy="100" r="80" fill="var(--primary-soft)" stroke="var(--border-color)" stroke-width="2"/>
                        <path d="M100 45L40 75L100 105L160 75L100 45Z" fill="var(--primary-color)" stroke="var(--primary-hover)" stroke-width="2" stroke-linejoin="round"/>
                        <path d="M60 90V130C60 145 78 155 100 155C122 155 140 145 140 130V90" stroke="var(--text-main)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M150 78V125" stroke="var(--secondary-color)" stroke-width="2.5" stroke-linecap="round"/>
                        <circle cx="150" cy="125" r="4" fill="var(--secondary-color)"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    {{-- Statistik Cards --}}
    <h4 class="mb-4 fw-bold text-main d-flex align-items-center gap-2">
        <i class="bi bi-grid-fill text-primary"></i> Ringkasan Sistem
    </h4>
    
    <div class="row g-4 mb-5">
        {{-- Card 1: Mahasiswa --}}
        <div class="col-md-4">
            <div class="stat-card" style="--theme-color: var(--primary-color); --theme-bg: var(--primary-soft);">
                <div class="stat-icon">
                    <i class="bi bi-mortarboard-fill"></i>
                </div>
                <h5 class="fw-bold mb-1">Total Mahasiswa</h5>
                <p class="text-muted mb-3 fs-7">
                    Manajemen data identitas, biodata, program studi secara terpusat.
                </p>
                <a href="{{ route('mahasiswa.index') }}" class="text-primary text-decoration-none fw-semibold d-flex align-items-center gap-1 hover-gap">
                    Kelola Mahasiswa <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>

        {{-- Card 2: Dosen --}}
        <div class="col-md-4">
            <div class="stat-card" style="--theme-color: var(--secondary-color); --theme-bg: var(--secondary-soft);">
                <div class="stat-icon">
                    <i class="bi bi-person-video3"></i>
                </div>
                <h5 class="fw-bold mb-1">Dosen Pengajar</h5>
                <p class="text-muted mb-3 fs-7">
                    Kelola data dosen, NIK, bidang prodi, dan detail kontak akademik.
                </p>
                <a href="{{ route('dosen.index') }}" class="text-secondary-color text-decoration-none fw-semibold d-flex align-items-center gap-1 hover-gap" style="color: var(--secondary-color) !important;">
                    Kelola Dosen <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>

        {{-- Card 3: Kurikulum / Program Studi --}}
        <div class="col-md-4">
            <div class="stat-card" style="--theme-color: var(--success-color); --theme-bg: var(--success-soft);">
                <div class="stat-icon">
                    <i class="bi bi-book-half"></i>
                </div>
                <h5 class="fw-bold mb-1">Program Studi</h5>
                <p class="text-muted mb-3 fs-7">
                    Mendukung integrasi kurikulum terstandarisasi (TRPL, MI, TK, TEKKOM).
                </p>
                <a href="#" class="text-success text-decoration-none fw-semibold d-flex align-items-center gap-1 hover-gap">
                    Lihat Prodi <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

    {{-- Tentang Sistem --}}
    <div class="card card-premium">
        <div class="card-body p-4">
            <div class="row align-items-center">
                <div class="col-md-1 d-none d-md-block text-center">
                    <div class="fs-2 text-primary opacity-50">
                        <i class="bi bi-info-circle-fill"></i>
                    </div>
                </div>
                <div class="col-md-11">
                    <h5 class="fw-bold mb-2">Tentang Sistem Informasi Akademik</h5>
                    <p class="text-muted mb-0 fs-7">
                        Sistem ini dirancang untuk memudahkan staf administrasi dan mahasiswa dalam mengelola data pribadi, nomor induk (NIM/NIK), email resmi, tempat tanggal lahir, serta program studi. Dibangun dengan framework Laravel modern dan UI Bootstrap 5 yang disesuaikan secara premium guna menjamin kenyamanan navigasi dan pengoperasian data (CRUD) secara mulus.
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>

<style>
    .fs-7 {
        font-size: 0.875rem;
    }
    .hover-gap i {
        transition: transform 0.2s ease;
    }
    .hover-gap:hover i {
        transform: translateX(4px);
    }
</style>
@endsection