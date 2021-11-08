<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Buku;
use App\Models\Materi;

class Controller extends BaseController
{
    public function home()
    {
        // $bukus = Buku::all();
        $bukus = Buku::latest()->limit(4)->get();
        // $materis = Materi::all();
        $materis = Materi::latest()->limit(4)->get();

        return view('index',['bukus'=>$bukus, 'materis'=>$materis]);
    }
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
