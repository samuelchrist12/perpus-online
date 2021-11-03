@extends('layout.app')

@section('title', 'Pinjam Buku')

@section('content')
    <div class="container">
        @if (session()->has('pesan'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('pesan') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <h1>Form Penambahan Buku</h1>
        <form action="{{ route('koleksi.store') }}" method="POST" enctype="multipart/form-data" class="form">
            <div class="form-group mb-3">
                <label for="judul">Judul Materi</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="judul" value="{{old('judul')}}">
                @error('judul')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="kategori">Kategori</label>
                <select class="form-select" name="kategori" id="kategori">
                    <option selected>-- Pilih kategori --</option>
                    <option value="fiksi"
                        {{ old('kategori') == 'fiksi' ? 'selected' : ''}}>
                        Fiksi
                    </option>
                    <option value="nonfiksi"
                        {{ old('kategori') == 'nonfiksi' ? 'selected' : ''}}>
                        Nonfiksi
                    </option>
                </select>
                @error('kategori')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="pengarang">Pengarang</label>
                <input type="text" class="form-control @error('pengarang') is-invalid @enderror" name="pengarang" id="pengarang" value="{{old('pengarang')}}" >
                @error('pengarang')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="tahun_terbit">Tahun Terbit</label>
                <input type="number" class="form-control @error('tahun_terbit') is-invalid @enderror" name="tahun_terbit" id="tahun_terbit" value="{{old('tahun_terbit')}}">
                @error('tahun_terbit')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="sinopsis">Sinopsis</label>
                <textarea name="sinopsis" id="sinopsis" cols="30" rows="3" class="form-control"> {{old('sinopsis')}}</textarea>
                @error('sinopsis')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="gambar">Gambar Buku</label>
                <input type="file" class="form-control  @error('gambar') is-invalid @enderror" name="gambar" id="gambar" value="{{old('gambar')}}">
                @error('gambar')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mb-5" value="submit">Tambah</button>
            @csrf
        </form>
    </div>
@endsection
