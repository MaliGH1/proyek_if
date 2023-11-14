<link rel="stylesheet" href="/css/sewa.css" class="">
@extends('layouts.mainsewa')

@section('container')
<div class="bg-black ">
    <div class="layout">
        <h1 class="judul">Formulir Pengisian Penyewaan Mobil</h1>

        <form action="/sewa" method="POST">
            @csrf
            <div class="nama">
                <label for="nama" class="nama-label">Nama</label>
                <input type="text" id="nama" name="nama" class="nama-input">
            </div>

            <!-- <div class="mobil">
                <label for="pilih" class="mobil-label">Pilih Mobil</label>
                <div class="w-full">
                    <select id="pilih" name="pilih" class="mobil-input">
                        <option value="mobil0" data-harga="0">Pilih Mobil</option>
                        <option value="mobil1" data-harga="500000">Mazda Rx-7</option>
                        <option value="mobil2" data-harga="650000">Toyota Alphard</option>
                        <option value="mobil3" data-harga="300000">Toyota Yaris</option>
                    </select>
                </div>
            </div> -->
            <div class="relative inline-block text-left">
                <button type="button"
                    class="inline-flex justify-center w-full px-4 py-2 text-lg font-medium text-black border border-black rounded-md focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-opacity-75"
                    id="dropdown-button" aria-expanded="true" aria-haspopup="true">
                    Pilih Mobil
                </button>


                <div class="absolute right-0 mt-2 space-y-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 hidden"
                    role="menu" aria-orientation="vertical" aria-labelledby="dropdown-button" tabindex="-1"
                    id="dropdown-menu">
                    <!-- List mobil di sini -->
                    <a href="#" class="flex items-center p-1 space-x-1">
                        <img src="https://res.cloudinary.com/mufautoshow/image/upload/f_auto,f_auto/w_1200/v1621137839/moas/news/1621137832_toyota-alphard-transformers-mpv-mewah-terbaik-di-indonesia.png"
                            alt="Mobil 1" class="w-1200 h-216" data-harga="500000">
                        <span>Toyota Alphard</span>
                    </a>
                    <a href="#" class="flex items-center p-1 space-x-1">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/2021_Toyota_Yaris_TRD_Sportivo_1.5_%28Indonesia%29_front_view_01.jpg/1280px-2021_Toyota_Yaris_TRD_Sportivo_1.5_%28Indonesia%29_front_view_01.jpg"
                            alt="Mobil 2" class="w-1280 h-853">
                        <span>Toyota Yaris</span>
                    </a>
                    <!-- Tambahkan lebih banyak mobil sesuai kebutuhan -->

                </div>
            </div>

            <script src="{{ mix('js/app.js') }}"></script>

            <script>
            document.getElementById('dropdown-button').addEventListener('click', function() {
                var dropdownMenu = document.getElementById('dropdown-menu');
                dropdownMenu.classList.toggle('hidden');
            });

            // Tutup dropdown saat mengklik di luar dropdown
            document.addEventListener('click', function(event) {
                var dropdownMenu = document.getElementById('dropdown-menu');
                if (!event.target.closest('#dropdown-button') && !event.target.closest('#dropdown-menu')) {
                    dropdownMenu.classList.add('hidden');
                }
            });
            </script>


            <div class="supir">
                <label class="supir-label">Apakah Anda Ingin Menyewa Supir?</label>
                <div class="mt-2">
                    <label class="inline-flex items-center">
                        <input type="radio" name="supir" value="ya" class="form-radio" data-harga="50000">
                        <span class="ml-2">Ya</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="supir" value="tidak" class="form-radio" data-harga="0">
                        <span class="ml-2">Tidak</span>
                    </label>
                </div>
            </div>

            <div class="tanggalsewa">
                <label for="tanggal-sewa" class="tanggalsewa-label">Tanggal Sewa:</label>
                <input type="date" id="tanggal-sewa" name="tanggal_sewa" class="tanggalsewa-input">
            </div>

            <div class="tanggalkembali">
                <label for="tanggal-kembali" class="tanggalkembali-label">Tanggal Kembali:</label>
                <input type="date" id="tanggal-kembali" name="kembali" class="tanggalkembali-input">
            </div>

            <!-- <div class="buktitf">
                <label for="bukti-tf" class="text-sm font-medium text-gray-700 mr-2" style="max-width: 150px; overflow: hidden; white-space: nowrap;">Upload Bukti Transfer:</label>
                <input type="file" id="bukti-tf" name="bukti_tf" class="w-75 px-4 py-2 border rounded-r-lg">
            </div> -->

            <!-- Untuk menampilkan Total Biaya, Belum selesai -->
            <div class="total-harga">
                <p>Total Harga: <span id="total-harga">0</span></p>
            </div>

            <script>
            document.addEventListener("DOMContentLoaded", function() {
                const selectMobil = document.getElementById("pilih");
                const radioSupirYa = document.querySelector('input[name="supir"][value="ya"]');
                const radioSupirTidak = document.querySelector('input[name="supir"][value="tidak"]');
                const totalHargaElement = document.getElementById("total-harga");

                // harga awal
                let totalHarga = 0;

                // menghitung total harga
                function hitungTotalHarga() {
                    const mobilValue = selectMobil.value;
                    const mobilOption = selectMobil.options[selectMobil.selectedIndex];
                    const mobilHarga = parseFloat(mobilOption.getAttribute("data-harga"));

                    if (radioSupirYa.checked) {
                        const hargaSupir = parseFloat(radioSupirYa.getAttribute("data-harga"));
                        totalHarga = mobilHarga + hargaSupir;
                    } else {
                        totalHarga = mobilHarga;
                    }

                    totalHargaElement.textContent = totalHarga;
                }

                selectMobil.addEventListener("change", hitungTotalHarga);
                radioSupirYa.addEventListener("change", hitungTotalHarga);
                radioSupirTidak.addEventListener("change", hitungTotalHarga);

                hitungTotalHarga();
            });
            </script>

            <!-- Tombol Submit -->
            <a href="/home"><button class="px-4 py-2 bg-blue-500 text-white rounded-lg">Sewa Mobil</button></a>

        </form>
    </div>
</div>
@endsection