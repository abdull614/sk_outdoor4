@extends('layouts.app')

@section('custom-css')
    <link rel="stylesheet" href="css/hubungiKami.css">
@endsection

@section('content')
    {{-- jumbotron --}}
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>
                    <span class="text-white">Contact</span>
                    <br>
                    <span class="text-white">Summit</span>
                    <span class="text-primary">Kalcer.</span>
                </h1>
            </div>
        </div>
    </section>
    {{-- jumbotron end --}}

    {{-- contact --}}
    <section class="content">
        <div class="container-content">
            {{-- judul --}}
            <h1>
                <span class="text-black">Sewa Alat Gunung, Alat Camping dan Perlengkapan Outdoor Solo </span>
            </h1>
            {{-- judul end --}}

            {{-- link --}}
            <div class="social-links">
                <a href="https://wa.me/6281234567890" target="_blank" rel="noopener noreferrer" class="btn-social">
                    WhatsApp
                </a>
                <a href="https://www.instagram.com/namamu" target="_blank" rel="noopener noreferrer" class="btn-social">
                    Instagram
                </a>
                <a href="https://www.tiktok.com/@namamu" target="_blank" rel="noopener noreferrer" class="btn-social">
                    TikTok
                </a>
            </div>
            {{-- link end --}}
        </div>
    </section>
    {{-- contact end --}}
@endsection
