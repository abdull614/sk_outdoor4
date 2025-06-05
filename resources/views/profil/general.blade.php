@extends('profil/index')

@section('custom-css')
    <link rel="stylesheet" href="css/profil/general.css">
@endsection

@section('content')
    <div class="profil-content">
        <div class="account-general">
            <div class="content-body">
                <div class="media">
                    <img id="preview-image" src="" alt="Preview" class="profil-img">
                    <label class="btn" for="upload-photo">
                        Ubah Profil
                        <input type="file" id="upload-photo" accept="image/*" hidden>
                    </label>

                </div>

            </div>
            <div class="content-body">
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" placeholder="Masukkan Username">

                    <label for="">Nama</label>
                    <input type="text" placeholder="Masukkan Nama">

                    <label for="">Email</label>
                    <input type="text" placeholder="Email">

                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" rows="4" cols="50" placeholder="Masukkan alamat lengkap..."></textarea>

                </div>
            </div>
        </div>
    </div>
@endsection
