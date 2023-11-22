@extends('layouts.mainadmin')

@section('container')
<section class="hero" id="home">
    <div class="container flex left bg-black">
        <form class="w-full max-w-lg">
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Nomor Polisi
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane">
                    <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                </div>
            </div>

        </form>
        <div class="">
            <a href="{{ route('back.homesupir') }}" class="block no-underline">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                    Simpan
                </button>
            </a>
        </div>
    </div>
</section>
@endsection