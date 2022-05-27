<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class KalkulasiController extends Controller
{
    public function kalkulasi()
    {
    //mengambil data
    $makanan = DB::table('makanan')->();

    //mengirim data ke view
    return view('kalkulasi',['makanan'=>$pegawai]);
    }
}
