<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
    
    <!-- Feather Icons -->
    <!-- choose one -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

    <!-- Style CSS -->
    @yield('custom-css')
    
    <link rel="stylesheet" href="css/main.css" />
</head>

<body>
    {{-- navbar ambil --}}
    @include('navbar')

    {{-- isi content --}}
    @yield('content')

    {{-- footer --}}
    @include('footer')

    {{-- script nav --}}
    @yield('custom-js')
    <script src="{{ asset('js/script.js')}}"></script>

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
