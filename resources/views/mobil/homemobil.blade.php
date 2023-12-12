@extends('layouts.mainadmin')

@section('container')
<section class="m-6" id="">
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
    <div class="flex flex-wrap">
        @foreach($mobils as $mobil)
        <div class="bg-black">
            <div class="rounded bg-gray-900 border-gray-500 border-4 overflow-hidden shadow-lg m-2">
                <img src="{{ asset('storage/' . $mobil->foto) }}" alt="mobil" class="w-80 h-56 border-b-4 border-black">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $mobil->nama_mobil}} ({{ $mobil->status}})</div>
                    <p class="text-white text-base">Plat Nomor: {{ $mobil->nopol}}</p>
                    <p class="text-white text-base">Tipe Mobil: {{ $mobil->type}}</p>
                    <p class="text-white text-base">Warna: {{ $mobil->warna}}</p>
                    <p class="text-white text-base">Harga Sewa: Rp{{ $mobil->sewa}}</p>
                </div>
                <div class="flex flex-wrap p-2">
                    <form action="/mobil/{{ $mobil->id }}" method="post" class="p-2">
                        @method('delete')
                        @csrf
                        <button class="bg-red-500 hover:bg-red-800 text-white font-bold py-2 px-4 border border-red-600 rounded " onclick="return confirm('Anda Yakin akan menghapus data mobil ini???')">
                            Hapus
                        </button>
                    </form>
                    <a href="/mobil/{{ $mobil->id }}/edit" class="p-2">
                        <button class="bg-red-500 hover:bg-red-800 text-white font-bold py-2 px-4 border border-red-600 rounded ">
                            update
                        </button>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection