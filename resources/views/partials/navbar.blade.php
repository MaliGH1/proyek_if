<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>Document</title>
    <style>
        nav {
            position: sticky;
            top: 0;
            z-index: 100;
            background-color: black;
            padding: 10px 0;
            border-bottom: 2px solid white;
        }
    </style>
</head>

<body>
    <nav class="top-0 z-100 fixed w-full bg-black py-3 px-5 border-b-2 border-white">
        <div class="container">
            <div class="flex items-center justify-center">
                <div class=" md:flex space-x-1 flex gap-5 items-center">
                    <div class="text-center"> <!-- Menggunakan 'text-center' untuk tengah-tengah teks "DVJR" -->
                        <a class="text-yellow-300 text-2xl font-semibold no-underline" href="/home">DVJR</a>
                    </div>
                    <a class="text-white no-underline" href="#home">Home</a>
                    <a class="text-white no-underline" href="/sewa">Sewa</a>

                    <a class="text-white block no-underline" href="#about-section">About</a>
                    <a class="text-white block no-underline" href="#contact-section">Contact</a>
                </div>
                <div class="ml-auto">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</body>

</html>