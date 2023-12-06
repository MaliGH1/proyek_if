@extends('layouts.mainadmin')

@section('container')
<div class="m-6">
    <h2 class="text-white">Tambah Supir</h2>

    <form class="max-w-sm mx-auto" method="post" action="/supir" enctype="multipart/form-data">
        @csrf
        <div class="mb-5">
            <label for="noktp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No.KTP</label>
            <input name="noktp" type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-5">
            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Supir</label>
            <input name="nama" type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-5">
            <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
            <input name="alamat" type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-5">
            <label for="nohpsupir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No.Hp</label>
            <input name="nohpsupir" type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-5">

            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="foto">Upload Gambar Mobil</label>
            <img class="img-preview img-fluid" id="img-preview" style="display: none;">
            <input id="image" name="image" onchange="previewImage()" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>

        </div>

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah Supir</button>
    </form>

</div>

<script>
    function previewImage() {
        document.getElementById('image').addEventListener('change', function(e) {
            var reader = new FileReader();

            reader.onload = function(e) {
                // gambar src
                document.getElementById('img-preview').style.display = 'block';
                document.getElementById('old_image').value = e.target.files[0].name;
            };

            reader.readAsDataURL(e.target.files[0]); // convert to base64 string
        });
    }
</script>
@endsection