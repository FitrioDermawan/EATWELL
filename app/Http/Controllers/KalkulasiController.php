<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
class KalkulasiController extends Controller
{
    public function displayKalkulasi()
    {

        $user = Auth::user();
            $idusers = $user->id;
    //mengambil data
    $food = DB::table('makanan')->get();

    $data = DB::table('datadiri')->select('totalkalori')->where('iduser','=',$idusers)->get();

    //mengambil data penyakit dengan foreign key

    $sakit = DB::table('penyakituser')->select('idriwayatpenyakit')->where('iduser','=',$idusers)->get();
    
    //mengirim data ke view
    return view('eatwell.kalkulasi', compact('food','data','sakit',));
    
    }


    public function isCalculationCorrect(){
        $collection = collect(['idriwayatpenyakit' => 2, 'idriwayatpenyakit' => 1]);
        $collection->contains(1);
        $collection->contains(2);

    }



}