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
                        <select name="protein" id="protein" class="form-control" placeholder="Ayam">
                            @foreach ($food as $m)
                            <option value="{{$m->$makanan}}">{{$m->$makanan}}</option>
                            <option value="{{$m->$makanan}}">{{$m->$makanan}}</option>
                            @endforeach
                          </select>
                    </div>

                </div>
                <div class="row">
                    <div class="col-3">
                        <h3> Protein </h3>
                    </div>
                    <div class="col-6">
                        <select name="kalori" id="kalori" style="border:none">
                            <option value="MinKalori">Min-Kalori</option>
                            <option value="MaxKalori">Max-Kalori</option>
                          </select>
                    </div>

                </div>
                <div class="row">
                    <div class="col-3">
                        <h3> Buah & Sayur </h3>
                    </div>
                    <div class="col-6">
                        <select name="kalori" id="kalori" style="border:none">
                            <option value="MinKalori">Min-Kalori</option>
                            <option value="MaxKalori">Max-Kalori</option>
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
