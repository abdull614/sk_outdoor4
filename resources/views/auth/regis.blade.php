<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>login</title>

    {{-- link css --}}
    <link rel="stylesheet" href="css/auth/regis.css">

</head>

<body>
    <div class="container-regis">
        <div class="regis">

            <h1>Registrasi</h1>


            <form action="{{ route('regis.regisProses') }}" method="POST">
                @csrf
                <label for="name">Nama</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email</label>
                <input type="text" id="email" name="email" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                <label for="password_confirmation">Konfirmasi Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>


                <div class="button-wrapper">
                    <button class="btn-regis" type="submit"> Registrasi </button>
                    <button class="btn-google" type="button"
                        onclick="window.location.href='{{ route('login.google') }}'">
                        Registrasi With Google
                    </button>
                </div>
            </form>

            <div class="login">
                <p>
                    Sudah memiliki akun?
                </p>
                <a href="{{ route('login') }}">Login</a>
            </div>
        </div>
    </div>
</body>

</html>
