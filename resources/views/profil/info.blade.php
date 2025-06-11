@extends('profil/index')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/profil/info.css') }}">
@endsection

@section('content')
    <div class="info-content">
        <div class="content-body">
            @if(session('success'))
                <div id="success-alert" class="alert alert-success" style="transition: opacity 0.5s;">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('profil.info.simpan') }}" method="POST">
                @csrf

                <h3 class="jdl-alamat">Alamat</h3>

                <div class="form-group">
                    <label for="provinsi">Provinsi:</label><br />
                    <select name="provinsi" id="provinsi" data-selected="{{ old('provinsi', $alamat->provinsi ?? '') }}">
                        <option>Pilih</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kota">Kab/Kota:</label><br />
                    <select name="kota" id="kota" data-selected="{{ old('kota', $alamat->kota ?? '') }}">
                        <option>Pilih</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kecamatan">Kecamatan:</label><br />
                    <select name="kecamatan" id="kecamatan" data-selected="{{ old('kecamatan', $alamat->kecamatan ?? '') }}">
                        <option>Pilih</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kelurahan">Kelurahan:</label><br />
                    <select name="kelurahan" id="kelurahan" data-selected="{{ old('kelurahan', $alamat->kelurahan ?? '') }}">
                        <option>Pilih</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="jalan">Nama Jalan / Patokan:</label><br />
                    <input type="text" name="jalan" id="jalan"
                        value="{{ old('jalan', $alamat->jalan ?? '') }}"
                        placeholder="Contoh: Jl. Mawar No. 10, dekat masjid">
                </div>

                <h3 class="jdl-contact">Kontak</h3>

                <div class="form-group">
                    <label for="no_tlp">Nomor Telepon:</label>
                    <input type="text" name="no_tlp" value="{{ old('no_tlp', $contact->no_tlp ?? '') }}" placeholder="Nomor Telepon">
                </div>

                <div class="form-group">
                    <label for="instagram">Instagram:</label>
                    <input type="text" name="instagram" value="{{ old('instagram', $contact->instagram ?? '') }}" placeholder="Instagram">
                </div>

                <div class="btn">
                    <button type="submit">
                        {{ $alamat ? 'Perbarui' : 'Simpan' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('custom-js')
    <script src="{{ asset('js/profil/wilayah.js') }}"></script>
@endsection
