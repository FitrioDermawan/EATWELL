<?php

namespace App\Http\Controllers\UpdateDataDiri;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UpdateDateDiriController extends Controller
{
        //by Fitrio Dermawan
        public function displayProfil() {
            return view('eatwell.profil') ;
        }


        //byMuhammad Irfan
        public function ValidateData(Request $request)
        {
            //preproces data request


            if () //format data valid
            {
                if () //data saved
                {
                    $status = saveAccountData($request) ;
                    //Bebas tiap kelompok menentukan , mau pakai
                    //sesuai Sequence , atau tidak
                    // kalau tidak , jangan lupa sequence
                    Profil::create() ;
                } else //data not saved
                {

                }

                return view('eatwell.dashboard') ; //gantinya display
            } else //format data tidak valid
            {

            }

        }

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
