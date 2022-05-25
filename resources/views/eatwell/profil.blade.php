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
                    <input type="text" name="tinggi" class="form-kalkulasi" id="qty_carb" placeholder="Tinggi badan kamu" @error('tinggi') is-invalid @enderror required autofocus value="{{ old('tinggi')}}">
                    @error('tinggi')
                    <div class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

            </div>
            <div class="row">
                <div class="col-3">
                    <h3> Berat Badan </h3>
                </div>
                <div class="col-6">
                    <input type="text" name="berat" class="form-kalkulasi" id="qty_pro" placeholder="Berat badan kamu" @error('berat') is-invalid @enderror required value="{{ old('berat')}}">
                    @error('berat')
                    <div class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

            </div>
            <div class="row">
                <div class="col-3">
                    <h3> Umur </h3>
                </div>
                <div class="col-6">
                    <input type="text" name="umur" style="border:1" class="form-kalkulasi" id="qty_fruit" placeholder="Umur kamu" @error('umur') is-invalid @enderror required value="{{ old('umur')}}">
                    @error('umur')
                    <div class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                    @enderror
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
                    <input type="text" name="alergimakanan" class="form-kalkulasi" id="qty_carb" placeholder="Alergi yang kamu punya" @error('alergimakanan') is-invalid @enderror required value="{{ old('alergimakanan')}}">
                    @error('alergimakanan')
                    <div class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-3">
                    <h3> Kategori </h3>
                    <select class="form-kalkulasi" name="kategori" id="inputKategori"  @error('kategori') is-invalid @enderror required>
                        @error('kategori')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                        @enderror
                      <option selected>Choose...</option>
                      <option>...</option>
                    </select>
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

