@extends('layout.app')

@section('title','home')

@section('content')
<div class="container mt-4">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('/asset/A4.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('/asset/A4.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('/asset/A4.jpg') }}" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <div class="col-md-7 col-lg-12 marginContent">
        <div class="row logoMargin">
            <div class="logoArea">
                <div class="logoHome">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="auto" fill="#F0F1D9" class="bi bi-journal-text" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 1h6v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8V1z"/>
                        <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                        <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                    </svg>
                </div>
            </div>
            <div class="col logoText">
                <h2>Buku</h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 mb-2 g-4">
            <div class="card homeCard titleCard">
                <div class="card h-100 imageTittleCard">
                    <img src="" class="card-img-top d-flex justify-content" alt="...">
                </div>
                <div class="textContentLink">
                    <h5 class="card-title text-align-top">
                        <a href="" class="btn btn-lg btn-light btnTittle">Lebih Lengkap</a>
                    </h5>
                    {{-- <p class="card-text">{{ $buku->pengarang }}</p> --}}
                </div>
            </div>
        @forelse ($bukus as $buku)
            <div class="card homeCard contentCard">
                {{-- <div class="card h-100 imageCard"> --}}
                <div class="card imageCard">
                    <a href="{{url('/buku/'.$buku->id)}}">
                        <img src="{{ asset('/gambar/buku/'.$buku->gambar) }}" class="autosizeImg" alt="...">
                    </a>
                </div>
                <div class="textContentLink">
                    <p class="card-title text-align-top">
                        <a href="{{url('/buku/'.$buku->id)}}" class="btn btn-lg btn-light btnContentLink">{{ $buku->judul }}</a>
                    </p>
                    {{-- <p class="card-text">{{ $buku->pengarang }}</p> --}}
                </div>
            </div>
            @empty
            <div class="alert alert-success" role="alert">
                Tidak ada data
            </div>
        @endforelse
    </div>
    <div class="col-md-7 col-lg-12 marginContent">
        <div class="row logoMargin">
            <div class="logoArea">
                <div class="logoHome">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="auto" fill="#F0F1D9" class="bi bi-journal-text" viewBox="0 0 16 16">
                        <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                        <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                        <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                    </svg>
                </div>
            </div>
            <div class="col logoText">
                <h2>Modul</h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 mb-2 g-4">
            <div class="card homeCard titleCard">
                <div class="card h-100 imageTittleCard">
                    <img src="" class="card-img-top d-flex justify-content" alt="...">
                </div>
                <div class="textContentLink">
                    <h5 class="card-title text-align-top">
                        <a href="" class="btn btn-lg btn-light btnTittle">Lebih Lengkap</a>
                    </h5>
                    {{-- <p class="card-text">{{ $buku->pengarang }}</p> --}}
                </div>
            </div>
        @forelse ($bukus as $buku)
            <div class="card homeCard contentCard">
                {{-- <div class="card h-100 imageCard"> --}}
                <div class="card imageCard">
                    <a href="{{url('/buku/'.$buku->id)}}">
                        <img src="{{ asset('/gambar/buku/'.$buku->gambar) }}" class="autosizeImg" alt="...">
                    </a>
                </div>
                <div class="textContentLink">
                    <p class="card-title text-align-top">
                        <a href="{{url('/buku/'.$buku->id)}}" class="btn btn-lg btn-light btnContentLink">{{ $buku->judul }}</a>
                    </p>
                    {{-- <p class="card-text">{{ $buku->pengarang }}</p> --}}
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
