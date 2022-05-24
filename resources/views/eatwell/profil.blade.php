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

    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Diri</h5>

          <!-- No Labels Form -->
          <form class="row g-3">
            <div class="row mb-3">
                <label for="inputTinggi3" class="col-sm-2 col-form-label">Tinggi</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputText">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputBeratBadan3" class="col-sm-2 col-form-label">Berat Badan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputText">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputUmur3" class="col-sm-2 col-form-label">Umur</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputText">
                </div>
            </div>

            <h5 class="card-title">Riwayat Penyakit</h5>

            <div class="row mb-3">
                <label for="inputAlergiMakanan/PenyakitTurunan3" class="col-sm-2 col-form-label">Alergi Makanan / Penyakit Turunan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputText">
                </div>
            </div>
            <div class="col-md-4">
                <label for="inputKategori" class="form-label">Kategori</label>
                <select id="inputKategori" class="form-select">
                  <option selected>Choose...</option>
                  <option>...</option>
                </select>
              </div>
            <div class="form-group">
                <button id="add-more" name="add-more" class="btn btn-primary">Add More</button>
             </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </form><!-- End No Labels Form -->
        </div>
    </div>
@endsection

