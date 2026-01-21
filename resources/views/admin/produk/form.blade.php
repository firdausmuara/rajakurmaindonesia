@extends('admin.layouts.app')

@section('title', isset($produk) ? 'Edit Produk' : 'Tambah Produk')
@section('page-title', isset($produk) ? 'Edit Produk' : 'Tambah Produk')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item"><a href="{{ route('admin.produk.index') }}">Produk</a></li>
<li class="breadcrumb-item active">{{ isset($produk) ? 'Edit' : 'Tambah' }}</li>
@endsection

@section('content')
<form action="{{ isset($produk) ? route('admin.produk.update', $produk) : route('admin.produk.store') }}" 
      method="POST" enctype="multipart/form-data">
    @csrf
    @if(isset($produk))
        @method('PUT')
    @endif
    
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Informasi Produk</h3>
                </div>
                <div class="card-body">
                    <!-- Nama Produk -->
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Produk <span class="text-danger">*</span></label>
                        <input type="text" name="nama" id="nama" 
                               class="form-control @error('nama') is-invalid @enderror" 
                               value="{{ old('nama', $produk->nama ?? '') }}" 
                               placeholder="Masukkan nama produk" required>
                        @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Kategori -->
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori <span class="text-danger">*</span></label>
                        <input type="text" name="kategori" id="kategori" 
                               class="form-control @error('kategori') is-invalid @enderror" 
                               value="{{ old('kategori', $produk->kategori ?? '') }}" 
                               placeholder="Contoh: Kurma Premium"
                               list="kategori-list" required>
                        <datalist id="kategori-list">
                            @foreach($kategoriList as $kat)
                            <option value="{{ $kat }}">
                            @endforeach
                        </datalist>
                        @error('kategori')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <small class="text-muted">Pilih dari list atau ketik kategori baru</small>
                    </div>

                    <!-- Harga -->
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <div class="input-group">
                            <span class="input-group-text">Rp</span>
                            <input type="number" name="harga" id="harga" 
                                   class="form-control @error('harga') is-invalid @enderror" 
                                   value="{{ old('harga', $produk->harga ?? '') }}" 
                                   placeholder="0" min="0" step="1000">
                            @error('harga')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <small class="text-muted">Kosongkan jika harga "Hubungi Kami"</small>
                    </div>

                    <!-- Deskripsi -->
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi <span class="text-danger">*</span></label>
                        <textarea name="deskripsi" id="deskripsi" rows="8"
                                  class="form-control @error('deskripsi') is-invalid @enderror" 
                                  placeholder="Tulis deskripsi produk disini..." required>{{ old('deskripsi', $produk->deskripsi ?? '') }}</textarea>
                        @error('deskripsi')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <!-- Status & Urutan -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Pengaturan</h3>
                </div>
                <div class="card-body">
                    <!-- Status -->
                    <div class="mb-3">
                        <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                        <select name="status" id="status" class="form-select @error('status') is-invalid @enderror" required>
                            <option value="active" {{ old('status', $produk->status ?? 'active') == 'active' ? 'selected' : '' }}>
                                Active
                            </option>
                            <option value="inactive" {{ old('status', $produk->status ?? '') == 'inactive' ? 'selected' : '' }}>
                                Inactive
                            </option>
                        </select>
                        @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Urutan -->
                    <div class="mb-3">
                        <label for="urutan" class="form-label">Urutan Tampilan</label>
                        <input type="number" name="urutan" id="urutan" 
                               class="form-control @error('urutan') is-invalid @enderror" 
                               value="{{ old('urutan', $produk->urutan ?? 0) }}" 
                               min="0" step="1">
                        @error('urutan')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <small class="text-muted">Semakin kecil angka, semakin awal tampil</small>
                    </div>
                </div>
            </div>

            <!-- Gambar -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Gambar Produk</h3>
                </div>
                <div class="card-body">
                    @if(isset($produk) && $produk->gambar)
                    <div class="mb-3">
                        <img src="{{ asset('storage/' . $produk->gambar) }}" 
                             alt="{{ $produk->nama }}" 
                             class="img-fluid rounded">
                    </div>
                    @endif
                    
                    <div class="mb-3">
                        <label for="gambar" class="form-label">
                            {{ isset($produk) ? 'Ganti Gambar' : 'Upload Gambar' }}
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
                            <i class="bi bi-save"></i> {{ isset($produk) ? 'Update Produk' : 'Simpan Produk' }}
                        </button>
                        <a href="{{ route('admin.produk.index') }}" class="btn btn-secondary">
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