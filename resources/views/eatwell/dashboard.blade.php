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

@section('riwayatpenyakit')
    nav-link collapsed
@endsection

@section('pengaturan')
    nav-link collapsed
@endsection

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h2>Halo, {{ Auth::user()->name }}</h2>
    </div>

    <div class="col-lg-8">
        <div class="row">
            <div class="col-xxl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Tinggi</h6>
                        @foreach ( $data as $d )
                        <h3 class="card-content">{{$d->tinggibadan}} cm</h3>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-xxl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Berat Badan</h6>
                        @foreach ( $data as $d )
                        <h3 class="card-content">{{$d->beratbadan}} kg</h3>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-xxl-4 col-md-6 ">
                <div class="card umur">
                    <div class="card-body">
                        <h6 class="card-title">Umur</h6>
                        @foreach ( $data as $d )
                        <h3 class="card-content">{{$d->umur}} Tahun</h3>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group row" id="results">
        <label for="totalcalories" class="col-sm-4 col-form-label">Total Calories</label>
        <div class="col-sm-8 kolom-isian">
            <input type="number" class="form-kalkulasi" id="totalcalories" name="totalcalories" placeholder="Total Calories"
                value="{{$d->totalkalori}}">
        </div>
    </div>

    {{-- <h1 id="demo"></h1>

    <script>
        var a = {{$d->totalkalori}};
        var x = Math.round(1/3 * a);
    document.getElementById("demo").innerHTML = x;
    </script> --}}


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
                            <p>Total Kalori</p>

                            <h2 id="makanpagi"></h2>
                            @foreach ( $data as $d )
                            <script>
                                var a = {{$d->totalkalori}};
                                var x = Math.round(1/3 * a);
                            document.getElementById("makanpagi").innerHTML = x + " kkal";
                            </script>
                            @endforeach
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
                        {{-- <p>Kamu bisa mencapai tujuan kamu dengan jogging sejauh 2.5 km</p> --}}
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-8">
                                <p>Total Kalori</p>

                                <h2 id="makansiang"></h2>
                                @foreach ( $data as $d )
                                <script>
                                    var a = {{$d->totalkalori}};
                                    var x = Math.round(1.2/3 * a);
                                document.getElementById("makansiang").innerHTML = x + " kkal";
                                </script>
                                @endforeach
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
                        {{-- <p>Kamu bisa mencapai tujuan kamu dengan melakukan HIIT Workout selama 20 menit</p> --}}
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-8">
                                <p>Total Kalori</p>

                            <h2 id="makanmalam"></h2>
                            @foreach ( $data as $d )
                            <script>
                                var a = {{$d->totalkalori}};
                                var x = Math.round(0.8/3 * a);
                            document.getElementById("makanmalam").innerHTML = x + " kkal";
                            </script>
                            @endforeach
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
                        {{-- <p>Kamu bisa mencapai tujuan kamu dengan melakukan Gym Workout selama 50 menit</p> --}}
                    </div>
                </div>
            </div>
        </div>
</main>
@endsection
