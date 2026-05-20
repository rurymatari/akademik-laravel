@extends('layouts.main')

@section('title', 'Daftar Mahasiswa - Akademik TI')

@section('content')
<div class="container py-4">

    {{-- Breadcrumb / Page Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1" style="color: #212529; font-size: 2rem;">Daftar Mahasiswa</h2>
            <p class="text-muted mb-0" style="font-size: 1rem;">Data mahasiswa Jurusan Teknologi Informasi.</p>
        </div>
        <div>
            <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary rounded-pill-custom px-4 py-2 d-inline-flex align-items-center gap-2" style="background-color: #0d6efd; border-color: #0d6efd; font-weight: 500; font-size: 0.95rem;">
                <i class="bi bi-plus-circle"></i> Tambah Mahasiswa
            </a>
        </div>
    </div>

    {{-- Responsive List Card --}}
    <div class="card table-card-custom shadow-sm border-0 mb-4">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table align-middle m-0">
                    <thead>
                        <tr>
                            <th class="text-center" width="60">No</th>
                            <th width="120">NIM</th>
                            <th>Nama</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Email</th>
                            <th>Prodi</th>
                            <th>Alamat</th>
                            <th class="text-center" width="280">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($mahasiswa as $item)
                            <tr>
                                <td class="text-center fw-semibold text-muted">
                                    {{ $loop->iteration + ($mahasiswa->currentPage() - 1) * $mahasiswa->perPage() }}
                                </td>
                                <td>{{ $item->nim }}</td>
                                <td class="fw-semibold text-dark">{{ $item->nama_lengkap }}</td>
                                <td>{{ $item->tempat_lahir }}</td>
                                <td>{{ \Carbon\Carbon::parse($item->tgl_lahir)->format('j M Y') }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ strtoupper($item->prodi) }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('mahasiswa.show', $item->id) }}" class="btn btn-primary rounded-pill-custom btn-sm px-3 py-1.5 d-inline-flex align-items-center gap-1 text-white" style="font-size: 0.8rem; background-color: #0d6efd; border-color: #0d6efd;">
                                            <i class="bi bi-eye"></i> Show
                                        </a>
                                        <a href="{{ route('mahasiswa.edit', $item->id) }}" class="btn btn-warning rounded-pill-custom btn-sm px-3 py-1.5 d-inline-flex align-items-center gap-1 text-dark" style="font-size: 0.8rem; background-color: #ffc107; border-color: #ffc107;">
                                            <i class="bi bi-pencil-square"></i> Edit
                                        </a>
                                        <form action="{{ route('mahasiswa.destroy', $item->id) }}" method="POST" class="m-0 delete-form d-inline">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger rounded-pill-custom btn-sm px-3 py-1.5 d-inline-flex align-items-center gap-1 text-white" style="font-size: 0.8rem; background-color: #dc3545; border-color: #dc3545;">
                                                <i class="bi bi-trash"></i> Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" class="text-center py-5">
                                    <div class="text-muted fs-3 mb-2"><i class="bi bi-folder2-open"></i></div>
                                    <h5 class="fw-bold mb-1">Data Mahasiswa Kosong</h5>
                                    <p class="text-muted mb-0">Klik tombol "Tambah Mahasiswa" di atas untuk menambahkan data baru.</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Custom Styled Pagination --}}
    @if ($mahasiswa->hasPages())
        <div class="d-flex justify-content-between align-items-center mt-4">
            <div class="text-muted fs-8">
                Menampilkan {{ $mahasiswa->firstItem() ?? 0 }} - {{ $mahasiswa->lastItem() ?? 0 }} dari {{ $mahasiswa->total() }} Mahasiswa
            </div>
            <div>
                {{ $mahasiswa->links('pagination::bootstrap-5') }}
            </div>
        </div>
    @endif

</div>

<style>
    .hover-primary:hover {
        color: var(--primary-color) !important;
        text-decoration: underline !important;
    }
</style>
@endsection