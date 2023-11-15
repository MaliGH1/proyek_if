@extends('layouts.main')

@section('container')

<section>
    <div class="bg-black text-white py-20">
        <div class="container mx-auto flex flex-col md:flex-row items-center my-12 md:my-24" id="home">
            <div class="flex flex-col w-full lg:w-1/3 justify-center items-start p-8">
                <h1 class="text-3xl md:text-5xl p-2 text-yellow-300 tracking-loose">DVJR RentCar</h1>
                <h2 class="text-3xl md:text-5xl leading-relaxed md:leading-snug mb-2">Transportasi Andalan Saat Holiday
                </h2>
                <p class="text-sm md:text-base text-gray-50 mb-4">Banyak pilihan Mobil sesuai dengan Kebutuhan Anda</p>
                <a href="/sewa" class="bg-transparent hover:bg-yellow-300 text-yellow-300 hover:text-black rounded shadow hover:shadow-lg py-2 px-4 border border-yellow-300 hover:border-transparent">
                    Sewa Sekarang</a>
            </div>
            <div class="p-8 mt-12 mb-6 md:mb-0 md:mt-0 ml-0 md:ml-12 lg:w-2/3  justify-center">
                <div class="h-48 flex flex-wrap content-center">
                    <div>
                        <img class="inline-block mt-28 hidden xl:block w-auto" src="https://i.pinimg.com/564x/34/49/10/344910343716de41e27f92a6c0320708.jpg">
                    </div>
                    <div>
                        <img class="inline-block mt-24 md:mt-0 p-8 md:p-0" src="">
                    </div>
                    <div>
                        <img class="inline-block mt-28 hidden lg:block" src="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="h-screen bg-black flex flex-col">
        <!-- About Us Page Section -->
        <div id="about-section" class="py-16 bg-black align-top">
            <div class="container mx-auto">
                <h1 class="text-4xl text-white font-semibold text-center">Tentang Kami</h1>
                <p class="mt-4 text-lg text-white">Kami adalah sebuah perusahaan yang berdedikasi untuk memberikan solusi terbaik kepada pelanggan kami. Dengan pengalaman bertahun-tahun, kami siap melayani Anda dengan sepenuh hati.</p>
            </div>
        </div>
    </div>

    <div class="relative flex items-top justify-center min-h-screen bg-black dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8" id="contact-section">
            <div class="mt-8 overflow-hidden">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6 mr-2 bg-gray-100 dark:bg-gray-800 sm:rounded-lg">
                        <h1 class="text-4xl sm:text-5xl text-gray-800 dark:text-white font-extrabold tracking-tight">
                            Get in touch
                        </h1>
                        <p class="text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400 mt-2">
                            Fill in the form to start a conversation
                        </p>

                        <div class="flex items-center mt-8 text-gray-600 dark:text-gray-400">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <div class="ml-4 text-md tracking-wide font-semibold w-40">
                                Acme Inc, Street, State,
                                Postal Code
                            </div>
                        </div>

                        <div class="flex items-center mt-4 text-gray-600 dark:text-gray-400">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <div class="ml-4 text-md tracking-wide font-semibold w-40">
                                +44 1234567890
                            </div>
                        </div>

                        <div class="flex items-center mt-2 text-gray-600 dark:text-gray-400">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <div class="ml-4 text-md tracking-wide font-semibold w-40">
                                info@acme.org
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    // Fungsi untuk menangani pengguliran ke bagian yang sesuai
    function scrollToSection(sectionId) {
        const section = document.getElementById(sectionId);
        if (section) {
            section.scrollIntoView({
                behavior: 'smooth'
            });
        }
    }
    // Tambahkan event listener untuk tautan "home"
    document.querySelector('a[href="#home"]').addEventListener('click', function(event) {
        event.preventDefault();
        scrollToSection('home');
    });

    // Tambahkan event listener untuk tautan "About"
    document.querySelector('a[href="#about-section"]').addEventListener('click', function(event) {
        event.preventDefault();
        scrollToSection('about-section');
    });

    // Tambahkan event listener untuk tautan "Contact"
    document.querySelector('a[href="#contact-section"]').addEventListener('click', function(event) {
        event.preventDefault();
        scrollToSection('contact-section');
    });
</script>
</section>
@endsection