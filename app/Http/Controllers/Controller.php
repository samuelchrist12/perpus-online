<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Buku;


class Controller extends BaseController
{
    public function home()
    {
        $bukus = Buku::all();
        return view('index',['bukus'=>$bukus]);
    }
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
