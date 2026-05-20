<header>
    <!-- Fixed Glassmorphism Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-custom py-3">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <i class="bi bi-mortarboard-fill fs-4 text-cyan"></i>
                <span>Akademik <span class="fw-light text-muted">TI</span></span>
            </a>
            
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4 gap-2">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">
                            <i class="bi bi-house-door me-1"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('mahasiswa.*') ? 'active' : '' }}" href="{{ route('mahasiswa.index') }}">
                            <i class="bi bi-people me-1"></i> Mahasiswa
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('dosen.*') ? 'active' : '' }}" href="{{ route('dosen.index') }}">
                            <i class="bi bi-person-workspace me-1"></i> Dosen
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-journal-code me-1"></i> Prodi
                        </a>
                    </li>
                </ul>
                <form class="d-flex position-relative">
                    <input class="form-control pe-5" type="search" placeholder="Cari data..." aria-label="Search" style="border-radius: 30px; font-size: 0.85rem; width: 220px; background-color: rgba(255,255,255,0.08); border-color: rgba(255,255,255,0.15); color: #fff;">
                    <button class="btn btn-link position-absolute end-0 top-50 translate-middle-y text-white-50 p-2" type="submit" style="outline: none; box-shadow: none;">
                        <i class="bi bi-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </nav>
</header>