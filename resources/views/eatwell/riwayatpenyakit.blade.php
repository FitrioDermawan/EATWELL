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
    nav-link collapsed
@endsection

@section('riwayatpenyakit')
    nav-link
@endsection

@section('pengaturan')
    nav-link collapsed
@endsection

@section('content')
    <main id="datadiri" class="main">
        <div class="card card-body mt-5">
            <h1 class="heading display-5 pb-3">Riwayat Penyakit</h1>
            <form id="calorie-form" action="/riwayatpenyakit" method="POST">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="penyakit" class="col-sm-4 col-form-label" id="penyakit" name="penyakit" >Riwayat Penyakit</label>
                    <div class="col-sm-8 kolom-isian">
                        <select class="form-select" aria-label="Default select example" name="penyakit" id="penyakit">
                            <option value="selected"></option>
                            @foreach ($riwayat as $r)
                            @if ($r->kategori == "Penyakit Bawaan")
                            <option name="penyakit" id="penyakit" value="{{$r->penyakitbawaan}}">{{$r->penyakitbawaan}}</option>
                            @endif

                            @endforeach
                          </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="alergi makanan" class="col-sm-4 col-form-label" id="alergi" name="alergi" >Alergi Makanan</label>
                    <div class="col-sm-8 kolom-isian">
                        <select class="form-select" aria-label="Default select example" name="alergi" id="alergi">
                            <option value="selected"></option>
                            @foreach ($riwayat as $r)
                            @if ($r->kategori == "Alergi")
                            <option name="alergi" id="alergi" value="{{$r->penyakitbawaan}}">{{$r->penyakitbawaan}}</option>
                            @endif

                            @endforeach
                          </select>
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" value="Simpan" class="btn btn-primary btn-block">
                </div>
        </div>


    </main>
@endsection
