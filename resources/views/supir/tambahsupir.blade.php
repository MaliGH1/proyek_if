@extends('layouts.mainadmin')

@section('container')
<section class="">
    <div class="flex flex-wrap">
        <form class="w-full max-w-lg" method="post" action="{{ route('supir.store') }}">
            @csrf
            <div class="m-6">
                <div class="">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nama">
                        Nama Supir
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="nama" name="nama" type="text">
                    <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="alamat">
                        Alamat Supir
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="alamat" name="alamat" type="text">
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nohpsupir">
                        No. Telpon
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="nohpsupir" name="nohpsupir" type="text">
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="image">
                        Foto
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="image" name="image" type="text">
                </div>
            </div>
            <div class="m-6">
                <a href="" class="block no-underline">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                        Tambah
                    </button>
                </a>
            </div>
        </form>
    </div>

</section>
@endsection