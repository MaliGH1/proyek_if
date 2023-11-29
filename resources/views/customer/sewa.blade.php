<link rel="stylesheet" href="/css/sewa.css" class="">
@extends('layouts.mainsewa')

@section('container')
<div class="bg-black ">
    <div class="layout">
        <h1 class="judul">Formulir Pengisian Penyewaan Mobil</h1>

        <!-- <form action="{{ route('invoice') }}" method="POST">
            @csrf
            <div class="nama">
                <label for="nama" class="nama-label">Nama</label>
                <input type="text" id="nama" name="nama" class="nama-input">
            </div>

            

    <div class="supir">
        <label class="supir-label">Apakah Anda Ingin Menyewa Supir?</label>
        <div class="mt-2">
            <label class="inline-flex items-center">
                <input type="radio" name="supir" value="ya" class="form-radio" data-harga="50000">
                <span class="ml-2">Ya</span>
            </label>
            <label class="inline-flex items-center ml-4">
                <input type="radio" name="supir" value="tidak" class="form-radio" data-harga="0">
                <span class="ml-2">Tidak</span>
            </label>
        </div>
    </div>

    <div class="tanggalsewa">
        <label for="tanggal-sewa" class="tanggalsewa-label">Tanggal Sewa:</label>
        <input type="date" id="tanggal-sewa" name="tanggal_sewa" class="tanggalsewa-input">
    </div>

    <div class="tanggalkembali">
        <label for="tanggal-kembali" class="tanggalkembali-label">Tanggal Kembali:</label>
        <input type="date" id="tanggal-kembali" name="kembali" class="tanggalkembali-input">
    </div>

    <div class="relative inline-block text-left">
                <button type="button"
                    class="inline-flex justify-center w-48 px-4 py-2 text-lg font-medium text-black bg-white border border-yellow-500 rounded-md focus:outline-none focus-visible:ring-2 focus-visible:ring-yellow-500 focus-visible:ring-opacity-75"
                    id="dropdown-button" aria-expanded="true" aria-haspopup="true">
                    Pilih Mobil
                </button>
                @foreach( $mobil as $mobil)

                <div class="static right-0 mt-2 space-y-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 hidden"
                    role="menu" aria-orientation="vertical" aria-labelledby="dropdown-button" tabindex="-1"
                    id="dropdown-menu">

                    <div class="flex">
                        <!-- First Card -->
                        <!-- <div
                            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 m-4">
                            <img class="rounded-t-sm" src="{{$mobil->foto}}" alt="" />

                            <div class="p-5">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">
                                    {{ $mobil->nama_mobil}}
                                </h5>

                                <p class="mb-3 font-normal text-black-700 dark:text-black-400">
                                    <strong style="font-size: 1.2em;">Rp. {{$mobil->sewa}}/hari</strong>
                                </p>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $mobil->status}}</p>
                                <a href="#"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    id="button-pilih">
                                    Pilih
                                </a>
                            </div>
                        </div>
                        <!-- Second Card -->
                        <!-- <div
                        class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 m-4">
                            <img class="rounded-t-sm object-cover"
                                src="https://i.pinimg.com/564x/cb/43/75/cb43750b56833308a168785d00e029d0.jpg" alt=""
                                style="object-fit: cover; width: 100%; height: 200px;">

                            <div class="p-5">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">
                                    Toyota Yaris
                                </h5>

                                <p class="mb-3 font-normal text-black-700 dark:text-black-400">
                                    <strong style="font-size: 1.2em;">Rp. 300.000/hari</strong>
                                </p>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Toyota Yaris</p>
                                <a href="#"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    id="button-pilih">
                                    Pilih
                                </a>
                            </div>
                        </div>
                    </div> -->
                    <!-- Third Card -->
                    <!-- <div
                        class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 m-4">
                        <img class="rounded-t-sm object-cover"
                            src="https://i.pinimg.com/564x/91/46/62/914662cf3d64159e082cc2580df4358f.jpg" alt=""
                            style="object-fit: cover; width: 100%; height: 200px;">

                        <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">
                                Mitsubishi Pajero
                            </h5>

                            <p class="mb-3 font-normal text-black-700 dark:text-black-400">
                                <strong style="font-size: 1.2em;">Rp. 500.000/hari</strong>
                            </p>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Mitsubishi Pajero</p>
                            <a href="#"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                id="button-pilih">
                                Pilih
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    @endforeach
    <script src="{{ mix('js/app.js') }}"></script>

    <script>
    document.getElementById('dropdown-button').addEventListener('click', function() {
        var dropdownMenu = document.getElementById('dropdown-menu');
        dropdownMenu.classList.toggle('hidden');
    });

    // Tutup dropdown saat mengklik di luar dropdown
    document.addEventListener('click', function(event) {
        var dropdownMenu = document.getElementById('dropdown-menu');
        if (!event.target.closest('#dropdown-button') && !event.target.closest('#dropdown-menu')) {
            dropdownMenu.classList.add('hidden');
        }

    });
    </script> -->




    <!-- Tombol Submit -->
    <!-- <a href="/invoice"><button class="px-4 py-2 bg-blue-500 text-white rounded-lg">Sewa Mobil</button></a>

    </form> -->
    <form action="{{ route('sewa') }}" method="POST">
    @csrf
        <label for="mobil">Pilih Mobil:</label>
        <select name="mobil" id="mobil">
            @foreach($mobil as $mobil)
                <option value="{{ $mobil->nama_mobil }}">
                    {{ $mobil->foto}} -   
                    {{ $mobil->nama_mobil }}
                </option>
            @endforeach
        </select>

        <label for="sopir">Pilih Sopir:</label>
        <select name="sopir" id="sopir">
            @foreach($sopir as $sopir)
                <option value="{{ $sopir->id }}">{{ $sopir->nama }}</option>
            @endforeach
        </select>

        <button type="submit">Sewa Mobil</button>
    </form>
    </div>
</div>
@endsection