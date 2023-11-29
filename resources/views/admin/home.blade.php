@extends('layouts.mainadmin')

@section('container')
<section class="hero" id="home">
    <div class="container flex left bg-black">
        <p class="text-white text-4xl">
        @if(auth()->check())
             <img src="image/DVJR.jpg" width="1000/">

                Selamat Datang dan Semangat Berkerja {{ auth()->user()->username }}!
            @else
                Selamat Datang
            @endif
        </p>
    </div>
</section>
@endsection