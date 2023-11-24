@extends('layouts.mainadmin')

@section('container')
<section class="">
    <div class="flex flex-wrap">
        @foreach( $mobil as $mobil)
        <div class="m-6">
            <div class="rounded overflow-hidden shadow-lg bg-white">
                <img src="{{ $mobil->foto }}" alt="mobil" class="w-80 h-60 border-b-4 border-black ">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $mobil->nama_mobil }}</div>
                    <p class="text-gray-700 text-base">{{ $mobil->nopol }}</p>
                    <p class="text-gray-700 text-base">{{ $mobil->type }}</p>
                    <p class="text-gray-700 text-base">{{ $mobil->warna }}</p>
                    <p class="text-gray-700 text-base">{{ $mobil->sewa }}</p>
                    <p class="text-gray-700 text-base">{{ $mobil->status }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="m-6">
        <div class="">
            <a href="/updatemobil" class="">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                    Update
                </button>
            </a>
            <a href="/tambahmobil" class="">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                    Tambah
                </button>
            </a>
            <a href="/hapusmobil" class="">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                    Hapus
                </button>
            </a>
        </div>
    </div>
</section>
@endsection