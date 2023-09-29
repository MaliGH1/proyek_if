<!DOCTYPE html>
<html>

<head>
    <title>Registrasi Akun</title>
    <link rel="stylesheet" type="text/css" href="css/regristasi.css">
</head>

<body>
<form action="/register" method="post">
    <div class="registration-container">
        <h2>Registrasi Akun</h2>
        <div class="registration-form">
            <label for="username">Username:</label>
            <input type="text" id="username" placeholder="Masukkan username" required>

            <label for="fullname">Nama Lengkap:</label>
            <input type="text" id="fullname" placeholder="Masukkan nama lengkap" required>

            <label for="phone">No. HP:</label>
            <input type="tel" id="phone" placeholder="Masukkan nomor HP" required>

            <label for="password">Password:</label>
            <input type="password" id="password" placeholder="Masukkan password" required>

            <label for="confirm-password">Konfirmasi Password:</labels>
                <input type="password" id="confirm-password" placeholder="Konfirmasi password" required>

                <a href="/login"><button class="signup-button">BUAT AKUN</button></a>
        </div>
    </div>
</fomr>

</body>

</html>