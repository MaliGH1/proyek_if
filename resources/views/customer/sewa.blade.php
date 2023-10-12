@extends('layouts.mainsewa')

@section('container')
<div class="container mx-auto mt-8">
    <div class="bg-white p-4 rounded-lg shadow-md">
        <h1 class="text-2xl font-semibold mb-4">Formulir Pengisian Penyewaan Mobil</h1>

        <form action="/sewa" method="POST">
            @csrf
            <div class="mb-4 flex items-center">
                <label for="nama" class="text-sm font-medium text-gray-700 mr-2" style="max-width: 150px; overflow: hidden; white-space: nowrap;">Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" id="nama" name="nama" class="w-75 px-4 py-2 border rounded-lg">
            </div>

            <div class="mb-4 flex items-center">
                <label for="pilih" class="text-sm font-medium text-gray-700 mr-2" style="max-width: 150px; overflow: hidden; white-space: nowrap;">Pilih Mobil:</label>
                <div class="w-full">
                    <select id="pilih" name="pilih" class="w-75 px-4 py-2 border rounded-lg">
                        <option value="mobil1">Mazda Rx-7</option>
                        <option value="mobil2">Toyota Alphard</option>
                        <option value="mobil3">Toyota Yaris</option>
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
                <label for="tanggal-sewa" class="block text-sm font-medium text-gray-700" style="max-width: 150px; overflow: hidden; white-space: nowrap;">Tanggal Sewa:</label>
                <input type="date" id="tanggal-sewa" name="tanggal_sewa" class="w-75 px-4 py-2 border rounded-lg">
            </div>

            <div class="mb-4">
                <label for="tanggal-kembali" class="block text-sm font-medium text-gray-700" style="max-width: 150px; overflow: hidden; white-space: nowrap;">Tanggal Kembali:</label>
                <input type="date" id="tanggal-kembali" name="kembali" class="w-75 px-4 py-2 border rounded-lg">
            </div>

            <div class="mb-4 flex items-center">
                <label for="bukti-tf" class="text-sm font-medium text-gray-700 mr-2" style="max-width: 150px; overflow: hidden; white-space: nowrap;">Upload Bukti Transfer:</label>
                <input type="file" id="bukti-tf" name="bukti_tf" class="w-75 px-4 py-2 border rounded-r-lg">
            </div>

            <!-- Untuk menampilkan Total Biaya, Belum selesai -->
            <form method="POST" action="/proses-form">
                @csrf
                <!-- Input lainnya -->
                <div class="mb-4">
                    <label for="total-biaya" class="block text-sm font-medium text-gray-700">Total Biaya:</label>
                    <input type="text" id="total-biaya" name="total_biaya" class="w-full px-4 py-2 border rounded-lg" value="{{ $transaksi->total_biaya ?? '' }}">
                </div>
                <!-- Tombol Submit -->
            </form>


            <div class="mt-4">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg">Sewa Mobil</button>
            </div>
        </form>
    </div>
</div>
@endsection