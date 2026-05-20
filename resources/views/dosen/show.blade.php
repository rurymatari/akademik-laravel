@extends('layouts.main')

@section('title', 'Detail Dosen - ' . $dosen->nama)

@section('content')
<div class="container py-4">

    {{-- Form Card --}}
    <div class="card card-premium shadow border-0" style="max-width: 800px; margin: 0 auto;">
        
        <div class="card-premium-header bg-primary">
            <h4 class="fw-bold m-0">Detail Data Dosen</h4>
        </div>

        <div class="card-body p-4 bg-white">

            {{-- NIP --}}
            <div class="mb-3">
                <label class="form-label">NIP</label>
                <input type="text" 
                       class="form-control bg-light"
                       value="{{ $dosen->nik }}"
                       readonly>
            </div>

            {{-- Nama Lengkap --}}
            <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" 
                       class="form-control bg-light"
                       value="{{ $dosen->nama }}"
                       readonly>
            </div>

            {{-- Email --}}
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" 
                       class="form-control bg-light"
                       value="{{ $dosen->email }}"
                       readonly>
            </div>

            {{-- Nomor Telepon --}}
            <div class="mb-3">
                <label class="form-label">Nomor Telepon</label>
                <input type="text" 
                       class="form-control bg-light"
                       value="{{ $dosen->notelp }}"
                       readonly>
            </div>

            {{-- Program Studi --}}
            <div class="mb-3">
                <label class="form-label">Program Studi</label>
                <input type="text" 
                       class="form-control bg-light"
                       value="{{ $dosen->prodi }}"
                       readonly>
            </div>

            {{-- Alamat --}}
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea rows="4"
                          class="form-control bg-light"
                          readonly>{{ $dosen->alamat }}</textarea>
            </div>

            {{-- Action Buttons on the Left --}}
            <div class="d-flex gap-2 mt-4 pt-3 border-top">
                <a href="{{ route('dosen.index') }}" class="btn btn-secondary px-4 py-2">
                    Kembali
                </a>
                <a href="{{ route('dosen.edit', $dosen->id) }}" class="btn btn-warning px-4 py-2 text-dark fw-semibold">
                    Edit Data
                </a>
            </div>

        </div>
    </div>

</div>
@endsection