@extends('layouts.mainadmin')

@section('container')
<<<<<<< Updated upstream
<div class="m-6">

    <h2 class="text-white">Update Supir</h2>

    <form class="max-w-sm mx-auto" method="post" action="/supir/{{ $supir->noktp }}">
        @method('put')
        @csrf
        <div class="mb-5">
            <label for="noktp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No.KTP</label>
            <input name="noktp" type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $supir->noktp }}">
        </div>
        <div class="mb-5">
            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Supir</label>
            <input name="nama" type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $supir->nama }}">
        </div>
        <div class="mb-5">
            <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
            <input name="alamat" type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $supir->alamat }}">
        </div>
        <div class="mb-5">
            <label for="nohpsupir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No.Hp</label>
            <input name="nohpsupir" type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $supir->nohpsupir }}">
        </div>

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update Supir</button>

    </form>


</div>
=======
<section class="">
    <div class="flex flex-wrap">
        <form class="w-full max-w-lg">
            <div class="m-6">
                <div class="">
                    <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-first-name">
                        No. KTP
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text">
                    <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-last-name">
                        Nama Supir
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text">
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-last-name">
                        Alamat
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text">
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-last-name">
                        No.HP
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text">
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-last-name">
                        Foto
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe">
                </div>
            </div>
        </form>
    </div>
    <div class="m-6">
        <a href="" class="block no-underline">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                Simpan
            </button>
        </a>
    </div>

    </div>
</section>
>>>>>>> Stashed changes
@endsection