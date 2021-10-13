@extends('layout.app')

@section('title','Detail')

@section('content')
<div class="container mt-5">
    <div class="bungkus-gambar-artikel d-flex justify-content-center">
        <img src="{{asset("gambar/buku/$koleksi->gambar")}}" width="700vmax" alt="">
    </div>

    <div class="my-5">
        <h1>{{ $koleksi->judul }}</h1>
        <p class="">
            {{ $koleksi->pengarang }}
        </p>
    </div>
</div>
@endsection
