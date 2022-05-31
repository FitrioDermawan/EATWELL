<?php

namespace App\Http\Controllers\UpdateDataDiri;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Dotenv\Regex\Success;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\PostDec;
use Symfony\Component\HttpKernel\Profiler\Profile;

class UpdateDataDiriController extends Controller
{
        //by Fitrio Dermawan
        public function displayProfil() {
            return view('eatwell.profil') ;
        }


        //by Muhammad Irfan
        public function ValidateData(Request $request)
        {

            $messages = [
                'required' => 'Kolom :attribute harus diisi.'
            ];

            $this->validate($request,[
                'jeniskelamin' => 'required',
                'tinggi' => 'required|numeric',
                'berat' => 'required|numeric',
                'umur' => 'required|numeric',
                'alergi' => 'alpha'
            ],$messages);

            // $jk == $request->input('jeniskelamin');

            // if ($request->jeniskelamin == 'on') {
            //     $jk == 'M';
            // } else if ($request->jeniskelamin == 'on') {
            //     $jk == 'F';
            // }

            $user = Auth::user();
            $idusers = $user->id;

            // var_dump($request);
            DB::table('datadiri')->insert([
                'jeniskelamin' => $request->jeniskelamin,
                'tinggibadan' => $request->tinggi,
                'beratbadan' => $request->berat,
                'umur' => $request->umur,
                'iduser' => $idusers

            ]);

            //mengambil data
            $data = DB::table('datadiri')->get();

            //mengirim data ke view
            return view('eatwell.dashboard', compact('data'));


            // //preproces data request
            // $validasiData = $request->validate([
            //     'tinggi' => 'required|integer',
            //     'beratbadan' => 'required|integer',
            //     'umur' => 'required|integer|',
            //     'alergimakanan' => 'required',
            //     'kategori' => 'required'
            // ]);
            // Post::create();
            return view('eatwell.dashboard',['data' => $request],);
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



        // public function saveAccountData(Request $request)
        // {
        //     // var_dump($request);
        //     // DB::table('datadiri')->insert([
        //     //     'jeniskelamin' => $request->jeniskelamin,
        //     //     'tinggibadan' => $request->tinggi,
        //     //     'beratbadan' => $request->berat,
        //     //     'umur' => $request->umur,

        //     // ]);
        //     return redirect('/dashboard');
        // }

        public function calculateCaloriNeeded(Request $request)
        {
        //     $jeniskelamin = $request->input('jeniskelamin');
        //     $tinggi = $request->input('tinggi');
        //     $berat = $request->input('berat');
        //     $umur = $request->input('umur');
        //     $result = 0;
        //     if ($jeniskelamin == 'M') {
        //         $result = round(1.2 * (66.5 + (13.75 * $berat) + (5.003 * $tinggi) - (6.755 * $umur)));
        //     }
        //     else if ($jeniskelamin == 'F') {
        //         $result = round(1.2 * (655 + (9.563 * $berat) + (1.850 * $tinggi) - (4.676 * $umur)));
        //     }
        //     else {
        //         $result = round(1.9 * (655 + (9.563 * $berat) + (1.850 * $tinggi) - (4.676 * $umur)));
        //     }
        //    //echo $result;
        //    return redirect('/')->with('message','Your answer is:'.$result);
        }
        // by I Dewa Gede Cresna Saputra
        public function displayDashboard(Request $request) {
            // //mengambil data
            // $data = DB::table('datadiri')->get();

            // //mengirim data ke view
            // return view('eatwell.dashboard', compact('data'));
        }
}

