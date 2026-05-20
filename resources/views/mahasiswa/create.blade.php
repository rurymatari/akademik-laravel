@extends('layouts.main')

@section('title', 'Tambah Mahasiswa - Akademik TI')

@section('content')
<div class="container py-4">

    {{-- Form Card --}}
    <div class="card card-premium shadow border-0" style="max-width: 800px; margin: 0 auto;">
        
        <div class="card-premium-header bg-primary">
            <h4 class="fw-bold m-0">Form Tambah Mahasiswa</h4>
        </div>

        <div class="card-body p-4 bg-white">

            <form action="{{ route('mahasiswa.store') }}" method="POST">
                @csrf

                {{-- Validation Error Alert --}}
                @if ($errors->any())
                    <div class="alert alert-danger d-flex align-items-center gap-2 mb-4" role="alert">
                        <i class="bi bi-exclamation-triangle-fill fs-5"></i>
                        <div>
                            <strong class="d-block mb-1">Terjadi kesalahan input:</strong>
                            <ul class="mb-0 fs-8 ps-3">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

                {{-- NIM --}}
                <div class="mb-3">
                    <label class="form-label">NIM</label>
                    <input type="text" 
                           name="nim" 
                           class="form-control @error('nim') is-invalid @enderror"
                           value="{{ old('nim') }}"
                           required>
                    @error('nim')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Nama Lengkap --}}
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" 
                           name="nama_lengkap" 
                           class="form-control @error('nama_lengkap') is-invalid @enderror"
                           value="{{ old('nama_lengkap') }}"
                           required>
                    @error('nama_lengkap')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Tempat Lahir --}}
                <div class="mb-3">
                    <label class="form-label">Tempat Lahir</label>
                    <input type="text" 
                           name="tempat_lahir" 
                           class="form-control @error('tempat_lahir') is-invalid @enderror"
                           value="{{ old('tempat_lahir') }}"
                           required>
                    @error('tempat_lahir')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Tanggal Lahir --}}
                <div class="mb-3">
                    <label class="form-label">Tanggal Lahir</label>
                    <input type="date" 
                           name="tgl_lahir" 
                           class="form-control @error('tgl_lahir') is-invalid @enderror"
                           value="{{ old('tgl_lahir') }}"
                           required>
                    @error('tgl_lahir')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Email --}}
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" 
                           name="email" 
                           class="form-control @error('email') is-invalid @enderror"
                           value="{{ old('email') }}"
                           required>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Program Studi --}}
                <div class="mb-3">
                    <label class="form-label">Program Studi</label>
                    <select name="prodi" class="form-select @error('prodi') is-invalid @enderror" required>
                        <option value="">-- Pilih Program Studi --</option>
                        <option value="TRPL" {{ old('prodi') == 'TRPL' ? 'selected' : '' }}>TRPL</option>
                        <option value="MI" {{ old('prodi') == 'MI' ? 'selected' : '' }}>MI</option>
                        <option value="TK" {{ old('prodi') == 'TK' ? 'selected' : '' }}>TK</option>
                        <option value="TEKKOM" {{ old('prodi') == 'TEKKOM' ? 'selected' : '' }}>TEKKOM</option>
                    </select>
                    @error('prodi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Alamat --}}
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea name="alamat"
                              rows="3"
                              class="form-control @error('alamat') is-invalid @enderror"
                              required>{{ old('alamat') }}</textarea>
                    @error('alamat')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Action Buttons on the Left --}}
                <div class="d-flex gap-2 mt-4 pt-3 border-top">
                    <button type="submit" class="btn btn-primary px-4 py-2">
                        Simpan
                    </button>
                    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary px-4 py-2">
                        Kembali
                    </a>
                </div>

            </form>

        </div>
    </div>

</div>
@endsection