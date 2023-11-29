<link rel="stylesheet" href="/css/sewa.css" class="">
@extends('layouts.mainsewa')

@section('container')
<div class="bg-black ">
    <div class="layout">
        <h1 class="judul">Formulir Pengisian Penyewaan Mobil</h1>
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