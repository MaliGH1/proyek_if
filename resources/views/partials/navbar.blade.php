<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>Document</title>
</head>

<body>
    <nav class="bg-black top-0 z-100 fixed w-full bg-blue-600 py-3 px-5">
        <div class="container">
            <div class="flex items-center justify-center">
                <!-- Mobile Menu -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                    <a class="text-yellow-300 text-2xl font-semibold no-underline" href="/home">DVJR</a>
                </div>
                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-1 flex gap-5 items-center">
                    <div class="text-center"> <!-- Menggunakan 'text-center' untuk tengah-tengah teks "DVJR" -->
                        <a class="text-yellow-300 text-2xl font-semibold no-underline" href="/home">DVJR</a>
                    </div>
                    <a class="text-white no-underline" href="#home">Home</a>
                    <a class="text-white no-underline" href="/sewa">Sewa</a>

                    <a class="text-white block no-underline" href="#about-section">About</a>
                    <a class="text-white block no-underline" href="#contact-section">Contact</a>
                </div>
                <div class="ml-auto">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                        Logout
                    </button>
                </div>
            </div>

            <!-- Mobile Menu Content (Hidden by default) -->
            <div class="md:hidden" id="mobile-menu">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <a class="text-white block no-underline" href="/home">Home</a>
                    <a class="text-white block no-underline" href="/sewa">Sewa</a>
                    <a class="text-white block no-underline" href="#about-section">About</a>
                    <a class="text-white block no-underline" href="#contact-section">Contact</a>
                </div>
            </div>
        </div>
    </nav>
    <script>
        // JavaScript to toggle the mobile menu
        const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>