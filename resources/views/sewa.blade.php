@extends('layouts.main')

@section('container')
<div class="container mx-auto mt-8">
    <div class="bg-white p-4 rounded-lg shadow-md">
        <h1 class="text-2xl font-semibold mb-4">Formulir Pengisian Penyewaan Mobil</h1>

        <form action="/sewa" method="POST">
            @csrf
            <div class="mb-4 flex items-center">
                <label for="nama" class="text-sm font-medium text-gray-700 mr-2" style="max-width: 150px; overflow: hidden; white-space: nowrap;">Nama Penyewa:</label>
                <input type="text" id="nama" name="nama" class="w-75 px-4 py-2 border rounded-lg">
            </div>

            <div class="mb-4 flex items-center">
                <label for="pilih" class="text-sm font-medium text-gray-700 mr-2" style="max-width: 150px; overflow: hidden; white-space: nowrap;">Pilih Mobil:</label>
                <div class="w-full">
                    <select id="pilih" name="pilih" class="w-75 px-5 py-2 border rounded-lg">
                        <option value="mobil1">Mazda Rx-7</option>
                        <option value="mobil2">Toyota Alphard</option>
                        <option value="mobil3">Toyota Yaris</option>
                        <!-- Tambahkan lebih banyak opsi sesuai dengan mobil yang ingin Anda tampilkan -->
                    </select>
                </div>
            </div>


            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Apakah Anda Ingin Menyewa Supir?</label>
                <div class="mt-2">
                    <label class="inline-flex items-center">
                        <input type="radio" name="supir" value="ya" class="form-radio">
                        <span class="ml-2">Ya</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="supir" value="tidak" class="form-radio">
                        <span class="ml-2">Tidak</span>
                    </label>
                </div>
            </div>

            <div class="mb-4">
                <label for="tanggal-sewa" class="block text-sm font-medium text-gray-700">Tanggal Sewa</label>
                <input type="date" id="tanggal-sewa" name="tanggal_sewa" class="w-full px-4 py-2 border rounded-lg">
            </div>

            <!-- Tambahkan lebih banyak input dan elemen sesuai kebutuhan Anda -->

            <div class="mt-4">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg">Sewa Mobil</button>
            </div>
        </form>
    </div>
</div>
@endsection