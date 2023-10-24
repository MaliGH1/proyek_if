<link rel="stylesheet" href="/css/sewa.css" class="">
@extends('layouts.mainsewa')

@section('container')
<div class="container mx-auto mt-8">
    <div class="layout">
        <h1 class="judul">Formulir Pengisian Penyewaan Mobil</h1>

        <form action="/sewa" method="POST">
            @csrf
            <div class="nama">
                <label for="nama" class="nama-label">Nama</label>
                <input type="text" id="nama" name="nama" class="nama-input">
            </div>

            <div class="mobil">
                <label for="pilih" class="mobil-label">Pilih Mobil</label>
                <div class="w-full">
                    <select id="pilih" name="pilih" class="mobil-input">
                        <option value="mobil1" data-harga="500000">Mazda Rx-7</option>
                        <option value="mobil2" data-harga="650000">Toyota Alphard</option>
                        <option value="mobil3" data-harga="300000">Toyota Yaris</option>
                    </select>
                </div>
            </div>

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

                // Inisialisasi total harga
                let totalHarga = 0;

                // Fungsi untuk menghitung total harga
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

                // Tambahkan event listener ke elemen-elemen yang relevan
                selectMobil.addEventListener("change", hitungTotalHarga);
                radioSupirYa.addEventListener("change", hitungTotalHarga);
                radioSupirTidak.addEventListener("change", hitungTotalHarga);

                // Panggil fungsi hitungTotalHarga saat halaman dimuat
                hitungTotalHarga();
            });
            </script>







            <!-- Tombol Submit -->
            <div class="btnsewa">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg">Sewa Mobil</button>
            </div>
        </form>
    </div>
</div>
@endsection