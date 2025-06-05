<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>login</title>

    {{-- link css --}}
    <link rel="stylesheet" href="css/auth/login.css">

</head>

<body>
    <div class="container-login">
        <div class="login">

            <h1>Login</h1>


            <form action="{{ route('login.proses') }}" method="POST">
                @csrf
                <label for="name">Nama</label>
                <input type="text" id="name" name="name" required>

                @if (session('errorNama'))
                    <p style="color: red">{{ session('errorNama') }}</p>
                @endif


                <label for="pwd">Password</label>
                <input type="password" id="pwd" name="pwd" required>

                @if (session('errorPwd'))
                    <p style="color: red">{{ session('errorPwd') }}</p>
                @endif

                <div class="button-wrapper">
                    <button class="btn-login" type="submit"> Login </button>
                    <button class="btn-google" type="button"
                        onclick="window.location.href='{{ route('login.google') }}'">
                        Login With Google
                    </button>
                </div>
            </form>
            <div class="regis">
                <p>
                    Belum memiliki akun?
                </p>
                <a href="{{ route('regis') }}">Registrasi</a>
            </div>
        </div>
    </div>
</body>

</html>
