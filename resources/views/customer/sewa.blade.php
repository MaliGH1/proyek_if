<link rel="stylesheet" href="/css/sewa.css" class="">
@extends('layouts.mainsewa')

@section('container')
<div class="bg-black ">
    <div class="layout">
        <h1 class="judul">Formulir Pengisian Penyewaan Mobil</h1>

        <form action="{{ route('sewa') }}" method="POST">
            @csrf
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label class="block text-white text-sm font-bold mb-2" for="nama">
                    {{ __('Nama')}}
                </label>
                <!-- @foreach ($customers as $customer) -->
                @if(isset($customer) && $customer->username == auth()->user()->username)
                <input class="nama shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama" name="nama" type="text" value="{{ $customer->nama}}" required>
                @endif
                <!-- @endforeach -->
            </div>
            <div>
                <label class="block text-white text-sm font-bold mb-2" for="nohp">
                    {{ __('No. Hp')}}
                </label>
                @if(isset($customer) && $customer->username == auth()->user()->username)
                <input class="nohp shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nohp" name="nohp" type="text" value="{{ $customer->nohp}}">
                @endif
            </div>
            <div>
                <label class="block text-white text-sm font-bold mb-2" for="tgl_pjm">
                    {{ __('Waktu Peminjaman')}}
                </label>
                <input class="tgl_pjm shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="tgl_pjm"  name="tgl_pjm" type="datetime-local">
            </div>
            <div>
                <label class="block text-white text-sm font-bold mb-2" for="durasi">
                    {{ __('Durasi Peminjaman')}}
                </label>
                <select id="durasi" name="durasi" class="durasi">
                    <option value="24">24 Jam</option>
                    <!-- tambahkan opsi lain sesuai kebutuhan -->
                </select>
            </div>
            <div>
                <label class="block text-white text-sm font-bold mb-2" for="alamat">
                    {{ __('Alamat')}}
                </label>
                @if(isset($customer) && $customer->username == auth()->user()->username)
                <input class="alamat shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="alamat" id="alamat"  type="text" value="{{ $customer->alamat}}" required>
                @endif
            </div>
            <div>
                <label class="block text-white text-sm font-bold mb-2" for="jaminan">
                    {{ __('Jaminan')}}
                </label>
                <input class="jaminan cursor-not-allowed shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="jaminan" id="jaminan" type="text" value="KTP" disable readonly>
            </div>
            
            <div>
            <label for="mobil" class="text-white">Pilih Mobil:</label>
                <select name="mobil" id="mobil" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                    @foreach($mobils as $mobil)
                        <option value="{{$mobil->nama_mobil}}" data-price="{{$mobil->sewa}}">
                            {{ $mobil->nama_mobil }}
                        </option>
                    @endforeach
                </select>
            </div>
            
            <div>
                <label for="sopir" class="text-white">Pilih Sopir:</label>
                <select name="sopir" id="sopir" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                    @foreach($sopirs as $sopir)
                        <option value="{{ $sopir->nama }}" data-price="{{$sopir->harga}}">{{ $sopir->nama_supir }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </div>
            <div>
                <label for="total" class="text-white font-bold">TOTAL BAYAR:</label>
                <input class="total cursor-not-allowed shadow appearance-none border rounded py-2 px-3 text-black text-center font-bold focus:outline-none focus:shadow-outline"  name="total" id="total" type="text" value="{{ $mobil->sewa + $sopir->harga}}" readonly>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script>
                $(document).ready(function(){
                    // Ketika pilihan mobil atau sopir berubah
                    $('#mobil, #sopir').change(function(){
                        // Ambil harga dari pilihan mobil dan sopir
                        var mobil_price = $('#mobil option:selected').data('price');
                        var sopir_price = $('#sopir option:selected').data('price');

                        // Hitung total harga
                        var total = mobil_price + sopir_price;

                        // Update total harga
                        $('#total').val(total);
                    });
                });
                </script>
            </div>
        </form>

    </div>
</div>
@endsection