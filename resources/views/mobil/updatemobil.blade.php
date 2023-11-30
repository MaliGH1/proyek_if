@extends('layouts.mainadmin')

@section('container')
<div class="m-6">

    <h2 class="text-white">Update Mobil</h2>

    <form class="max-w-sm mx-auto" method="post" action="/mobil/{{ $mobil->id }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-5">
            <label for="nama_mobil" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Mobil</label>
            <input name="nama_mobil" type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $mobil->nama_mobil }}">
        </div>
        <div class="mb-5">
            <label for="nomer_polisi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomer Polisi</label>
            <input name="nopol" type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $mobil->nopol }}">
        </div>
        <div class="mb-5">
            <label for="warna" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Warna</label>
            <input name="warna" type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $mobil->warna }}">
        </div>
        <div class="mb-5">
            <label for="tipe_mobil" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipe Mobil</label>
            <select name="type" class="border-0 cursor-pointer rounded-full drop-shadow-md bg-sky-200 w-72 duration-300 hover:bg-sky-400 focus:bg-amber-300" value="{{ $mobil->type }}">
                <option>MPV</option>
                <option>SUV</option>
                <option>SPORT</option>
            </select>
        </div>
        <div class="mb-5">
            <label for="harga_sewa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Sewa</label>
            <input name="sewa" type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $mobil->sewa }}">
        </div>
        <div class="mb-5">
            <label for="tgl_pjk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Pajak Mobil</label>
            <input name="tgl_pjk" type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $mobil->tgl_pjk }}">
        </div>
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="foto">Upload Gambar Mobil</label>
            @if($mobil->foto)
            <img src="{{ asset('storage/' . $mobil->foto) }}" class="img-preview block">
            @else
            <img class="img-preview img-fluid">
            @endif
            <input id="foto" name="foto" onchange="previewImage()" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update Mobil</button>

    </form>


</div>
<script>
    function previewImage() {
        const image = document.querySelector('#foto');
        const imgPreview = document.querySelector('img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.file[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection