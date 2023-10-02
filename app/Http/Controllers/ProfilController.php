<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\VisiMisi;
use App\Http\Models\Sejarah;

class ProfilController extends Controller
{
    public function showVisiMisi(){

        $getvisimisi = VisiMisi::all();
        // dd($getvisimisi);
        return view('tentang/visimisi', ['getvisimisi' => $getvisimisi]);
    }

    public function showSejarah(){

        $getsejarah = Sejarah::all();
        // dd($getsejarah);
        return view('tentang/sejarah', ['getsejarah' => $getsejarah]);
    }
}
