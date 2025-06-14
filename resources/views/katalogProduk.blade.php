@extends('layouts.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/katalogProduk.css')}}">
@endsection

@section('content')
    {{-- jumbotron --}}
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>
                    <span class="text-white">Katalog Produk</span>
                    <br>
                    <span class="text-white">Summit</span>
                    <span class="text-primary">Kalcer.</span>
                </h1>
            </div>
        </div>
    </section>
    {{-- jumbotron end --}}

    {{-- content produk --}}
    <section class="content">
        <div class="container-content">
            @foreach ($produk as $Kategori => $items)
                {{-- judul --}}
                <h2>
                    <span class="text-black"> {{ $Kategori }} </span>
                </h2>
                {{-- judul end --}}

                {{-- produk --}}

                <div class="container-card">
                    @foreach ($items as $item)
                        <div class="card" data-name="p-1">
                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="" class="images">
                            <h3>{{ $item->nama_produk }}</h3>

                            {{-- button --}}
                            <div class="btn">
                                <button class="btn-detail" data-nama="{{ $item->nama_produk }}"
                                    data-harga="{{ $item->harga_sewa }}" data-kategori="{{ $Kategori }}"
                                    data-deskripsi="{{ $item->deskripsi }}" data-stok="{{ $item->stok }}"
                                    data-gambar="{{ asset('storage/' . $item->gambar) }}">
                                    Detail Produk
                                </button>
                                <button class="btn-sewa">
                                    @auth
                                        <a href="{{ route('katalog.produk') }}" class="btn-sewa">Sewa Sekarang</a>
                                    @else
                                        <a href="{{ route('login') }}" class="btn-sewa">Sewa Sekarang</a>
                                    @endauth
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
        {{-- produk end --}}

        {{-- preview --}}
        <div class="preview" id="previewBox">
            <div class="card active">
                <!-- Tombol X -->
                <div class="close-button">
                    <i data-feather="x"></i>
                </div>

                <div class="left-column">
                    <div class="image-section">
                        <img id="preview-gambar" src="" alt="Gambar Produk">
                    </div>

                    <div class="buttons">
                    @auth
                        <form action="{{ route('keranjang.tambah') }}" method="POST" style="display: inline;">
                    @csrf
                            <input type="hidden" name="produk_id" value="{{ $item->id }}">
                            <button type="submit" class="btn-keranjang">Masukkan Keranjang</button>
                        </form>

                        <form action="{{ route('sewa.produk') }}" method="POST" style="display: inline;">
                    @csrf
                            <input type="hidden" name="produk_id" value="{{ $item->id }}">
                            <button type="submit" class="btn-sewa">Sewa Sekarang</button>
                        </form>
                    @else
                    <a href="{{ route('login') }}" class="btn-keranjang">Masukkan Keranjang</a>
                    <a href="{{ route('login') }}" class="btn-sewa">Sewa Sekarang</a>
                    @endauth
                    </div>
                </div>
                    


                <div class="right-column">
                    <h3 id="preview-nama"></h3>
                    <p class="price" id="preview-harga"></p>
                    <p><strong>Kategori Produk&nbsp;:</strong> <span id="preview-kategori"></span></p>
                    <p><strong>Deskripsi&nbsp;:</strong> <span id="preview-deskripsi"></span></p>
                    <p><strong>Stok&nbsp;:</strong> <span id="preview-stok"></span></p>

                    <div class="note">
                        <p><strong>NB:</strong></p>
                        <ul>
                            <li>Produk ini disewakan.</li>
                            <li>Item yang disewakan sesuai ketersediaan.</li>
                            <li>Silahkan ambil dan kembalikan sesuai jadwal sewa (booking) ke Basecamp Summit Kalcer.</li>
                            <li>Seluruh produk yang kami sewakan telah melalui quality control (QC) untuk memastikan
                                kenyamanan pelanggan.</li>
                            <li>Kerusakan pada saat penyewaan menjadi tanggung jawab pelanggan.</li>
                            <li>Menyewa berarti SETUJU.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {{-- preview end --}}
    </section>
    {{-- content produk end --}}
@endsection
