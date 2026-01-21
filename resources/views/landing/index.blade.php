@extends('landing.layouts.app')

@section('title', 'Home')

@section('content')
<!-- Hero Section -->
<section id="hero" class="hero section dark-background">
    <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-item active">
            <img src="{{ asset('landing/assets/img/hero-carousel/hero-carousel-1.jpg') }}" alt="">
            <div class="carousel-container">
                <h2>Selamat Datang di Raja Kurma Indonesia</h2>
                <p>Menyediakan kurma berkualitas tinggi dari berbagai negara. Kepercayaan dan kualitas adalah prioritas kami.</p>
                <a href="{{ route('produk') }}" class="btn-get-started">Lihat Produk</a>
            </div>
        </div>
        
        <div class="carousel-item">
            <img src="{{ asset('landing/assets/img/hero-carousel/hero-carousel-2.jpg') }}" alt="">
            <div class="carousel-container">
                <h2>Kurma Premium Pilihan</h2>
                <p>Koleksi lengkap kurma Ajwa, Medjool, Sukari, dan berbagai jenis kurma berkualitas lainnya.</p>
                <a href="{{ route('produk') }}" class="btn-get-started">Belanja Sekarang</a>
            </div>
        </div>
        
        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>
        <ol class="carousel-indicators"></ol>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Tentang Kami</h2>
        <p>Raja Kurma Indonesia - Pilihan Terpercaya untuk Kurma Berkualitas</p>
    </div>
    
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('landing/assets/img/about.jpg') }}" class="img-fluid" alt="">
            </div>
            
            <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
                <h3>Komitmen Kami</h3>
                <p class="fst-italic">Raja Kurma Indonesia berkomitmen menyediakan kurma berkualitas tinggi dengan harga terjangkau untuk keluarga Indonesia.</p>
                <ul>
                    <li><i class="bi bi-check-circle"></i> <span>Kurma impor langsung dari negara asal</span></li>
                    <li><i class="bi bi-check-circle"></i> <span>Kualitas terjamin dengan sertifikasi internasional</span></li>
                    <li><i class="bi bi-check-circle"></i> <span>Harga terjangkau dengan berbagai pilihan paket</span></li>
                    <li><i class="bi bi-check-circle"></i> <span>Pengiriman cepat ke seluruh Indonesia</span></li>
                </ul>
                <a href="{{ route('produk') }}" class="read-more"><span>Lihat Produk</span><i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- Produk Section -->
<section id="services" class="services section light-background">
    <div class="container section-title" data-aos="fade-up">
        <h2>Produk Kami</h2>
        <p>Berbagai pilihan kurma berkualitas untuk Anda</p>
    </div>
    
    <div class="container">
        <div class="row gy-4">
            @foreach($produk as $item)
            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item position-relative">
                    @if($item->gambar)
                    <img src="{{ asset('storage/' . $item->gambar) }}" class="img-fluid mb-3 rounded" alt="{{ $item->nama }}">
                    @endif
                    <h4><a href="{{ route('produk.detail', $item->slug) }}" class="stretched-link">{{ $item->nama }}</a></h4>
                    <p>{{ Str::limit($item->deskripsi, 80) }}</p>
                    <p class="text-primary fw-bold">{{ $item->formatted_harga }}</p>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="text-center mt-4">
            <a href="{{ route('produk') }}" class="btn btn-primary">Lihat Semua Produk</a>
        </div>
    </div>
</section>

<!-- Berita Section -->
<section id="portfolio" class="portfolio section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Berita & Informasi</h2>
        <p>Update terbaru seputar produk dan kesehatan</p>
    </div>
    
    <div class="container">
        <div class="row gy-4">
            @foreach($berita as $item)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100">
                    @if($item->gambar)
                    <img src="{{ asset('storage/' . $item->gambar) }}" class="card-img-top" alt="{{ $item->judul }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->judul }}</h5>
                        <p class="card-text text-muted small">
                            <i class="bi bi-calendar"></i> {{ $item->tanggal_publish->format('d M Y') }}
                            <i class="bi bi-eye ms-2"></i> {{ $item->views }} views
                        </p>
                        <p class="card-text">{{ $item->excerpt }}</p>
                        <a href="{{ route('berita.detail', $item->slug) }}" class="btn btn-sm btn-outline-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="text-center mt-4">
            <a href="{{ route('berita') }}" class="btn btn-primary">Lihat Semua Berita</a>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Kontak</h2>
        <p>Hubungi kami untuk informasi lebih lanjut</p>
    </div>
    
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
            <div class="col-lg-6">
                <div class="row gy-4">
                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="200">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Alamat</h3>
                            <p>Jl. Contoh No. 123</p>
                            <p>Jakarta, Indonesia</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="300">
                            <i class="bi bi-telephone"></i>
                            <h3>Telepon</h3>
                            <p>+62 812 3456 7890</p>
                            <p>+62 821 9876 5432</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="400">
                            <i class="bi bi-envelope"></i>
                            <h3>Email</h3>
                            <p>info@rajakurmaindonesia.com</p>
                            <p>order@rajakurmaindonesia.com</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="500">
                            <i class="bi bi-clock"></i>
                            <h3>Jam Operasional</h3>
                            <p>Senin - Sabtu</p>
                            <p>08:00 - 17:00 WIB</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body p-4">
                        <h5 class="card-title">Kirim Pesan</h5>
                        <form action="#" method="post" class="php-email-form">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Nama Anda" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" placeholder="Email Anda" required>
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subjek" required>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Pesan" required></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection