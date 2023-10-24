@extends('layouts.mainsupir')

@section('container')
<section class="hero" id="home">
    <div class="container flex left">
        <p class="">
            IKI supir cok
        </p>
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
    </div>
</section>
@endsection