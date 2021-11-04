@extends('layout.app')

@section('title','home')

@section('content')
<div class="container mt-5">
    <div class="col-md-7 col-lg-12">
        <h2>Bahan Ajar</h2>
        <div class="row row-cols-1 row-cols-md-3 mb-2 g-4">
        @forelse ($materis as $materi)
            <div class="card" style="width: 20rem;">
                <div class="card h-100">
                    <a href="{{url('/materi/'.$materi->id)}}">
                        <img src="{{ asset('/gambar/buku/'.$materi->gambar) }}" class="card-img-top d-flex justify-content" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{url('/materi/'.$materi->id)}}">{{ $materi->judul }}</a>
                        </h5>
                        <p class="card-text">{{ $materi->sinopsis }}</p>
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
