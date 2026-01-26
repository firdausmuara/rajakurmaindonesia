@extends('landing.layouts.app')

@section('title', 'Home')

@section('content')
<!-- Hero Section -->
<section id="hero" class="hero section dark-background">
    <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-item active">
            <img src="{{ asset('landing/assets/img/hero-carousel/hero-carousel-1.jpg') }}" alt="">
            <div class="carousel-container">
                <h2>Raja Kurma Indonesia</h2>
                <p>Importir Kurma Terbesar di Indonesia</p>
                <a href="{{ route('home') }}#produk" class="btn-get-started">Lihat Produk</a>
            </div>
        </div>
        
        <div class="carousel-item">
            <img src="{{ asset('landing/assets/img/hero-carousel/hero-carousel-2.jpg') }}" alt="">
            <div class="carousel-container">
                <h2>Kurma Premium Pilihan</h2>
                <p>Diseleksi langsung untuk rasa dan kualitas terbaik</p>
                <a href="https://linktr.ee/rajakurmaindo" target="_blank" class="btn-get-started">Belanja Sekarang</a>
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
        <p>Raja Kurma Indonesia - Importir Kurma Terbesar di Indonesia</p>
    </div>
    
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('landing/assets/img/logomerah.png') }}" style="width: 50%; height: auto;" class="img-fluid" alt="">
            </div>
            
            <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
                <h3>Komitmen Kami</h3>
                <p class="fst-italic">Kami berkomitmen menghadirkan kurma premium dengan standar mutu tinggi melalui proses seleksi yang ketat. Setiap produk dipilih untuk memastikan rasa autentik, kualitas unggul, dan kesegaran optimal sebelum sampai ke tangan pelanggan</p>
                <p class="fst-italic">Dengan sistem distribusi yang efisien, kami menghadirkan kurma berkualitas tinggi dengan harga retail terbaik tanpa mengurangi standar mutu yang kami jaga.</p>
                <ul>
                    <li><i class="bi bi-check-circle"></i> <span>Kurma impor langsung dari negara asal</span></li>
                    <li><i class="bi bi-check-circle"></i> <span>Kualitas premium dan terjamin standar internasional</span></li>
                    <li><i class="bi bi-check-circle"></i> <span>Harga retail terbaik</span></li>
                    <li><i class="bi bi-check-circle"></i> <span>Stok lengkap dengan berbagai varian kurma</span></li>
                    <li><i class="bi bi-check-circle"></i> <span>Pengiriman cepat ke seluruh wilayah Indonesia</span></li>
                </ul>
                <a href="https://linktr.ee/rajakurmaindo" target="_blank" class="read-more"><span>Belanja Sekarang</span><i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- Produk Section -->
<!-- <section id="services" class="services section light-background">
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
</section> -->

<!-- Call To Action Section -->
<section id="call-to-action" class="call-to-action section dark-background">

    <img src="{{ asset('landing/assets/img/cta-bg.jpg') }}" alt="">

    <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-xl-10">
            <div class="text-center">
            <h3>Temukan Kurma Premium Berkualitas</h3>
            <p>Kurma premium dengan standar mutu tinggi melalui proses seleksi yang ketat</p>
            <a class="cta-btn" href="#produk">Lihat Produk</a>
            </div>
        </div>
        </div>
    </div>

</section><!-- /Call To Action Section -->

<!-- More Services Section -->
<section id="more-services" class="more-services section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Supplier Bisnis Kurma</h2>
        <p>Cocok jadi Supplier Bisnis Kurma Anda</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
            <img src="{{ asset('landing/assets/img/more-service-1.jpg') }}" class="img-fluid" alt="">
            <h3>Stok lengkap dengan berbagai varian kurma</h3>
            <p>Raja Kurma menghadirkan pilihan kurma premium dengan ketersediaan stok yang terjamin.</p>
            </div>
        </div><!-- End Card Item -->

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
            <img src="{{ asset('landing/assets/img/more-service-2.jpg') }}" class="img-fluid" alt="">
            <h3>Tersebar di 4 Kota Besar di Indonesia</h3>
            <p>Dengan jaringan distribusi yang tersebar di 4 kota besar di Indonesia, Raja Kurma mampu menghadirkan proses pengiriman yang lebih cepat, efisien dan terkontrol</p>
            </div>
        </div><!-- End Card Item -->

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
            <img src="{{ asset('landing/assets/img/more-service-3.jpg') }}" class="img-fluid" alt="">
            <h3>Berkualitas Tinggi dan Terjaga</h3>
            <p>Setiap Kurma melalui proses seleksi ketat, penyimpanan higienis dan pengawasan kualitas yang konsisten</p>
            </div>
        </div><!-- End Card Item -->

        </div>

    </div>

</section><!-- /More Services Section -->

<!-- Produk Section -->
<section id="produk" class="portfolio section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Produk Kami</h2>
        <p>Berbagai pilihan kurma berkualitas untuk Anda</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">Semua</li>
                <li data-filter=".filter-books">Sukari</li>
                <li data-filter=".filter-branding">Ruthob Libya</li>
                <li data-filter=".filter-app">Ajwa</li>
            </ul><!-- End Portfolio Filters -->

            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                    <div class="portfolio-content h-100">
                        <img src="{{asset('landing/assets/img/portfolio/app-1.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Ajwa</h4>
                            <p>Detail Ajwa</p>
                            <a href="{{asset('landing/assets/img/portfolio/app-1.jpg')}}" title="Ajwa" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="https://linktr.ee/rajakurmaindo" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                    <div class="portfolio-content h-100">
                        <img src="{{asset('landing/assets/img/portfolio/product-1.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Safawi</h4>
                            <p>Detail Safawi</p>
                            <a href="{{asset('landing/assets/img/portfolio/product-1.jpg')}}" title="Safawi" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="https://linktr.ee/rajakurmaindo" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                    <div class="portfolio-content h-100">
                        <img src="{{asset('landing/assets/img/portfolio/branding-1.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Ruthob Libya</h4>
                            <p>Detail Ruthob Libya</p>
                            <a href="{{asset('landing/assets/img/portfolio/branding-1.jpg')}}" title="Ruthob Libya" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="https://linktr.ee/rajakurmaindo" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                    <div class="portfolio-content h-100">
                        <img src="{{asset('landing/assets/img/portfolio/books-1.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Sukari</h4>
                            <p>Detail Sukari</p>
                            <a href="{{asset('landing/assets/img/portfolio/books-1.jpg')}}" title="Sukari" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="https://linktr.ee/rajakurmaindo" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                    <div class="portfolio-content h-100">
                        <img src="{{asset('landing/assets/img/portfolio/app-2.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Ajwa 2</h4>
                            <p>Detail Ajwa</p>
                            <a href="{{asset('landing/assets/img/portfolio/app-2.jpg')}}" title="Ajwa" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="https://linktr.ee/rajakurmaindo" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                    <div class="portfolio-content h-100">
                        <img src="{{asset('landing/assets/img/portfolio/product-2.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Safawi 2</h4>
                            <p>Detail Safawi</p>
                            <a href="{{asset('landing/assets/img/portfolio/product-2.jpg')}}" title="Safawi" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="https://linktr.ee/rajakurmaindo" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

            </div><!-- End Portfolio Container -->

        </div>

    </div>

</section>
<!-- /Produk Section -->

<!-- Berita Section -->
<!-- <section id="berita" class="portfolio section">
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
</section> -->

<!-- Faq Section -->
<section id="faq" class="faq section light-background">

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="content px-xl-5">
                    <h3><span><strong>Berkomitmen</strong> untuk menjaga </span><strong>Kualitas Terbaik</strong></h3>
                </div>
            </div>

            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

                <div class="faq-container">
                    <div class="faq-item faq-active">
                        <h3><span class="num">1.</span> <span>Kurma dipilih dengan Standar Kualitas Tinggi</span></h3>
                        <div class="faq-content">
                            <p>Setiap kurma dipilih melalui proses seleksi ketat, mulai dari sumber terbaik hingga tingkat kematangan ideal. Kami memastikan hanya kurma dengan rasa manis alami seimbang, tekstur unggul, dan kualitas visual terbaik yang kami hadirkan.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3><span class="num">2.</span> <span>Dikemas dengan aman</span></h3>
                        <div class="faq-content">
                            <p>Setiap produk Raja Kurma dikemas menggunakan standar pengemasan yang higienis dan aman untuk menjaga kesegaran, rasa, serta kualitas kurma hingga sampai ke tangan konsumen.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3><span class="num">3.</span> <span>Dikirim dan disimpan dengan Tempat dan Suhu yang Steril</span></h3>
                        <div class="faq-content">
                            <p>Raja Kurma memastikan setiap produk disimpan dan dikirim dalam lingkungan yang bersih, steril, dan terkontrol suhunya. Proses ini dilakukan untuk menjaga kesegaran, kualitas rasa, serta keamanan produk dari awal penyimpanan hingga sampai ke tangan konsumen.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->
                </div>

            </div>
        </div>

    </div>

</section><!-- /Faq Section -->

<!-- Contact Section -->
<section id="contact" class="contact section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Kontak</h2>
        <p>Hubungi kami untuk informasi stok dan harga terbaik</p>
    </div>
    
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-2">
            <div class="col-lg-12">
                <div class="row gy-2">
                    <div class="col-md-6">
                        <a href="https://wa.me/6287878784706" target="_blank">
                            <div class="info-item" data-aos="fade" data-aos-delay="200">
                                <i class="bi bi-whatsapp"></i>
                                <h3>Admin Jakarta</h3>
                                <p>+62 878-7878-4706</p>
                                <p>Jakarta, Indonesia</p>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-md-6">
                        <a href="https://wa.me/6281910633437" target="_blank">
                            <div class="info-item" data-aos="fade" data-aos-delay="300">
                                <i class="bi bi-whatsapp"></i>
                                <h3>Admin Medan</h3>
                                <p>+62 819-1063-3437</p>
                                <p>Medan, Indonesia</p>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-md-6">
                        <a href="https://wa.me/6281901010179" target="_blank">
                            <div class="info-item" data-aos="fade" data-aos-delay="400">
                                <i class="bi bi-whatsapp"></i>
                                <h3>Admin Surabaya</h3>
                                <p>+62 819-0101-0179</p>
                                <p>Surabaya, Indonesia</p>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-md-6">
                        <a href="https://wa.me/62818701015" target="_blank">
                            <div class="info-item" data-aos="fade" data-aos-delay="500">
                                <i class="bi bi-whatsapp"></i>
                                <h3>Admin Makassar</h3>
                                <p>+62 818-701-015</p>
                                <p>Makassar, Indonesia</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
