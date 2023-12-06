@extends('layouts.mainadmin')

@section('container')
<section class="" id="">
    <div class="m-6">
        <p class="text-white">
            Daftar Supir DVJR RentCar
        </p>
        <a href="supir/create" class="">
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
                    @foreach($supirs as $supir)
                    <div class="rounded overflow-hidden shadow-lg">
                        <img src="{{ asset('storage/' . $supir->image) }}" alt="Supir" class="w-80 h-60 border-b-4 border-black ">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">{{ $supir->noktp}}</div>
                            <p class="text-gray-700 text-base">{{ $supir->nama}}</p>
                            <p class="text-gray-700 text-base">{{ $supir->alamat}}</p>
                            <p class="text-gray-700 text-base">{{ $supir->nohpsupir}}</p>
                        </div>
                        <div class="flex flex-wrap">
                            <form action="/supir/{{ $supir->noktp }}" method="post">
                                @method('delete')
                                @csrf
                                <button class="bg-red-500 hover:bg-red-800 text-white font-bold py-2 px-4 border border-red-600 rounded" onclick="return confirm('Anda yakin akan menghapus data supir ini?')">
                                    Hapus
                                </button>
                            </form>
                            <a href="/supir/{{ $supir->noktp }}/edit" class="">
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