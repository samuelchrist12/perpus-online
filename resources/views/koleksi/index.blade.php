@extends('layout.app')

@section('title','home')

@section('content')
<div class="container mt-5">
    <div class="col-md-7 col-lg-12">
        <div class="row row-cols-1 row-cols-md-3 mb-5 g-4">
        @forelse ($koleksis as $koleksi)
            <div class="card" style="width: 20rem;">
                <div class="card h-100">
                    <a href="{{url('/koleksi/'.$koleksi->id)}}">
                        <img src="{{ asset('/gambar/buku/'.$koleksi->gambar) }}" class="card-img-top d-flex justify-content" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{url('/koleksi/'.$koleksi->id)}}">{{ $koleksi->judul }}</a>
                        </h5>
                        <p class="card-text">{{ $koleksi->sinopsis }}</p>
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
