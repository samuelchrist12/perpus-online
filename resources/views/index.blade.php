@extends('layout.app')

@section('title','home')

@section('content')
<div class="container mt-5">
    <div class="col-md-7 col-lg-12">
        <h2>Buku</h2>
        <div class="row row-cols-1 row-cols-md-3 mb-2 g-4">
        @forelse ($bukus as $buku)
            <div class="card" style="width: 20rem;">
                <div class="card h-100">
                    <a href="{{url('/buku/'.$buku->id)}}">
                        <img src="{{ asset('/gambar/buku/'.$buku->gambar) }}" class="card-img-top d-flex justify-content" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{url('/buku/'.$buku->id)}}">{{ $buku->judul }}</a>
                        </h5>
                        <p class="card-text">{{ $buku->sinopsis }}</p>
                    </div>
                </div>
            </div>
            @empty
            <div class="alert alert-success" role="alert">
                Tidak ada data
            </div>
        @endforelse
    </div>
    <div class="col-md-7 col-lg-12">
        <h2>Modul</h2>
        <div class="row row-cols-1 row-cols-md-3 mb-2 g-4">
        @forelse ($bukus as $buku)
            <div class="card" style="width: 20rem;">
                <div class="card h-100">
                    <a href="{{url('/buku/'.$buku->id)}}">
                        <img src="{{ asset('/gambar/buku/'.$buku->gambar) }}" class="card-img-top d-flex justify-content" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{url('/buku/'.$buku->id)}}">{{ $buku->judul }}</a>
                        </h5>
                        <p class="card-text">{{ $buku->sinopsis }}</p>
                    </div>
                </div>
            </div>
            @empty
            <div class="alert alert-success" role="alert">
                Tidak ada data
            </div>
        @endforelse
    </div>
</div>
@endsection
