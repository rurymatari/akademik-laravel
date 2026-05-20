@extends('layouts.main')

@section('title', 'Detail Mahasiswa - ' . $mahasiswa->nama_lengkap)

@section('content')
<div class="container py-4">

    {{-- Form Card --}}
    <div class="card card-premium shadow border-0" style="max-width: 800px; margin: 0 auto;">
        
        <div class="card-premium-header bg-primary">
            <h4 class="fw-bold m-0">Detail Data Mahasiswa</h4>
        </div>

        <div class="card-body p-4 bg-white">

            {{-- NIM --}}
            <div class="mb-3">
                <label class="form-label">NIM</label>
                <input type="text" 
                       class="form-control bg-light"
                       value="{{ $mahasiswa->nim }}"
                       readonly>
            </div>

            {{-- Nama Lengkap --}}
            <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" 
                       class="form-control bg-light"
                       value="{{ $mahasiswa->nama_lengkap }}"
                       readonly>
            </div>

            {{-- Tempat Lahir --}}
            <div class="mb-3">
                <label class="form-label">Tempat Lahir</label>
                <input type="text" 
                       class="form-control bg-light"
                       value="{{ $mahasiswa->tempat_lahir }}"
                       readonly>
            </div>

            {{-- Tanggal Lahir --}}
            <div class="mb-3">
                <label class="form-label">Tanggal Lahir</label>
                <input type="text" 
                       class="form-control bg-light"
                       value="{{ \Carbon\Carbon::parse($mahasiswa->tgl_lahir)->format('d M Y') }}"
                       readonly>
            </div>

            {{-- Email --}}
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" 
                       class="form-control bg-light"
                       value="{{ $mahasiswa->email }}"
                       readonly>
            </div>

            {{-- Program Studi --}}
            <div class="mb-3">
                <label class="form-label">Program Studi</label>
                <input type="text" 
                       class="form-control bg-light"
                       value="{{ $mahasiswa->prodi }}"
                       readonly>
            </div>

            {{-- Alamat --}}
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea rows="4"
                          class="form-control bg-light"
                          readonly>{{ $mahasiswa->alamat }}</textarea>
            </div>

            {{-- Action Buttons on the Left --}}
            <div class="d-flex gap-2 mt-4 pt-3 border-top">
                <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary px-4 py-2">
                    Kembali
                </a>
                <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-warning px-4 py-2 text-dark fw-semibold">
                    Edit Data
                </a>
            </div>

        </div>
    </div>

</div>
@endsection