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

@section('datadiri')
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
                    <label for="penyakit bawaan" class="col-sm-4 col-form-label" id="penyakit" name="penyakit" >Penyakit Bawaan</label>
                    <div class="col-sm-8 kolom-isian">
                        <select class="form-select" aria-label="Default select example" name="alergi" id="penyakit">
                            @foreach ($riwayat as $r)
                            @if ($r->kategori == "Penyakit Bawaan")
                            <option name="alergi" id="alergi" value="{{$r->idriwayatpenyakit}}">{{$r->penyakit}}</option>
                            @endif

                            @endforeach
                          </select>
                    </div>
                </div>

                {{-- <div class="form-group row">
                    <label for="alergi makanan" class="col-sm-4 col-form-label" id="alergi" name="alergi" >Alergi Makanan</label>
                    <div class="col-sm-8 kolom-isian">
                        <select class="form-select" aria-label="Default select example" name="alergi" id="alergi">
                            @foreach ($riwayat as $r)
                            @if ($r->kategori == "Alergi")
                            <option name="alergi" id="alergi" value="{{$r->idriwayatpenyakit}}">{{$r->penyakit}}</option>
                            @endif

                            @endforeach
                          </select>
                    </div>
                </div> --}}

                <div class="form-group">
                    <input type="submit" value="Simpan" class="btn btn-primary btn-block">
                </div>
            </form>
        </div>

        <div class="card card-body mt-5">
            <h1 class="heading display-5 pb-3">Riwayat Penyakit</h1>
            <form id="calorie-form" action="/riwayatpenyakit" method="POST">
                {{ csrf_field() }}
                {{-- <div class="form-group row">
                    <label for="penyakit" class="col-sm-4 col-form-label" id="penyakit" name="bawaan" >Penyakit Bawaan</label>
                    <div class="col-sm-8 kolom-isian">
                        <select class="form-select" aria-label="Default select example" name="bawaan" id="penyakit">
                            @foreach ($riwayat as $r)
                            @if ($r->kategori == "Penyakit Bawaan")
                            <option name="penyakit" id="penyakit" value="{{$r->idriwayatpenyakit}}">{{$r->penyakit}}</option>
                            @endif

                            @endforeach
                          </select>
                    </div>
                </div> --}}

                <div class="form-group row">
                    <label for="alergi makanan" class="col-sm-4 col-form-label" id="alergi" name="alergi" >Alergi Makanan</label>
                    <div class="col-sm-8 kolom-isian">
                        <select class="form-select" aria-label="Default select example" name="alergi" id="alergi">
                            @foreach ($riwayat as $r)
                            @if ($r->kategori == "Alergi")
                            <option name="alergi" id="alergi" value="{{$r->idriwayatpenyakit}}">{{$r->penyakit}}</option>
                            @endif

                            @endforeach
                          </select>
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" value="Simpan" class="btn btn-primary btn-block">
                </div>
            </form>
        </div>


    </main>
@endsection
