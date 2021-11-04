@extends('layout.app')

@section('title','home')

@section('content')
<div class="container mt-5">
    <form class="d-flex searchBar">
        <input class="form-control me-2 searchBarForm" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light searchBarBtn" type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="auto" fill="#353535" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
        </button>
    </form>
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
</div>
@endsection
