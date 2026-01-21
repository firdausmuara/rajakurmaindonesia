@extends('admin.layouts.app')

@section('title', isset($berita) ? 'Edit Berita' : 'Tambah Berita')
@section('page-title', isset($berita) ? 'Edit Berita' : 'Tambah Berita')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item"><a href="{{ route('admin.berita.index') }}">Berita</a></li>
<li class="breadcrumb-item active">{{ isset($berita) ? 'Edit' : 'Tambah' }}</li>
@endsection

@section('content')
<form action="{{ isset($berita) ? route('admin.berita.update', $berita) : route('admin.berita.store') }}" 
      method="POST" enctype="multipart/form-data">
    @csrf
    @if(isset($berita))
        @method('PUT')
    @endif
    
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Informasi Berita</h3>
                </div>
                <div class="card-body">
                    <!-- Judul -->
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul Berita <span class="text-danger">*</span></label>
                        <input type="text" name="judul" id="judul" 
                               class="form-control @error('judul') is-invalid @enderror" 
                               value="{{ old('judul', $berita->judul ?? '') }}" 
                               placeholder="Masukkan judul berita" required>
                        @error('judul')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Konten -->
                    <div class="mb-3">
                        <label for="konten" class="form-label">Konten <span class="text-danger">*</span></label>
                        <textarea name="konten" id="konten" rows="15"
                                  class="form-control @error('konten') is-invalid @enderror" 
                                  placeholder="Tulis konten berita disini..." required>{{ old('konten', $berita->konten ?? '') }}</textarea>
                        @error('konten')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <small class="text-muted">Anda bisa gunakan HTML untuk formatting</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <!-- Status & Publish -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Status Publikasi</h3>
                </div>
                <div class="card-body">
                    <!-- Status -->
                    <div class="mb-3">
                        <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                        <select name="status" id="status" class="form-select @error('status') is-invalid @enderror" required>
                            <option value="draft" {{ old('status', $berita->status ?? '') == 'draft' ? 'selected' : '' }}>
                                Draft
                            </option>
                            <option value="published" {{ old('status', $berita->status ?? 'published') == 'published' ? 'selected' : '' }}>
                                Published
                            </option>
                        </select>
                        @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Tanggal Publish -->
                    <div class="mb-3">
                        <label for="tanggal_publish" class="form-label">Tanggal Publish <span class="text-danger">*</span></label>
                        <input type="date" name="tanggal_publish" id="tanggal_publish" 
                               class="form-control @error('tanggal_publish') is-invalid @enderror" 
                               value="{{ old('tanggal_publish', isset($berita) ? $berita->tanggal_publish->format('Y-m-d') : date('Y-m-d')) }}" 
                               required>
                        @error('tanggal_publish')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Gambar -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Gambar Berita</h3>
                </div>
                <div class="card-body">
                    @if(isset($berita) && $berita->gambar)
                    <div class="mb-3">
                        <img src="{{ asset('storage/' . $berita->gambar) }}" 
                             alt="{{ $berita->judul }}" 
                             class="img-fluid rounded">
                    </div>
                    @endif
                    
                    <div class="mb-3">
                        <label for="gambar" class="form-label">
                            {{ isset($berita) ? 'Ganti Gambar' : 'Upload Gambar' }}
                        </label>
                        <input type="file" name="gambar" id="gambar" 
                               class="form-control @error('gambar') is-invalid @enderror" 
                               accept="image/*">
                        @error('gambar')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <small class="text-muted">Format: JPG, PNG, GIF. Max: 2MB</small>
                    </div>

                    <!-- Preview -->
                    <div id="preview" class="d-none">
                        <img src="" alt="Preview" class="img-fluid rounded" id="preview-img">
                    </div>
                </div>
            </div>

            <!-- Submit Buttons -->
            <div class="card">
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-save"></i> {{ isset($berita) ? 'Update Berita' : 'Simpan Berita' }}
                        </button>
                        <a href="{{ route('admin.berita.index') }}" class="btn btn-secondary">
                            <i class="bi bi-x"></i> Batal
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

@push('scripts')
<script>
// Image preview
document.getElementById('gambar').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('preview').classList.remove('d-none');
            document.getElementById('preview-img').src = e.target.result;
        }
        reader.readAsDataURL(file);
    }
});
</script>
@endpush