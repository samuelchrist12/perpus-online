@extends('layout.app')

@section('title','Detail')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">{{ $buku->judul }}</h1>
    <div class="row mt-5">
        <div class="col-3">
            <div class="d-flex justify-content-center">
                <img src="{{asset("gambar/buku/$buku->gambar")}}" width="auto" height="400" alt="">
            </div>
        </div>
        <div class="col">
            <div class="mt-5">
                <p>
                    Kategori : {{ $buku->kategori }}
                    <br>
                    Pengarang : {{ $buku->pengarang }}
                    <br>
                    Tahun Terbit : {{ $buku->tahun_terbit}}
                </p>
                <p>
                    Sinopsis :
                    <br>
                    {{ $buku->sinopsis }}
                </p>
            </div>
        </div>
    </div>
    {{-- <div>
        <embed src="{{ asset("modul/bambang yoi.pdf") }}#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="100%" height="1600px" />
    </div> --}}
</div>
@endsection
