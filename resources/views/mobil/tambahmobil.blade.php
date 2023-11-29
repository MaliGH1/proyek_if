@extends('layouts.mainadmin')

@section('container')
<div class="m-6">
    <h2 class="text-white">Tambah Mobil</h2>

    <form class="max-w-sm mx-auto" method="post" action="/mobil">
        @csrf
        <div class="mb-5">
            <label for="nama_mobil" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Mobil</label>
            <input type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-5">
            <label for="nomer_polisi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomer Polisi</label>
            <input type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-5">
            <label for="warna" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Warna</label>
            <input type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-5">
            <label for="tipe_mobil" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipe Mobil</label>
            <select name="country" class="border-0 cursor-pointer rounded-full drop-shadow-md bg-sky-200 w-72 duration-300 hover:bg-sky-400 focus:bg-amber-300">
                <option>MPV</option>
                <option>SUV</option>
                <option>SPORT</option>
            </select>
        </div>
        <div class="mb-5">
            <label for="harga_sewa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Sewa</label>
            <input type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-5">
            <label for="tgl_pjk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Pajak Mobil</label>
            <input type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah Mobil</button>

    </form>

</div>
@endsection