<footer id="footer" class="footer dark-background">
    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-about">
                <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                    <span class="sitename">Raja Kurma Indonesia</span>
                </a>
                <p>Importir Kurma berkualitas tinggi dan terbesar di Indonesia. </p>
                <div class="social-links d-flex mt-4">
                    <!-- <a href="#"><i class="bi bi-twitter-x"></i></a> -->
                    <a href="https://www.facebook.com/share/14XxupbqugZ/?mibextid=wwXIfr"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/rajakurma_indonesia/" target="_blank"><i class="bi bi-instagram"></i></a>
                    <a href="https://linktr.ee/rajakurma_indonesia" target="_blank"><i class="bi bi-link"></i></a>
                </div>
            </div>
            
            <div class="col-lg-2 col-6 footer-links">
                <h4>Menu</h4>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <!-- <li><a href="{{ route('produk') }}">Produk</a></li>
                    <li><a href="{{ route('berita') }}">Berita</a></li>
                    <li><a href="{{ route('home') }}#contact">Kontak</a></li> -->
                </ul>
            </div>
            
            <div class="col-lg-2 col-6 footer-links">
                <h4>Produk Kami</h4>
                <ul>
                    <!-- <li><a href="{{ route('produk') }}?kategori=Kurma Premium">Kurma Premium</a></li>
                    <li><a href="{{ route('produk') }}?kategori=Kurma Regular">Kurma Regular</a></li>
                    <li><a href="{{ route('produk') }}?kategori=Paket Hemat">Paket Hemat</a></li> -->
                    <li><a href="#">Kurma Sukari</a></li>
                    <li><a href="#">Kurma Ruthob Libya</a></li>
                    <li><a href="#">Kurma Ajwa</a></li>
                </ul>
            </div>
            
            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                <h4>Hubungi Kami</h4>
                <a href="https://maps.app.goo.gl/Mv1V1DeJg6YhhVUg8"><p>Jl. Jatinegara Timur No.84 Lantai 3, RT.3/RW.3, Bali Mester, Kecamatan Jatinegara, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13310</p></a>
                <p>Jakarta, Indonesia</p>
                <p class="mt-4"><strong>Phone:</strong> <span>+62 878 7878 4706</span></p>
                <p><strong>Email:</strong> <span>rajakurmaindonesia01@gmail.com</span></p>
            </div>
        </div>
    </div>
    
    <div class="container copyright text-center mt-4">
        <p>&copy; <span>Copyright</span> <strong class="px-1 sitename">Raja Kurma Indonesia</strong> <span>All Rights Reserved {{ date('Y') }}</span></p>
    </div>
</footer>
