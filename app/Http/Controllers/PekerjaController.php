<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PekerjaController extends Controller
{
    public function TambahKerja(Request $request){
        return view('TambahPekerjaan');
    }
}
