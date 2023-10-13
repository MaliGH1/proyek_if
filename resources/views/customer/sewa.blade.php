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
                        <option value="mobil1">Mazda Rx-7</option>
                        <option value="mobil2">Toyota Alphard</option>
                        <option value="mobil3">Toyota Yaris</option>
                    </select>
                </div>
            </div>


            <div class="supir">
                <label class="supir-label">Apakah Anda Ingin Menyewa Supir?</label>
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

            <div class="tanggalsewa">
                <label for="tanggal-sewa" class="tanggalsewa-label">Tanggal Sewa:</label>
                <input type="date" id="tanggal-sewa" name="tanggal_sewa" class="tanggalsewa-input">
            </div>

            <div class="tanggalkembali">
                <label for="tanggal-kembali" class="tanggalkembali-label">Tanggal Kembali:</label>
                <input type="date" id="tanggal-kembali" name="kembali" class="tanggalkembali-input">
            </div>

            <div class="buktitf">
                <label for="bukti-tf" class="text-sm font-medium text-gray-700 mr-2" style="max-width: 150px; overflow: hidden; white-space: nowrap;">Upload Bukti Transfer:</label>
                <input type="file" id="bukti-tf" name="bukti_tf" class="w-75 px-4 py-2 border rounded-r-lg">
            </div>

            <!-- Untuk menampilkan Total Biaya, Belum selesai -->
            <form method="POST" action="/proses-form">
                @csrf
                <!-- Input lainnya -->
                <div class="totalbiaya">
                    <label for="total-biaya" class="block text-sm font-medium text-gray-700">Total Biaya:</label>
                    <input type="text" id="total-biaya" name="total_biaya" class="w-full px-4 py-2 border rounded-lg" value="{{ $transaksi->total_biaya ?? '' }}">
                </div>
                <!-- Tombol Submit -->
            </form>


            <div class="btnsewa">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg">Sewa Mobil</button>
            </div>
        </form>
    </div>
</div>
@endsection