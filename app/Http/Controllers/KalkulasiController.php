<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class KalkulasiController extends Controller
{
    public function displayKalkulasi()
    {
    //mengambil data
    $food = DB::table('makanan')->get();

    //mengirim data ke view
    return view('eatwell.kalkulasi', compact('food'));
    }

    public function calculateData(){

    }

    public function isCalculationCorrect(){

    }

    public function displayCalculation(){

    }


}
