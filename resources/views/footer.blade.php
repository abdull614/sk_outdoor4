<footer>
    <div class="footer-container">
        {{-- alamat --}}
        <div class="footer-basecamp">
            <h3>Base Camp</h3>
            <p>Jl. Bhayangkara No.55, Tipes, Kec. Serengan, Kota Surakarta, Jawa Tengah 57154</p>
        </div>
        {{-- alamat end --}}

        {{-- media sosial --}}
        <div class="footer-media">
            <h3>Media Sosial</h3>
            <ul>
                <li><a href="#">WhatsApp</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Tiktok</a></li>
            </ul>
        </div>
        {{-- media sosial end --}}

        {{-- menu link --}}
        <div class="footer-quicklinks">
            <h3>Quick Link</h3>
            <ul>
                <li><a href="{{ route ('cara.sewa')}}">Cara Sewa</a></li>
                <li><a href="{{ route ('syarat.sewa')}}">Syarat Sewa</a></li>
                <li><a href="{{ route ('katalog.produk')}}">Katalog Produk</a></li>
                <li><a href="{{ route ('hubungi.kami')}}">Hubungi kami</a></li>
            </ul>
        </div>
        {{-- menu link end --}}
    </div>

    {{-- copyright --}}
    <div class="footer-copyright">
        <p>© 2025 Summit Kalcer. All rights reserved.</p>
    </div>
    {{-- copyright end --}}
</footer>
