<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DVJR Rent Cars | {{ $title }}</title>
    <link rel="stylesheet" href="css/main.css" class="">
    <link href="/dist/tailwind.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    @foreach( $mobil as $mobil)
    <div class="container">
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">{{ $mobil["nama_mobil"] }}</div>
                <p class="text-gray-700 text-base">{{ $mobil["nopol"] }}</p>
                <p class="text-gray-700 text-base">{{ $mobil["type"] }}</p>
                <p class="text-gray-700 text-base">{{ $mobil["warna"] }}</p>
                <p class="text-gray-700 text-base">{{ $mobil["sewa"] }}</p>
                <p class="text-gray-700 text-base">{{ $mobil["status"] }}</p>
            </div>
        </div>
    </div>
    @endforeach
</body>

</html>