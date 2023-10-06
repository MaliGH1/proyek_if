<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="bg-black p-4 flex justify-between items-center">
        <!-- Logo -->
        <div class="text-white text-xl font-bold">
            <span class="text-yellow-500">D</span>
            <span class="text-yellow-500">V</span>
            <span class="text-yellow-500">J</span>
            <span class="text-yellow-500">R</span>
        </div>

        <!-- Tombol Kembali -->
        <a href="{{ route('back.home') }}" class="text-white text-sm px-3 py-1 bg-red-500 rounded-full hover:bg-red-600 no-underline">
            Kembali
        </a>
    </nav>

</body>

</html>