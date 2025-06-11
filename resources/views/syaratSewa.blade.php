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
            {{-- judul --}}
            <h1>
                <span class="text-black">Komitmen Summit </span>
                <span class="text-primary">Kalcer.</span>
            </h1>
            {{-- judul end --}}

            <h2>
                <span class="text-black">Untuk Aktivitas dan Hoby Anda!</span>
            </h2>

            <p class="text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam aperiam laboriosam fugiat cum
                quisquam fuga quis ipsum reprehenderit impedit similique nesciunt, temporibus, ad tenetur esse,
                necessitatibus recusandae corrupti dolorem nihil!</p>
        </div>
    </section>
@endsection
