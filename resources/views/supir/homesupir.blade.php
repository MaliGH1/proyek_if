@extends('layouts.mainsupir')

@section('container')
<section class="px-64">
    @foreach( $supir as $supir)
    <div class="container">
        <div class="flex flex-wrap max-w-sm rounded overflow-hidden shadow-lg">
            <img src="{{ $supir->image }}" alt="supir" class="">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">{{ $supir->nama }}</div>
                <p class="text-gray-700 text-base">{{ $supir->noktp }}</p>
                <p class="text-gray-700 text-base">{{ $supir->alamat }}</p>
                <p class="text-gray-700 text-base">{{ $supir->nohpsupir }}</p>
            </div>
        </div>
    </div>
    @endforeach
    <div class="">
        <a href="/updatesupir" class="">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                Update
            </button>
        </a>
        <a href="/tambahsupir" class="">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                Tambah
            </button>
        </a>
        <a href="/hapussupir" class="">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                Hapus
            </button>
        </a>
    </div>
</section>
@endsection