<?php

namespace App\Http\Controllers\UpdateDataDiri;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Dotenv\Regex\Success;
use PhpParser\Node\Expr\PostDec;
use Symfony\Component\HttpKernel\Profiler\Profile;

class UpdateDateDiriController extends Controller
{
        //by Fitrio Dermawan
        public function displayProfil() {
            return view('eatwell.profil') ;
        }


        //byMuhammad Irfan
        public function ValidateData(Request $request)
        {
            if($request->validate([
                'tinggi' => 'required|integer',
                'beratbadan' => 'required|integer',
                'umur' => 'required|integer',
                'alergimakanan' => 'required',
                'kategori' => 'required'
            ]))



            // //preproces data request
            // $validasiData = $request->validate([
            //     'tinggi' => 'required|integer',
            //     'beratbadan' => 'required|integer',
            //     'umur' => 'required|integer|',
            //     'alergimakanan' => 'required',
            //     'kategori' => 'required'
            // ]);
            // Post::create();
            return redirect('eatwell.dashboard')->with('Success', 'Data kamu sudah tersimpan!');
        }



            // if () //format data valid
            // {
            //     if () //data saved
            //     {
            //         $status = saveAccountData($request) ;
            //         //Bebas tiap kelompok menentukan , mau pakai
            //         //sesuai Sequence , atau tidak
            //         // kalau tidak , jangan lupa sequence
            //         Profil::create() ;
            //     } else //data not saved
            //     {

            //     }

            //     return view('eatwell.dashboard') ; //gantinya display
            // } else //format data tidak valid
            // {

            // }



        private function saveAccountData(Request $request)
        {
            Profil::create() ;
            return true ;
        }

        private function calculateCaloriNeeded(Integer $data)
        {

        }
        // by I Dewa Gede Cresna Saputra
}
