<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpdateRiwayatPenyakitController extends Controller
{
    //
    public function displayRiwayatPenyakit() {

        //mengambil data
    $riwayat = DB::table('riwayatpenyakit')->get();

    //mengirim data ke view
    return view('eatwell.riwayatpenyakit', compact('riwayat'));

    }

    public function saveRiwayatPenyakit() {

    }

    public function updateRekomendasiMakanan() {

    }
}
