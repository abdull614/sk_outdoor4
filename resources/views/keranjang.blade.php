@extends('layouts.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/keranjang.css') }}">
@endsection

@section('content')
<div class="container-keranjang">
    <h1>Keranjang Belanja</h1>
    <div class="content-keranjang">
        <img src="{{ asset('asset/keranjang-kosong.png') }}" alt="Keranjang Kosong" class="empty-cart-img">
        <p class="empty-text">Keranjang belanja Anda Kosong</p>
        @auth
            <a href="{{ route('katalog.produk') }}" class="btn-sewa">Sewa Sekarang</a>
        @else
            <a href="{{ route('login') }}" class="btn-sewa">Sewa Sekarang</a>
        @endauth
    </div>
</div>
@endsection
