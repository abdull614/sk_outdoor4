@extends('profil/index')

@section('custom-css')
    <link rel="stylesheet" href="css/profil/password.css">
@endsection

@section('content')
    <div class="password-content">
        <div class="content-body">
            <div class="form-group">
                <label for="">Password lama</label>
                <input type="text" placeholder="Masukkan Password lama">

                <label for="">Password baru</label>
                <input type="text" placeholder="Masukkan Password baru">

                <label for="">Konfirmasi Password lama</label>
                <input type="text" placeholder="Masukkan Password baru">
            </div>
        </div>
    </div>
@endsection
