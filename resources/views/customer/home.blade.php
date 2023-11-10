@extends('layouts.main')

@section('container')
<section class="hero">
    <!-- Home Page Section -->
    <div class="h-screen bg-gray-200 flex flex-col">
        <div class="py-16 align-top" id="home">
            <div class="h-screen bg-gray-100 flex flex-col justify-center items-center">
                <!-- Konten beranda Anda -->
                <div class="bg-blue-100 py-16">
                    <div class="container mx-auto text-center">
                        <h1 class="text-4xl font-semibold">Selamat datang di Situs Kami</h1>
                        <p class="mt-4 text-lg">Kami adalah tempat yang luar biasa untuk semua kebutuhan Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="h-screen bg-gray-200 flex flex-col">
        <!-- About Us Page Section -->
        <div id="about-section" class="py-16 align-top">
            <div class="container mx-auto">
                <h1 class="text-4xl font-semibold text-center">Tentang Kami</h1>
                <p class="mt-4 text-lg">Kami adalah sebuah perusahaan yang berdedikasi untuk memberikan solusi terbaik kepada pelanggan kami. Dengan pengalaman bertahun-tahun, kami siap melayani Anda dengan sepenuh hati.</p>
            </div>
        </div>
    </div>

    <div class="bg-gray-100 py-16 flex flex-col justify-center items-center">
        <!-- Konten "Hubungi Kami" Anda -->
        <!-- Contact Page Section -->
        <div id="contact-section" class="bg-gray-100 py-16">
            <div class="container mx-auto">
                <h1 class="text-4xl font-semibold text-center">Hubungi Kami</h1>
                <div class="mt-8 max-w-md mx-auto">
                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700">Nama Anda</label>
                            <input type="text" id="name" name="name" class="form-input w-full">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700">Alamat Email</label>
                            <input type="email" id="email" name="email" class="form-input w-full">
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-gray-700">Pesan Anda</label>
                            <textarea id="message" name="message" rows="4" class="form-textarea w-full"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="px-4 py-2 bg-blue-500 text-white hover:bg-blue-600">Kirim Pesan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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