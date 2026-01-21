@extends('admin.layouts.app')

@section('title', 'Kelola Produk')
@section('page-title', 'Kelola Produk')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item active">Produk</li>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar Produk</h3>
        <div class="card-tools">
            <a href="{{ route('admin.produk.create') }}" class="btn btn-primary">
                <i class="bi bi-plus"></i> Tambah Produk Baru
            </a>
        </div>
    </div>
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th width="50">No</th>
                    <th>Gambar</th>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th>Urutan</th>
                    <th width="150">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($produk as $index => $item)
                <tr>
                    <td>{{ $produk->firstItem() + $index }}</td>
                    <td>
                        @if($item->gambar)
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama }}" 
                             style="width: 60px; height: 60px; object-fit: cover;" class="rounded">
                        @else
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-center" 
                             style="width: 60px; height: 60px;">
                            <i class="bi bi-image text-white"></i>
                        </div>
                        @endif
                    </td>
                    <td>
                        <strong>{{ $item->nama }}</strong><br>
                        <small class="text-muted">{{ Str::limit($item->deskripsi, 60) }}</small>
                    </td>
                    <td><span class="badge bg-info">{{ $item->kategori }}</span></td>
                    <td><strong>{{ $item->formatted_harga }}</strong></td>
                    <td>
                        <span class="badge {{ $item->status == 'active' ? 'bg-success' : 'bg-secondary' }}">
                            {{ ucfirst($item->status) }}
                        </span>
                    </td>
                    <td>{{ $item->urutan }}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('produk.detail', $item->slug) }}" 
                               class="btn btn-sm btn-info" target="_blank" title="Lihat">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="{{ route('admin.produk.edit', $item) }}" 
                               class="btn btn-sm btn-warning" title="Edit">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('admin.produk.destroy', $item) }}" 
                                  method="POST" class="d-inline"
                                  onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" title="Hapus">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="text-center py-4">
                        <i class="bi bi-inbox fs-1 text-muted"></i>
                        <p class="text-muted">Belum ada produk. <a href="{{ route('admin.produk.create') }}">Tambah sekarang</a></p>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="card-footer clearfix">
        {{ $produk->links() }}
    </div>
</div>
@endsection