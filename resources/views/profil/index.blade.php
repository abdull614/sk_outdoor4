<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/profil/main.css') }}">

    {{-- feather --}}
    <script src="https://unpkg.com/feather-icons"></script>

    @yield('custom-css')

</head>

<body>
    <div class="navbar">
        <button class="btn-close btn-go-back">
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
                    <a href="{{ route('profil.info') }}" class="{{ Route::is('profil.info') ? 'active' : '' }}">Info</a>
                    <a href="{{ route('profil.password') }}"
                        class="{{ Route::is('profil.password') ? 'active' : '' }}">Change
                        password</a>
                    <a href="#">Notifications</a>

                    <div class="btn">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
        
                        <button onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-outline-danger">
                            <i data-feather="log-out"></i> Logout
                        </button>
                    </div>
                </div>
                



            </div>

            <div class="profil-right">
                {{-- isi content --}}
                @yield('content')
            </div>
        </div>
    </div>

    {{-- script --}}
    <script src="{{ asset('js/profil/script.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

    @yield('custom-js')

    <script>
        feather.replace();
    </script>


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const currentPath = window.location.pathname;

            // Ambil history dari sessionStorage
            let history = JSON.parse(sessionStorage.getItem("customHistory")) || [];

            // Hapus duplikat berturut-turut
            if (history.length === 0 || history[history.length - 1] !== currentPath) {
                history.push(currentPath);
            }

            sessionStorage.setItem("customHistory", JSON.stringify(history));
        });
    </script>

</body>

</html>
