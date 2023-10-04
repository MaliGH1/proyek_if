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
                <input type="text" id="fullname" name="fullname" placeholder="Masukkan nama lengkap">

                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Masukkan username">

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Masukkan email">

                <label for="phone">No. HP:</label>
                <input type="tel" id="phone" name="phone" placeholder="Masukkan nomor HP">

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password">

                <label for="confirm-password">Konfirmasi Password:</labels>
                    <input type="password" id="confirm-password" name="confirm-password" placeholder="Konfirmasi password">

                    <a href="/login"><button class="signup-button">BUAT AKUN</button></a>
            </div>
        </div>
    </form>

</body>

</html>