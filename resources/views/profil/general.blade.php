@extends('profil.index')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/profil/general.css') }}">
@endsection

@section('content')
<div class="profil-content">
    <div class="account-general">
        <form action="{{ route('profil.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            <div class="content-body">
                <div class="media">
                    {{-- Elemen untuk preview selalu ada --}}
                    <img id="preview-image"
                        src="{{ $user->photo ? asset('storage/' . $user->photo) : '' }}"
                        alt="Preview"
                        class="profil-img"
                        style="{{ $user->photo ? '' : 'display: none;' }}">

                    {{-- Jika tidak ada foto, tampilkan inisial --}}
                    @if (empty($user->photo))
                        <div id="initials" class="profil-img inisial-img">
                            {{ strtoupper(collect(explode(' ', $user->name))->map(fn($n) => substr($n,0,1))->join('')) }}
                        </div>
                    @endif

                    <form action="{{ route('profile.updatePhoto') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <label class="btn" for="upload-photo">
                            Ubah Profil
                        <input 
                            type="file" 
                            name="photo" 
                            id="upload-photo" 
                            accept="image/*" 
                            hidden 
                            onchange="this.form.submit()">
                        </label>
                    </form>
                </div>
            </div>

            <div class="content-body">
                <div class="form-group">
                    <label for="name" style="white-space: nowrap;">Nama</label>
                    <div class="name">
                        <input type="text" id="name" name="name" value="{{ $user->name }}" required class="form-control" style="flex: 1;">
                        
                        <button type="submit" class="btn-primary">Simpan</button>
                    </div>


                    <label for="email">Email</label>
                    <input type="text" id="email" value="{{ $user->email }}" readonly>

                    <label for="alamat">Alamat Lengkap</label>
                    <textarea id="alamat" readonly>
                        {{ $user->alamat 
                            ? $user->alamat->jalan . ', ' .
                            $user->alamat->kelurahan . ', ' .
                            $user->alamat->kecamatan . ', ' .
                            $user->alamat->kota . ', ' .
                            $user->alamat->provinsi
                            : 'Belum diisi' 
                        }}
                    </textarea>
                </div>
            </div>

            <div class="content-body">
                <div class="form-group">
                    <label for="no_tlp">Nomor Telepon</label>
                    <input type="text" id="no_tlp" value="{{ $contact?->no_tlp ?? 'Belum ada nomor' }}" readonly>

                    <label for="instagram">Instagram</label>
                    <input type="text" id="instagram" value="{{ $contact?->instagram ?? 'Belum ada instagram' }}" readonly>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('custom-js')
    <script src="{{ asset('js/profil/script.js') }}"></script>
@endsection
