@extends('layouts.mainadmin')

@section('container')
<section class="">
    <div class="flex flex-wrap">
        <form class="w-full max-w-lg" method="post" action="{{ route('supir.store') }}">
        @csrf
            <div class=" m-6">
                <div class="">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        NIK Supir
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="noktp" type="text">
                    <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                </div>
            </div>
            <div class="m-6">
                <a href="" class="block no underline">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                        Hapus
                    </button>
                </a>
            </div>
        </form>
    </div>

</section>
@endsection