@extends('layouts.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/caraSewa.css') }}">
@endsection

@section('content')
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>
                    <span class="text-white">Cara Sewa</span>
                    <br>
                    <span class="text-white">Summit</span>
                    <span class="text-primary">Kalcer.</span>
                </h1>
            </div>
        </div>
    </section>

    <section class="content">
    <div class="container-content">
        <h1>
            <span class="text-black" style="font-family:serif">Cara Sewa di Summit </span>
            <span class="text-primary" style="font-family:serif">Kalcer</span>
        </h1>

        <h2>
            <span class="text-black" style="font-family:serif">Mudah, Cepat, dan Praktis!</span>
        </h2>

        <ol class="text-black" style="font-size: 25px; line-height: 1.8; padding-left: 20px; margin-bottom: 3rem;">
    <li><strong>1. Jelajahi Website :</strong> <br>&nbsp;&nbsp;&nbsp;&nbsp;Pengunjung dapat melihat produk, namun belum bisa klik sewa atau lihat detail.</li>
    <li><strong>2. Login atau Daftar :</strong> <br>&nbsp;&nbsp;&nbsp;&nbsp;Untuk bisa menyewa, pengguna harus login atau membuat akun terlebih dahulu.</li>
    <li><strong>3. Lihat Detail Produk :</strong> <br>&nbsp;&nbsp;&nbsp;&nbsp;Setelah login, pengguna dapat mengakses informasi lengkap setiap produk.</li>
    <li><strong>4. Tambah ke Keranjang :</strong> <br>&nbsp;&nbsp;&nbsp;&nbsp;Pilih produk yang diinginkan dan masukkan ke keranjang sewa.</li>
    <li><strong>5. Pembayaran :</strong> <br>&nbsp;&nbsp;&nbsp;&nbsp;Lanjutkan proses checkout dan lakukan pembayaran sesuai tagihan.</li>
    <li><strong>6. Upload Bukti Pembayaran :</strong> <br>&nbsp;&nbsp;&nbsp;&nbsp;Unggah bukti transfer agar pesanan dapat diverifikasi.</li>
    <li><strong>7. Ambil Barang di Basecamp :</strong> <br>&nbsp;&nbsp;&nbsp;&nbsp;Setelah pembayaran dikonfirmasi, ambil barang langsung ke toko dengan membawa syarat sewa.</li>
</ol>


        <p class="text-black" style="font-size: 20px; font-style: italic;">* Jika ada pertanyaan lebih lanjut, jangan ragu untuk <a href="{{ route('hubungi.kami') }}" style="color: #ff4c29; font-size: 20px; font-style: italic; font-weight: bold;">Hubungi Kami</a>.</p>
    </div>
</section>
@endsection
