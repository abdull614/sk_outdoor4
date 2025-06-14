@extends('layouts.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/beranda.css') }}">
@endsection

@section('content')
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>
                    <span class="text-white">Summit</span>
                    <span class="text-primary">Kalcer.</span>
                    <br>
                    <span class="text-white">Outdoor</span>
                </h1>
                <p>" We supply the gear, you supply the guts. "</p>
            </div>

            <button class="btn">
            @auth
                <a href="{{ route('katalog.produk') }}">Sewa Sekarang</a>
            @else
                <a href="{{ route('login') }}">Sewa Sekarang</a>
            @endauth
        </button>
        </div>
    </section>

    <section class="hero-komitmen" id="home">
        <main class="content">
            <h1 style="font-family:serif"> Komitmen Summit <span>Kalcer.</span></h1>
            <h2 style="font-family:serif"> Untuk Aktivitas dan Hoby Anda! </h2>
            <p style="font-family:georgia">
                “Setiap langkah petualangan tak seharusnya terhambat oleh kekhawatiran soal perlengkapan. 
                <span>Summit Kalcer</span> hadir sebagai solusi praktis dan andal untuk memenuhi kebutuhan perlengkapan outdoor 
                Anda, tanpa harus repot, menguras tenaga, atau merogoh kocek terlalu dalam.
                <br><br> Dengan produk-produk berkualitas dan fungsional, kami berkomitmen
                menjadi partner setia dalam setiap perjalanan Anda menjelajahi alam
                Indonesia. Tak perlu lagi bingung tentang perlengkapan apa yang
                dibutuhkan, di mana mendapatkannya, atau bagaimana merawatnya — <span>Summit
                Kalcer menjawab</span> semua itu agar Anda bisa fokus pada pengalaman dan
                semangat petualangan.</br></br>
            </p>
        </main>
    </section>
@endsection
