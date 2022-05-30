@extends('layout.dash')
@section('title', '- Riwayat Penyakit')

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
    <main id="datadiri" class="main">
        @if (count($errors) > 0)
                    <div class="col-4 belumdiisi">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
        <div class="card card-body mt-5">
            <h1 class="heading display-5 pb-3">Riwayat Penyakit</h1>
            <form id="calorie-form" action="/dashboard" method="POST">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="penyakit" class="col-sm-4 col-form-label" id="penyakit" name="penyakit" >Riwayat Penyakit</label>
                    <div class="col-sm-8 kolom-isian">
                        <select class="form-select" aria-label="Default select example">
                            <option selected></option>
                            <option value="1">diabetes</option>
                            <option value="2">jantung</option>
                            <option value="3">astma</option>
                          </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="alergi makanan" class="col-sm-4 col-form-label" id="alergi" name="alergi" >Alergi Makanan</label>
                    <div class="col-sm-8 kolom-isian">
                        <select class="form-select" aria-label="Default select example">
                            <option selected></option>
                            <option value="1">Kacang</option>
                            <option value="2">Susu</option>
                            <option value="3">Coklat</option>
                          </select>
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" value="Simpan" class="btn btn-primary btn-block">
                </div>
        </div>


    </main>
@endsection
