<nav class="navbar">
    <div class="navbar-container">

        <a href="/" class="navbar-logo">
            <span class="text-white">Summit</span>
            <span class="text-primary">Kalcer.</span>
        </a>

        <ul class="navbar-menu">
            <li><a href="{{ route('cara.sewa') }}">Cara Sewa</a></li>
            <li><a href="{{ route('syarat.sewa') }}">Syarat Sewa</a></li>
            <li><a href="{{ route('katalog.produk') }}">Katalog Produk</a></li>
            <li><a href="{{ route('hubungi.kami') }}">Hubungi Kami</a></li>
        </ul>

        <div class="navbar-right">
            <a href="{{ route('keranjang') }}" class="navbar-icons">
                <i data-feather="shopping-cart"></i>
            </a>

            @guest
                <button class="navbar-icons">
                    <a href="{{ route('login')}}">
                        <i data-feather="log-in"></i>
                        Login
                    </a>
                </button>
            @endguest

            @auth
                <button class="navbar-icons">
                    <a href="/profil">
                        <i data-feather="user"></i>
                        Profil
                    </a>
                </button>
            @endauth

            <button class="navbar-toggle">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
        </div>
    </div>
</nav>
