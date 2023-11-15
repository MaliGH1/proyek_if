<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DVJR Rent Cars | Supir</title>
    <link rel="stylesheet" href="css/main.css" class="">
    <link href="/dist/tailwind.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/navbarsewa.css" class="">
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-black">
    <!-- Navbar -->
    <nav class="navbar bg-black top-0 z-100 fixed w-full">
        <div class="container">
            <!-- Logo -->
            <div class="navbar-content">
                <a class="text-yellow-300 text-2xl font-semibold no-underline" href="/home">DVJR</a>
            </div>

            <!-- Tombol Kembali -->
            <a href=" " class="text-white text-sm px-3 py-1 bg-blue-500 hover:bg-blue-700 rounded-full no-underline">
                Kembali
            </a>
        </div>

    </nav>
    <div class="container mt-4">
        @yield('container')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>