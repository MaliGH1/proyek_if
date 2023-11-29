<link rel="stylesheet" href="/css/sewa.css" class="">
@extends('layouts.mainsewa')

@section('container')
<div class="bg-black ">
    <div class="layout">
        <h1 class="judul">Formulir Pengisian Penyewaan Mobil</h1>

        
        <form action="{{ route('sewa') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block text-white text-sm font-bold mb-2" for="nama">
                {{ __('Nama')}}
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama" type="text" placeholder="Nama">
        </div>
        <div class="mb-6">
            <label class="block text-white text-sm font-bold mb-2" for="password">
                {{ __('Tanggal Pinjam')}}
            </label>
            <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="nopol" type="date" placeholder="Tanggal Pinjam">
        </div>
        <div class="mb-6">
            <label class="block text-white text-sm font-bold mb-2" for="password">
                {{ __('Tanggal Pinjam')}}
            </label>
            <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="nopol" type="date" placeholder="Tanggal Pinjam">
        </div>


        
        <div class="inline-block relative w-64">
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
           
        <div class="inline-block relative w-64">
            <label for="sopir" class="text-white">Pilih Sopir:</label>
            <select name="sopir" id="sopir" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                @foreach($sopirs as $sopir)
                    <option value="{{ $sopir->nama }}">{{ $sopir->nama }}</option>
                @endforeach
            </select>
        </div>
            

            <button type="submit">Sewa Mobil</button>
        </form>
    </div>
</div>
@endsection