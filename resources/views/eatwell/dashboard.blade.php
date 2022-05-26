@extends('layout.dash')
@section('title', '- Dashboard')

@section('dashboard')
    nav-link
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

@section('pengaturan')
    nav-link collapsed
@endsection

@section('content')
//Made by Raynaldi Siahaan

<main id="main" class="main">

    <div class="pagetitle">
        <h2>Halo, Muhammad Irfan</h2>
    </div>


    <div class="col-lg-8">
        <div class="row">
            <div class="col-xxl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Tinggi</h6>
                        <h3 class="card-content">165 cm</h3>
                    </div>
                </div>
            </div>

            <div class="col-xxl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Berat Badan</h6>
                        <h3 class="card-content">60 kg</h3>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4 col-md-6 ">
                <div class="card umur">
                    <div class="card-body">
                        <h6 class="card-title">Umur</h6>
                        <h3 class="card-content">19 Tahun</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="pagetitle">
        <h2>Rekomendasi makanan hari ini!</h2>
    </div>
    <div class="col-lg-11 waktu">

        <div class="row">

        <div class="col-xxl-3 col-md-4">
            Sarapan
        </div>
        <div class="col-xxl-3 col-md-4">
            Makan Siang
        </div>
        <div class="col-xxl-3 col-md-4">
            Makan Malam
        </div>

        </div>
    </div>
    <div class="col-lg-11 rekomendasi">
        <div class="row">
            <div class="col-xxl-3 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-8">
                                <select name="kalori" id="kalori">
                                    <option value="MinKalori">Min-Kalori</option>
                                    <option value="MaxKalori">Max-Kalori</option>
                                  </select>
                            <h2>300 kkal</h2>
                            </div>
                            <div class="col-xl-4">
                                <img src="{{ asset('assets/eatimg/pagi.png') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col makanan">
                            <span> Roti, Sosis, Sereal</span>
                            </div>
                        </div>
                        <hr>
                        <p>Kamu bisa mencapai tujuan kamu dengan jogging sejauh 2.5 km</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-8">
                                <select name="kalori" id="kalori">
                                    <option value="MinKalori">Min-Kalori</option>
                                    <option value="MaxKalori">Max-Kalori</option>
                                  </select>
                            <h2>400 kkal</h2>
                            </div>
                            <div class="col-xl-4">
                                <img src="{{ asset('assets/eatimg/siang.png') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col makanan">
                            <span> Salad, Sup Krim</span>
                            </div>
                        </div>
                        <hr>
                        <p>Kamu bisa mencapai tujuan kamu dengan melakukan HIIT Workout selama 20 menit</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-8">
                                <select name="kalori" id="kalori">
                                    <option value="MinKalori">Min-Kalori</option>
                                    <option value="MaxKalori">Max-Kalori</option>
                                  </select>
                            <h2>300 kkal</h2>
                            </div>
                            <div class="col-xl-4">
                                <img src="{{ asset('assets/eatimg/malam.png') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col makanan">
                            <span> Sate, Rendang</span>
                            </div>
                        </div>
                        <hr>
                        <p>Kamu bisa mencapai tujuan kamu dengan melakukan Gym Workout selama 50 menit</p>
                    </div>
                </div>
            </div>
        </div>
</main>

@endsection
