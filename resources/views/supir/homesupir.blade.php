@extends('layouts.mainadmin')

@section('container')
<section class="">
    <div class="flex flex-wrap">
        @foreach( $supir as $supir)
        <div class="m-6">
            <div class="rounded overflow-hidden shadow-lg bg-white">
                <!-- <img src="{{ $supir->image }}" alt="supir" class="w-80 h-60 border-b-4 border-black "> -->
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $supir->nama }}</div>
                    <p class="text-gray-700 text-base">NO KTP : {{ $supir->noktp }}</p>
                    <p class="text-gray-700 text-base">Alamat : {{ $supir->alamat }}</p>
                    <p class="text-gray-700 text-base">No. Tepl: {{ $supir->nohpsupir }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="m-6">
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