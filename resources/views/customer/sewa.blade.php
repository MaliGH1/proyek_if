<link rel="stylesheet" href="/css/sewa.css" class="">
@extends('layouts.mainsewa')

@section('container')
<div class="bg-black ">
    <div class="layout">
        <h1 class="judul">Formulir Pengisian Penyewaan Mobil</h1>

        
        <form action="{{ route('sewa') }}" method="POST">
            @csrf
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label class="block text-white text-sm font-bold mb-2" for="nama">
                    {{ __('Nama')}}
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama" type="text" placeholder="Nama" required>
            </div>
            <div>
                <label class="block text-white text-sm font-bold mb-2" for="nama">
                    {{ __('No. Hp')}}
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nohp" type="text" placeholder="Nama">
            </div>
            <div>
                <label class="block text-white text-sm font-bold mb-2" for="nama">
                    {{ __('Tanggal Pinjam')}}
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="tgl_pjm" type="date" placeholder="Nama">
            </div>
            <div>
                <label class="block text-white text-sm font-bold mb-2" for="nama">
                    {{ __('Tanggal Kembali')}}
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="tgl_kmbl" type="date" placeholder="{ __('Tanggal Kembali')}}">
            </div>
            <div>
                <label class="block text-white text-sm font-bold mb-2" for="nama">
                    {{ __('Alamat')}}
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="alamat"  type="text" placeholder="Alamat" required>
            </div>
            <div>
                <label class="block text-white text-sm font-bold mb-2" for="nama">
                    {{ __('Jaminan')}}
                </label>
                <input class="cursor-not-allowed shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="jaminan"  type="text" placeholder="KTP" disable readonly>
            </div>
            
            <div>
            <label for="mobil" class="text-white">Pilih Mobil:</label>
                <select name="mobil" id="mobil" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                    @foreach($mobils as $mobil)
                        <option value="{{ $mobil->nama_mobil }}">
                            {{ $mobil->id}} -   
                            {{ $mobil->nama_mobil }}
                        </option>
                    @endforeach
                </select>
            </div>
            
            <div>
                <label for="sopir" class="text-white">Pilih Sopir:</label>
                <select name="sopir" id="sopir" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                    @foreach($sopirs as $sopir)
                        <option value="{{ $sopir->nama }}">{{ $sopir->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </div>
        </div>
        </form>
    </div>
</div>
@endsection