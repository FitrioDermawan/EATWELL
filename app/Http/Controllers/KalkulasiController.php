<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class KalkulasiController extends Controller
{
    public function index()
    {
    //mengambil data
    $food = DB::table('makanan')->get();

    //mengirim data ke view
    return view('eatwell.kalkulasi', compact('food'));
    }
}
