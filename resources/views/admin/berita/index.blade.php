@extends('admin.layouts.app')

@section('title', 'Kelola Berita')
@section('page-title', 'Kelola Berita')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item active">Berita</li>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar Berita</h3>
        <div class="card-tools">
            <a href="{{ route('admin.berita.create') }}" class="btn btn-primary">
                <i class="bi bi-plus"></i> Tambah Berita Baru
            </a>
        </div>
    </div>
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th width="50">No</th>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Status</th>
                    <th>Tanggal Publish</th>
                    <th>Views</th>
                    <th width="150">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($berita as $index => $item)
                <tr>
                    <td>{{ $berita->firstItem() + $index }}</td>
                    <td>
                        @if($item->gambar)
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" 
                             style="width: 60px; height: 40px; object-fit: cover;" class="rounded">
                        @else
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-center" 
                             style="width: 60px; height: 40px;">
                            <i class="bi bi-image text-white"></i>
                        </div>
                        @endif
                    </td>
                    <td>
                        <strong>{{ $item->judul }}</strong><br>
                        <small class="text-muted">{{ $item->excerpt }}</small>
                    </td>
                    <td>{{ $item->user->name }}</td>
                    <td>
                        <span class="badge {{ $item->status == 'published' ? 'bg-success' : 'bg-warning' }}">
                            {{ ucfirst($item->status) }}
                        </span>
                    </td>
                    <td>{{ $item->tanggal_publish->format('d M Y') }}</td>
                    <td><i class="bi bi-eye"></i> {{ $item->views }}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('berita.detail', $item->slug) }}" 
                               class="btn btn-sm btn-info" target="_blank" title="Lihat">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="{{ route('admin.berita.edit', $item) }}" 
                               class="btn btn-sm btn-warning" title="Edit">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('admin.berita.destroy', $item) }}" 
                                  method="POST" class="d-inline"
                                  onsubmit="return confirm('Yakin ingin menghapus berita ini?')">
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
                        <p class="text-muted">Belum ada berita. <a href="{{ route('admin.berita.create') }}">Tambah sekarang</a></p>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="card-footer clearfix">
        {{ $berita->links() }}
    </div>
</div>
@endsection