@extends('layout.app')

@section('title','Detail')

@section('content')
<div class="container mt-5">
    <div class="bungkus-gambar-artikel d-flex justify-content-center">
        <img src="{{asset("gambar/buku/$buku->gambar")}}" width="700vmax" alt="">
    </div>

    <div class="my-5">
        <h1>{{ $buku->judul }}</h1>
        <p class="">
            {{ $buku->pengarang }}
        </p>
    </div>
    {{-- <div>
        <embed src="{{ asset("modul/bambang yoi.pdf") }}#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="100%" height="1600px" />
    </div> --}}
</div>
@endsection
