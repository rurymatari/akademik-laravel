@extends('layouts.main')

@section('title', 'Daftar Dosen - Akademik TI')

@section('content')
<div class="container py-4">

    {{-- Breadcrumb / Page Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1" style="color: #212529; font-size: 2rem;">Daftar Dosen</h2>
            <p class="text-muted mb-0" style="font-size: 1rem;">Kelola seluruh data informasi dosen pengajar Jurusan Teknologi Informasi.</p>
        </div>
        <div>
            <a href="{{ route('dosen.create') }}" class="btn btn-primary rounded-pill-custom px-4 py-2 d-inline-flex align-items-center gap-2" style="background-color: #0d6efd; border-color: #0d6efd; font-weight: 500; font-size: 0.95rem;">
                <i class="bi bi-plus-circle"></i> Tambah Dosen
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
                            <th width="140">NIK</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Nomor Telepon</th>
                            <th>Prodi</th>
                            <th>Alamat</th>
                            <th class="text-center" width="280">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($dosen as $item)
                            <tr>
                                <td class="text-center fw-semibold text-muted">
                                    {{ $loop->iteration + ($dosen->currentPage() - 1) * $dosen->perPage() }}
                                </td>
                                <td>{{ $item->nik }}</td>
                                <td class="fw-semibold text-dark">{{ $item->nama }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->notelp }}</td>
                                <td>{{ strtoupper($item->prodi) }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('dosen.show', $item->id) }}" class="btn btn-primary rounded-pill-custom btn-sm px-3 py-1.5 d-inline-flex align-items-center gap-1 text-white" style="font-size: 0.8rem; background-color: #0d6efd; border-color: #0d6efd;">
                                            <i class="bi bi-eye"></i> Show
                                        </a>
                                        <a href="{{ route('dosen.edit', $item->id) }}" class="btn btn-warning rounded-pill-custom btn-sm px-3 py-1.5 d-inline-flex align-items-center gap-1 text-dark" style="font-size: 0.8rem; background-color: #ffc107; border-color: #ffc107;">
                                            <i class="bi bi-pencil-square"></i> Edit
                                        </a>
                                        <form action="{{ route('dosen.destroy', $item->id) }}" method="POST" class="m-0 delete-form d-inline">
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
                                <td colspan="8" class="text-center py-5">
                                    <div class="text-muted fs-3 mb-2"><i class="bi bi-folder2-open"></i></div>
                                    <h5 class="fw-bold mb-1">Data Dosen Kosong</h5>
                                    <p class="text-muted mb-0">Klik tombol "Tambah Dosen" di atas untuk menambahkan data baru.</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Custom Styled Pagination --}}
    @if ($dosen->hasPages())
        <div class="d-flex justify-content-between align-items-center mt-4">
            <div class="text-muted fs-8">
                Menampilkan {{ $dosen->firstItem() ?? 0 }} - {{ $dosen->lastItem() ?? 0 }} dari {{ $dosen->total() }} Dosen
            </div>
            <div>
                {{ $dosen->links('pagination::bootstrap-5') }}
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