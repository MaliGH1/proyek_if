@extends('layouts.mainadmin')

@section('container')
<section class="" id="">
    <div class="m-6">
        <p class="text-white">
            Daftar Mobil DVJR RentCar
        </p>
        <a href="mobil/create" class="">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                Tambah
            </button>
        </a>
        @if(session()->has('success'))
        <div class="mb-4 rounded-lg bg-success-100 px-6 py-5 text-base text-success-700" role="alert">
            {{ session('success') }}
        </div>
        @endif
    </div>
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
                        <div class="flex flex-wrap">
                            <form action="/mobil/{{ $mobil->id }}" method="post">
                                @method('delete')
                                @csrf
                                <button class="bg-red-500 hover:bg-red-800 text-white font-bold py-2 px-4 border border-red-600 rounded" onclick="return confirm('Anda Yakin akan menghapus data mobil ini???')">
                                    Hapus
                                </button>
                            </form>

                            <a href="/" class="">
                                <button class="bg-red-500 hover:bg-red-800 text-white font-bold py-2 px-4 border border-red-600 rounded">
                                    update
                                </button>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection