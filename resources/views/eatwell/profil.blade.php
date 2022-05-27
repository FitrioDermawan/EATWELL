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

        @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

        <div class="pagetitle">
            <h2>Data Diri</h2>
        </div>
        <form class="kalkulasi" action="/eatwell/cekprofil" method="POST">
            {{ csrf_field() }}
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-3">
                        <h3> Tinggi </h3>
                    </div>
                    <div class="col-6">
                        <input type="text" name="tinggi" class="form-kalkulasi" id="qty_carb" placeholder="Tinggi badan kamu"
                            value="{{ old('tinggi') }}">
                    </div>

                </div>
                <div class="row">
                    <div class="col-3">
                        <h3> Berat Badan </h3>
                    </div>
                    <div class="col-6">
                        <input type="text" name="berat" class="form-kalkulasi" id="qty_pro" placeholder="Berat badan kamu"
                            value="{{ old('berat') }}">

                    </div>

                </div>
                <div class="row">
                    <div class="col-3">
                        <h3> Umur </h3>
                    </div>
                    <div class="col-6">
                        <input type="text" name="umur" style="border:1" class="form-kalkulasi" id="qty_fruit"
                            placeholder="Umur kamu"
                            value="{{ old('umur') }}">

                    </div>
                </div>

            </div>


            <div class="pagetitle">
                <h2>Riwayat Penyakit</h2>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-3">
                        <h3> Alergi makanan </h3>
                    </div>
                    <div class="col-6">
                        <input type="text" name="alergimakanan" class="form-kalkulasi" id="qty_carb"
                            placeholder="Alergi yang kamu punya"
                            value="{{ old('alergimakanan') }}">
                    </div>
                </div>
                <div class="form-group">
                    <button id="add-more" name="add-more" class="btn btn-primary">Add More</button>
                </div>
                <div class="col-lg-8">
                    <input type="submit" name="signup_submit" value="Simpan">
                    <hr>
                </div>

            </div>

        </form>




    </main>
@endsection
