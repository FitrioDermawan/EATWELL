<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Dotenv\Regex\Success;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\PostDec;
use Symfony\Component\HttpKernel\Profiler\Profile;
class UpdateRiwayatPenyakitController extends Controller
{
    //
    public function displayRiwayatPenyakit() {

        //mengambil data
    $riwayat = DB::table('riwayatpenyakit')->get();

    //mengirim data ke view
    return view('eatwell.riwayatpenyakit', compact('riwayat'));

    }

    public function saveRiwayatPenyakit(Request $request) {

        $user = Auth::user();
            $idusers = $user->id;

        DB::table('penyakituser')->insert([
            'penyakitbawaan' => $request->alergi,
            'iduser' => $idusers

        ]);

        DB::table('penyakituser')->insert([
            'penyakitbawaan' => $request->penyakit,
            'iduser' => $idusers

        ]);

        return redirect('/riwayatpenyakit');

    }

    public function updateRekomendasiMakanan() {

    }
}
