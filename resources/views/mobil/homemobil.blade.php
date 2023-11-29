@extends('layouts.mainadmin')

@section('container')
<section class="" id="">
    <div class="flex left bg-black">
        <div class="flex flex-wrap">
            <div class="m-6">
                <div class="bg-white">
                    @foreach($mobils as $mobil)
                    <div class="rounded overflow-hidden shadow-lg">
                        <img src="" alt="mobil" class="w-80 h-60 border-b-4 border-black ">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">{{ $mobil->nama_mobil}}</div>
                            <p class="text-gray-700 text-base">{{ $mobil->nopol}}</p>
                            <p class="text-gray-700 text-base">{{ $mobil->type}}</p>
                            <p class="text-gray-700 text-base">{{ $mobil->status}}</p>
                            <p class="text-gray-700 text-base">{{ $mobil->warna}}</p>
                            <p class="text-gray-700 text-base">{{ $mobil->sewa}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="m-6">
        <a href="/updatesupir" class="">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                Update
            </button>
        </a>
        <a href="mobil/create" class="">
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