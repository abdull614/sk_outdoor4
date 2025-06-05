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
                <p>"We supply the gear, you supplay the guts."</p>
            </div>

            <button class="btn">
                <a href="{{ route ('katalog.produk')}}">Sewa Sekarang</a>
            </button>
        </div>
    </section>
@endsection
