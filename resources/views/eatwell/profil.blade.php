@extends('layout.dash')
@section('title', '- Profil')

@section('dashboard')
nav-link collapsed
@endsection

@section('home')
nav-link collapsed
@endsection

@section('kalkulasi')
nav-link collapsed
@endsection

@section('profil')
nav-link
@endsection

@section('pengaturan')
nav-link collapsed
@endsection

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h2>Data Diri</h2>
    </div>
    <form class="kalkulasi" action="/eatwell/cekprofil" method="POST">
@csrf
        <div class="col-lg-6">
            <div class="row">
                <div class="col-3">
                    <h3> Tinggi </h3>
                </div>
                <div class="col-6">
                    <input type="text" class="form-kalkulasi" id="qty_carb" placeholder="Tinggi badan kamu">
                </div>

            </div>
            <div class="row">
                <div class="col-3">
                    <h3> Berat Badan </h3>
                </div>
                <div class="col-6">
                    <input type="text" class="form-kalkulasi" id="qty_pro" placeholder="Berat badan kamu">
                </div>

            </div>
            <div class="row">
                <div class="col-3">
                    <h3> Umur </h3>
                </div>
                <div class="col-6">
                    <input type="text" style="border:1" class="form-kalkulasi" id="qty_fruit"
                        placeholder="Umur kamu">
                </div>
            </div>

        </div>


    <div class="pagetitle">
        <h2>Data Diri</h2>
    </div>


        <div class="col-lg-6">
            <div class="row">
                <div class="col-3">
                    <h3> Alergi makanan </h3>
                </div>
                <div class="col-6">
                    <input type="text" class="form-kalkulasi" id="qty_carb" placeholder="">
                </div>
            </div>

            <div class="col-lg-8">
                <input type="submit" name="signup_submit" value="Simpan">
            <hr>
        </div>

        </div>

    </form>




</main>
@endsection

