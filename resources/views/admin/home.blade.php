@extends('layouts.mainadmin')

@section('container')
<section class="hero" id="home">
    <div class="container flex left bg-black">
        <p class="text-white text-4xl">
        @if(auth()->check())
                Selamat Datang !{{ auth()->user()->username }}!
            @else
                Selamat Datang Admin
            @endif
        </p>
    </div>
</section>
@endsection