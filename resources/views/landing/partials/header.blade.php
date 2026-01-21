<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
        <a href="{{ route('home') }}" class="logo d-flex align-items-center">
            <!-- <h1 class="sitename">Raja Kurma</h1> -->
            <img src="{{ url('landing/assets/img/logomerah.png') }}" alt="Logo Raja Kurma Indonesia" style="height: auto; width: 50px;">
        </a>
        
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('home') }}#hero" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('home') }}#about">Tentang</a></li>
                <li><a href="{{ route('produk') }}" class="{{ request()->routeIs('produk*') ? 'active' : '' }}">Produk</a></li>
                <li><a href="{{ route('berita') }}" class="{{ request()->routeIs('berita*') ? 'active' : '' }}">Berita</a></li>
                <li><a href="{{ route('home') }}#contact">Kontak</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>