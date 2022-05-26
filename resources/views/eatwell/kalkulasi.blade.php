@extends('layout.dash')
@section('title', '- Kalkulasi')

@section('dashboard')
    nav-link collapsed
@endsection

@section('home')
    nav-link collapsed
@endsection

@section('kalkulasi')
    nav-link
@endsection

@section('profil')
    nav-link collapsed
@endsection

@section('pengaturan')
    nav-link collapsed
@endsection


@section('content')

//made by Raynaldi Siahaan

    <main id="main" class="main">

        <div class="pagetitle">
            <h2>Sudah Makan Apa Hari Ini?</h2>
        </div>
        <form class="kalkulasi">

            <div class="col-lg-6">
                <div class="row">
                    <div class="col-3">
                        <h3> Karbohidrat </h3>
                    </div>
                    <div class="col-6">
                        <input type="text" class="form-kalkulasi" id="qty_carb" placeholder="Nasi, roti, mie">
                    </div>

                </div>
                <div class="row">
                    <div class="col-3">
                        <h3> Protein </h3>
                    </div>
                    <div class="col-6">
                        <input type="text" class="form-kalkulasi" id="qty_pro" placeholder="Paha ayam, iga sapi">
                    </div>

                </div>
                <div class="row">
                    <div class="col-3">
                        <h3> Buah & Sayur </h3>
                    </div>
                    <div class="col-6">
                        <input type="text" style="border:1" class="form-kalkulasi" id="qty_fruit"
                            placeholder="Apel, salad buah">
                    </div>
                </div>

                <div class="col-lg-8">
                        <input type="submit" name="signup_submit" value="Hitung Kalori">
                    <hr>
                </div>

            </div>

        </form>

    </main>

@endsection
