<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materis = Materi::all();
        return view('materi.index',['materis'=>$materis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materi.create');
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
            'kategori' => 'required|max:20',
            'mata_pelajaran' => 'required',
            'kelas' => 'required',
            'guru' => 'required',
            'tahun_terbit' => 'required',
            'sinopsis' => 'required',
            'gambar' => 'required|file|image|max:1000',
            'file' => 'required|file|'
        ]);
        // dump($request);
        $extGambar = $request->gambar->getClientOriginalExtension();
        $pathGambar = "buku-".time().".".$extGambar;
        $pathStore = $request->gambar->move(public_path('gambar/buku'), $pathGambar);
        // dump($validateData);
        $extFile = $request->file->getClientOriginalExtension();
        $pathFile = "materi-".time().".".$extFile;
        $request->file->move(public_path('modul'), $pathFile);

        $materi = new Materi();
        $materi->judul = $validateData['judul'];
        $materi->kategori = $validateData['kategori'];
        $materi->mata_pelajaran = $validateData['mata_pelajaran'];
        $materi->kelas = $validateData['kelas'];
        $materi->guru = $validateData['guru'];
        $materi->tahun_terbit = $validateData['tahun_terbit'];
        $materi->sinopsis = $validateData['sinopsis'];
        $materi->gambar = $pathGambar;
        $materi->file = $pathFile;
        $materi->save();

        return redirect()->route('materi.create')->with('pesan', "Buku berhasil ditambah");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function show(Materi $materi)
    {
        return view('materi.show', ['materi' => $materi]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function edit(Materi $materi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materi $materi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materi $materi)
    {
        //
    }
}
