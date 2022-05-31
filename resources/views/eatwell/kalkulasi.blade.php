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

@section('riwayatpenyakit')
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

                        <select name="karbohidrat" id="karbohidrat" class="form-control" placeholder="Ayam">
                            @foreach ($food as $m)
                            @if ($m->jenismakanan == "Karbohidrat")
                            <option value="{{$m->namamakanan}}">{{$m->namamakanan}}</option>
                            @endif

                            @endforeach
                          </select>
                    </div>

                </div>
                <div class="row">
                    <div class="col-3">
                        <h3> Protein </h3>
                    </div>
                    <div class="col-6">
                        <select name="protein" id="protein" class="form-control">
                            @foreach ($food as $m)
                            @if ($m->jenismakanan == "Protein")
                            <option value="{{$m->namamakanan}}">{{$m->namamakanan}}</option>
                            @endif

                            @endforeach
                          </select>
                    </div>

                </div>
                <div class="row">
                    <div class="col-3">
                        <h3> Buah & Sayur </h3>
                    </div>
                    <div class="col-6">
                        <select name="BuahSayur" id="BuahSayur" class="form-control">
                            @foreach ($food as $m)
                            @if ($m->jenismakanan == "Buah" or $m->jenismakanan == "Sayur")
                            <option value="{{$m->namamakanan}}">{{$m->namamakanan}}</option>
                            @endif

                            @endforeach
                          </select>
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
