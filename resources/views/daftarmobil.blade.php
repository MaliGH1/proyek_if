<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DVJR Rent Cars | HOME</title>
    <link rel="stylesheet" href="css/main.css" class="">
    <link href="/dist/tailwind.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/mb.css" class="">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body class="bg-gradient-to-b from-black from-45% to-white">
    <nav class="top-0 z-100 fixed w-full bg-black py-3 px-5 border-b-2 border-white">
        <div class="container">
            <div class="flex items-start">
                <div class="md:flex space-x-1 flex gap-5 items-center">
                    <div class="text-left"> <!-- Menggunakan 'text-center' untuk tengah-tengah teks "DVJR" -->
                        <a class="text-yellow-300 text-2xl font-semibold no-underline" href="/home">DVJR</a>
                    </div>
                    <a class="text-white no-underline" href="/home">Home</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="pt-16 px-4 flex flex-wrap">
        @foreach( $mobil as $mobil )
        <div class="bg-white">
            <a href="/sewa" class="">
                <div class="m-6">
                    <div class="rounded overflow-hidden shadow-lg">
                        <img src="{{ asset('storage/' . $mobil->foto) }}" alt="mobil" class="w-80 h-60 border-b-4 border-black ">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">{{ $mobil->nama_mobil }}</div>
                            <p class="text-gray-700 text-base">{{ $mobil->nopol }}</p>
                            <p class="text-gray-700 text-base">{{ $mobil->type }}</p>
                            <p class="text-gray-700 text-base">{{ $mobil->warna }}</p>
                            <p class="text-gray-700 text-base">{{ $mobil->sewa }}</p>
                            <p class="text-gray-700 text-base">{{ $mobil->status }}</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>


</body>

</html>