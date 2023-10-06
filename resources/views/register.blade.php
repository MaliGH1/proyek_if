<!DOCTYPE html>
<html>

<head>
    <title>Registrasi Akun</title>
    <link rel="stylesheet" type="text/css" href="css/register.css">
</head>

<body>
    <form action="/register" method="post">
        @csrf

        <div class="registration-container">
            <h2>Registrasi Akun</h2>
            <div class="registration-form">

            <label for="fullname">Nama Lengkap:</label>
            <input type="text" id="fullname" name="fullname" class="@error('fullname') is-invalid @enderror" placeholder="Masukkan nama lengkap">
            @error('fullname')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror

            <br>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" class="@error('username') is-invalid @enderror" placeholder="Masukkan username">
            @error('username')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror

            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="@error('email') is-invalid @enderror" placeholder="Masukkan email">
            @error('email')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror

            <br>
            <label for="phone">No. HP:</label>
            <input type="tel" id="phone" name="phone" class="@error('phone') is-invalid @enderror" placeholder="Masukkan nomor HP">
            @error('phone')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror

            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" class="@error('password') is-invalid @enderror" placeholder="Masukkan password">
            @error('password')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            </div>
            <a href="/login"><button class="signup-button">BUAT AKUN</button></a>
        </div>
    </form>
</body>
</html>