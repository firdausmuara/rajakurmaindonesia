@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('breadcrumb')
<li class="breadcrumb-item active">Dashboard</li>
@endsection

@section('content')
<div class="row">
    <!-- Small Box 1 -->
    <div class="col-lg-3 col-6">
        <div class="small-box text-bg-primary">
            <div class="inner">
                <h3>{{ $stats['total_berita'] }}</h3>
                <p>Total Berita</p>
            </div>
            <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.5 21H3V3h10.5v6H19.5v12zM15 4.5v4.5h4.5L15 4.5zM7.5 12H16.5V13.5H7.5V12zm0 3H16.5V16.5H7.5V15z"/>
            </svg>
            <a href="{{ route('admin.berita.index') }}" class="small-box-footer link-light">
                Lihat Detail <i class="bi bi-link-45deg"></i>
            </a>
        </div>
    </div>

    <!-- Small Box 2 -->
    <div class="col-lg-3 col-6">
        <div class="small-box text-bg-success">
            <div class="inner">
                <h3>{{ $stats['berita_published'] }}</h3>
                <p>Berita Published</p>
            </div>
            <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
            </svg>
            <a href="{{ route('admin.berita.index') }}" class="small-box-footer link-light">
                Lihat Detail <i class="bi bi-link-45deg"></i>
            </a>
        </div>
    </div>

    <!-- Small Box 3 -->
    <div class="col-lg-3 col-6">
        <div class="small-box text-bg-warning">
            <div class="inner">
                <h3>{{ $stats['total_produk'] }}</h3>
                <p>Total Produk</p>
            </div>
            <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 6h-2.18c.11-.31.18-.65.18-1a2.996 2.996 0 00-5.5-1.65l-.5.67-.5-.68C10.96 2.54 10.05 2 9 2 7.34 2 6 3.34 6 5c0 .35.07.69.18 1H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-5-2c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zM9 4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm11 15H4v-2h16v2zm0-5H4V8h5.08L7 10.83 8.62 12 11 8.76l1-1.36 1 1.36L15.38 12 17 10.83 14.92 8H20v6z"/>
            </svg>
            <a href="{{ route('admin.produk.index') }}" class="small-box-footer link-dark">
                Lihat Detail <i class="bi bi-link-45deg"></i>
            </a>
        </div>
    </div>

    <!-- Small Box 4 -->
    <div class="col-lg-3 col-6">
        <div class="small-box text-bg-danger">
            <div class="inner">
                <h3>{{ $stats['produk_active'] }}</h3>
                <p>Produk Active</p>
            </div>
            <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
            </svg>
            <a href="{{ route('admin.produk.index') }}" class="small-box-footer link-light">
                Lihat Detail <i class="bi bi-link-45deg"></i>
            </a>
        </div>
    </div>
</div>

<div class="row">
    <!-- Recent Berita -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Berita Terbaru</h3>
                <div class="card-tools">
                    <a href="{{ route('admin.berita.create') }}" class="btn btn-sm btn-primary">
                        <i class="bi bi-plus"></i> Tambah Berita
                    </a>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-sm table-hover">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($recentBerita as $item)
                        <tr>
                            <td>
                                <a href="{{ route('admin.berita.edit', $item) }}">
                                    {{ Str::limit($item->judul, 40) }}
                                </a>
                            </td>
                            <td>
                                <span class="badge {{ $item->status == 'published' ? 'bg-success' : 'bg-warning' }}">
                                    {{ $item->status }}
                                </span>
                            </td>
                            <td>{{ $item->tanggal_publish->format('d M Y') }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="text-center">Belum ada berita</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="card-footer clearfix">
                <a href="{{ route('admin.berita.index') }}" class="btn btn-sm btn-secondary float-end">
                    Lihat Semua
                </a>
            </div>
        </div>
    </div>

    <!-- Recent Produk -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Produk Terbaru</h3>
                <div class="card-tools">
                    <a href="{{ route('admin.produk.create') }}" class="btn btn-sm btn-primary">
                        <i class="bi bi-plus"></i> Tambah Produk
                    </a>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-sm table-hover">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($recentProduk as $item)
                        <tr>
                            <td>
                                <a href="{{ route('admin.produk.edit', $item) }}">
                                    {{ Str::limit($item->nama, 30) }}
                                </a>
                            </td>
                            <td><small>{{ $item->kategori }}</small></td>
                            <td><small>{{ $item->formatted_harga }}</small></td>
                            <td>
                                <span class="badge {{ $item->status == 'active' ? 'bg-success' : 'bg-secondary' }}">
                                    {{ $item->status }}
                                </span>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center">Belum ada produk</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="card-footer clearfix">
                <a href="{{ route('admin.produk.index') }}" class="btn btn-sm btn-secondary float-end">
                    Lihat Semua
                </a>
            </div>
        </div>
    </div>
</div>
@endsection