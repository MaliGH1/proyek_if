@extends('layouts.main')

@section('container')
<section class="pt-20">
    <div class="flex flex-wrap">
        @foreach( $mobil as $mobil )
        <div class="bg-white">
            <a href="/sewa" class="">
                <div class="m-6">
                    <div class="rounded overflow-hidden shadow-lg">
                        <img src="{{ asset('storage/' . $mobil->foto) }}" alt="mobil" class="w-80 h-60 border-b-4 border-black ">
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
            </a>
        </div>

        @endforeach
    </div>

</section>
@endsection