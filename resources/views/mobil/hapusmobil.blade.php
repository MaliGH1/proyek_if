@extends('layouts.mainadmin')

@section('container')
<section class="">
    <div class="flex flex-warp">
        <form class="w-full max-w-lg">
            <div class="m-6">
                <div class="">
                    <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-first-name">
                        Nomor Polisi
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text">
                    <p class="text-red-500 text-xs italic">Please fill out this field.</p>
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
@endsection