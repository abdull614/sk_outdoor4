@extends('layouts.app')

@section('custom-css')
    <link rel="stylesheet" href="{{asset('css/syaratSewa.css')}}">
@endsection

@section('content')
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>
                    <span class="text-white">Syarat Sewa</span>
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
            <span class="text-black" style="font-family:serif">Syarat dan Ketentuan </span>
            <span class="text-primary" style="font-family:serif">Penyewaan</span>
        </h1>

        <h2 class="text-black" style="margin-top: 2rem; font-family:serif">Syarat dan Ketentuan</h2>
        <ul class="text-black" style="line-height: 1.8; padding-left: 20px; font-size: 18px;">
            <li>❗ SAAT MEMESAN BARANG, WAJIB DP MINIMAL 50% DARI TOTAL SEWA</li>
            <li>❗ DP YANG SUDAH DIBAYARKAN TIDAK DAPAT DIMINTA KEMBALI</li>
            <li>❗ PELUNASAN DILAKUKAN SAAT PENGAMBILAN BARANG</li>
            <li>❗ JAMINAN SAAT MEMINJAM BARANG (KTP/SIM/STNK/KIA) YANG ASLI DAN MASIH BERLAKU</li>
            <li>❗ TELAT MENGEMBALIKAN, RUSAK, HILANG AKAN DIKENAKAN DENDA KEPADA SI PEMINJAM</li>
        </ul>

        <h2 class="text-black" style="margin-top: 2rem; font-family:serif">Denda Pengembalian Alat</h2>
        <ul class="text-black" style="line-height: 1.8; padding-left: 20px; font-size: 18px;">
            <li>&lt; 6 JAM MASIH DITOLERANSI</li>
            <li>&gt; 6 JAM DAN &lt; 12 JAM DIKENAKAN DENDA SEWA SETENGAH HARI</li>
            <li>&gt; 12 JAM DAN &lt; 24 JAM DIKENAKAN DENDA SEWA 1 HARI</li>
            <li>&gt; 24 JAM DIKENAKAN DENDA DIHITUNG SESUAI LAMA PENGEMBALIAN</li>
        </ul>

        <h2 style="margin-top: 2rem; font-family:serif"><span class="text-black">Harap Dipenuhi Sebelum Menyewa</span></h2>
        <ul class="text-black" style="line-height: 1.8; padding-left: 20px; font-size: 18px;">
            <li>✔️ Pastikan akun Anda sudah terdaftar dan login ke website</li>
            <li>✔️ Periksa detail produk dan ketersediaan jadwal sewa</li>
            <li>✔️ Siapkan identitas asli (KTP/SIM/STNK) sebagai jaminan</li>
            <li>✔️ Siapkan dana untuk DP minimal 50% dan pelunasan saat ambil</li>
        </ul>
        <br>
        <br>
        <p class="text-black" style="font-size: 20px; font-style: italic;">* Untuk pertanyaan lebih lanjut, silakan <a href="{{ route('hubungi.kami') }}" style="color: #ff4c29; font-size: 20px; font-style: italic; font-weight: bold;">Hubungi Kami</a>.</p>
    </div>
</section>

@endsection
