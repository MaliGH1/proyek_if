<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/navbarsewa.css" class="">
    <title>Document</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar bg-black top-0 z-100 fixed w-full">
        <div class="container">
            <!-- Logo -->
            <div class="navbar-content">
                <a class="text-yellow-300 text-2xl font-semibold no-underline" href="/home">DVJR</a>
            </div>

            <!-- Tombol Kembali -->
            <a href="{{ route('back.home') }}" class="text-white text-sm px-3 py-1 bg-red-500 rounded-full hover:bg-red-600 no-underline">
                Kembali
            </a>
        </div>

    </nav>

</body>

</html>