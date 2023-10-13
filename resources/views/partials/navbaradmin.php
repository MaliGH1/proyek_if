<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
    <!-- Tambahkan link CSS Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="flex">
        <!-- Tombol Hamburger Menu -->
        <button id="menu-toggle" class="block sm:hidden px-2 py-1 text-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
        <!-- Navbar (contoh) -->
        <div id="navbar" class="hidden sm:flex space-x-4">
            <a href="#" class="text-blue-500 hover:text-blue-700">Dashboard</a>
            <a href="#" class="text-blue-500 hover:text-blue-700">Verification</a>
            <a href="#" class="text-blue-500 hover:text-blue-700">Cars</a>
            <a href="#" class="text-blue-500 hover:text-blue-700">Drivers</a>
        </div>
    </div>

    <!-- Your page content -->

    <!-- JavaScript -->
    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const navbar = document.getElementById('navbar');

        menuToggle.addEventListener('click', () => {
            navbar.classList.toggle('hidden');
        });
    </script>
</body>

</html>