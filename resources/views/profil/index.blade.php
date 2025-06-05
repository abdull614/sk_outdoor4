<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil</title>

    @vite(['resource/css/app.css', 'resource/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/profil/main.css') }}">

    {{-- feather --}}
    <script src="https://unpkg.com/feather-icons"></script>

    @yield('custom-css')

</head>

<body>
    <div class="navbar">
        <button class="btn-close" onclick="history.back()">
            <i data-feather="arrow-left"></i>
        </button>

        <h4>
            Account Setting
        </h4>
    </div>
    <div class="container">

        <div class="card">
            <div class="profil-left">
                <div class="profil-menu">
                    <a href="{{ route('profil') }}" class="{{ Route::is('profil') ? 'active' : '' }}"
                        class="active">General</a>
                    <a href="{{ route('password') }}" class="{{ Route::is('password') ? 'active' : '' }}">Change
                        pssword</a>
                    <a href="#">Info</a>
                    <a href="#">Sosial Media</a>
                    <a href="#">Notifications</a>
                </div>
            </div>

            <div class="profil-right">
                {{-- isi content --}}
                @yield('content')
            </div>
        </div>
    </div>

    {{-- script --}}
    <script src="js/profil/script.js"></script>

    <script>
        feather.replace();
    </script>
</body>

</html>
