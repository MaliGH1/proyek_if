<!DOCTYPE html>
<html>

<head>
    <title>Registrasi Akun</title>
    <link rel="stylesheet" type="text/css" href="register.css">
</head>

<body>
<form action="/register" method="post">

    <div class="registration-container">
        <h2>Registrasi Akun</h2>
        <div class="registration-form">
            <input type="text" id="username" placeholder="USERNAME" required>
            <input type="text" id="fullname" placeholder="NAMA LENGKAP" required>
            <input type="tel" id="phone" placeholder="NO. HP" required>
            <input type="password" id="password" placeholder="PASSWORD" required>
            <input type="password" id="confirm-password" placeholder="CONFRIM PASSWORD" required>
                <a href="/login"><button class="signup-button">BUAT AKUN</button></a>
        </div>
    </div>
</form>

</body>

</html>