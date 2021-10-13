<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $koleksis = Buku::all();
        return view('koleksi.index',['koleksis'=>$koleksis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('koleksi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'judul' => 'required|max:50',
            'tipe' => 'required|max:20',
            'kategori' => 'required|max:20',
            'pengarang' => 'required',
            'kelas' => 'required',
            'mapel' => 'required',
            'tahun_terbit' => 'required',
            'sinopsis' => 'required',
            'gambar' => 'required|file|image|max:3000'
        ]);
        // dump($request);
        $extGambar = $request->gambar->getClientOriginalExtension();
        $pathGambar = "buku-".time().".".$extGambar;
        $pathStore = $request->gambar->move(public_path('gambar/buku'), $pathGambar);
        // dump($validateData);
        $buku = new Buku();
        $buku->judul = $validateData['judul'];
        $buku->tipe = $validateData['tipe'];
        $buku->kategori = $validateData['kategori'];
        $buku->pengarang = $validateData['pengarang'];
        $buku->kelas = $validateData['kelas'];
        $buku->mapel = $validateData['mapel'];
        $buku->tahun_terbit = $validateData['tahun_terbit'];
        $buku->sinopsis = $validateData['sinopsis'];
        $buku->gambar = $pathGambar;
        $buku->save();

        return redirect()->route('koleksi.create')->with('pesan', "Koleksi Berhasil Ditambah");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $koleksi)
    {
        return view('koleksi.show', ['koleksi' => $koleksi]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit(Buku $buku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buku $buku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buku $buku)
    {
        //
    }
}
