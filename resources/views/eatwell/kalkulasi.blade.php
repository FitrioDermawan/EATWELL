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

            <h2>Makan Pagi</h2>

            <div class="col-lg-6">
                <div class="row">
                    <div class="col-3">
                        <h3> Karbohidrat </h3>
                    </div>
                    <div class="col-6">

                        <select name="karbohidrat" id="karbohidrat" class="form-control">
                            @foreach ($food as $m)
                                @if ($m->jenismakanan == 'Karbohidrat')
                                    <option value="{{ $m->kalorimakanan}}">{{ $m->namamakanan }}</option>
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
                                @if ($m->jenismakanan == 'Protein')
                                    <option value="{{ $m->kalorimakanan }}">{{ $m->namamakanan }}</option>
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
                        <select name="buahsayur" id="buahsayur" class="form-control">

                            @foreach ($food as $m)
                                @if ($m->jenismakanan == 'Buah' or $m->jenismakanan == 'Sayur')
                                    <option value="{{ $m->kalorimakanan }}">{{ $m->namamakanan }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>
                <div class="col-lg-9">
                    <input type="button" style="padding:16px; border-radius: 16px;" id="hitungKalori" name="signup_submit"
                        value="Hitung Kalori" class="btn btn-primary btn-block">
                    <hr>
                </div>
                {{-- @foreach ($food as $m) --}}
                <div>
                    @foreach( $data as $d)
                    <script>
                        const hitungKalori = document.getElementById('hitungKalori');

                        hitungKalori.addEventListener('click', function() {
                            var total = 0;
                            var protein = document.getElementById('protein');
                            var selectedProtein = protein.selectedOptions;
                            var karbohidrat = document.getElementById('karbohidrat');
                            var selectedKarbohidrat = karbohidrat.selectedOptions;
                            var buahsayur = document.getElementById('buahsayur');
                            var selectedBuahSayur = buahsayur.selectedOptions;
                            var a = {{$d->totalkalori}};
                            var x = Math.round(1/3 * a);
                            total = parseInt(selectedProtein[0].value) + parseInt(selectedKarbohidrat[0].value) + parseInt(
                                selectedBuahSayur[0].value);
                            if(x < total)
                            document.getElementById("rekomendasi").innerHTML = "MAKAN";
                            else
                            document.getElementById("rekomendasi").innerHTML ="OLAHRAGA";
                            document.getElementById("demo").innerHTML = total + "kkal";
                        });
                    </script>
                    @endforeach
                    <h5><b>Estimasi Kalori</b></h5>
                    <h6 id="demo"></h6>
                    <h5 id="rekomendasi"></h5>

                </div>
                {{-- @endforeach --}}


            </div>

        </form>

        <br>

        <form class="kalkulasi">

            <h2>Makan Siang</h2>

            <div class="col-lg-6">
                <div class="row">
                    <div class="col-3">
                        <h3> Karbohidrat </h3>
                    </div>
                    <div class="col-6">

                        <select name="karbohidrat" id="karbohidrat2" class="form-control">
                            @foreach($food as $m)
                                @if ($m->jenismakanan == 'Karbohidrat' )
                                    <option value="{{ $m->kalorimakanan }}">{{ $m->namamakanan }}</option>
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
                        <select name="protein" id="protein2" class="form-control">
                            @foreach ($food as $m)
                                @if ($m->jenismakanan == 'Protein' && $m->idriwayatpenyakit != 1)
                                    <option value="{{ $m->kalorimakanan }}">{{ $m->namamakanan }}</option>
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
                        <select name="buahsayur" id="buahsayur2" class="form-control">
                            @foreach ($food as $m)
                                @if ($m->jenismakanan == 'Buah' or $m->jenismakanan == 'Sayur')
                                    <option value="{{ $m->kalorimakanan }}">{{ $m->namamakanan }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>
                <div class="col-lg-9">
                    <input type="button" style="padding:16px; border-radius: 16px;" id="hitungKalori2" name="signup_submit"
                        value="Hitung Kalori" class="btn btn-primary btn-block">
                    <hr>
                </div>
                {{-- @foreach ($food as $m) --}}
                <div>
                    <script>
                        const hitungKalori2 = document.getElementById('hitungKalori2');

                        hitungKalori2.addEventListener('click', function() {
                            var total = 0;
                            var protein = document.getElementById('protein2');
                            var selectedProtein = protein.selectedOptions;
                            var karbohidrat = document.getElementById('karbohidrat2');
                            var selectedKarbohidrat = karbohidrat.selectedOptions;
                            var buahsayur = document.getElementById('buahsayur2');
                            var selectedBuahSayur = buahsayur.selectedOptions;
                            var a = {{$d->totalkalori}};
                            var x = Math.round(1.2/3 * a);
                            total = parseInt(selectedProtein[0].value) + parseInt(selectedKarbohidrat[0].value) + parseInt(
                                selectedBuahSayur[0].value);
                            if(x < total)
                            document.getElementById("rekomendasi2").innerHTML = "MAKAN";
                            else
                            document.getElementById("rekomendasi2").innerHTML ="OLAHRAGA";
                            document.getElementById("demo2").innerHTML = total + "kkal";
                        });
                    </script>
                    <h5><b>Estimasi Kalori</b></h5>
                    <h6 id="demo2"></h6>
                    <h5 id="rekomendasi2"></h5>
                </div>
                {{-- @endforeach --}}


            </div>


        </form>

        <br>

        <form class="kalkulasi">

            <h2>Makan Malam</h2>

            <div class="col-lg-6">
                <div class="row">
                    <div class="col-3">
                        <h3> Karbohidrat </h3>
                    </div>
                    <div class="col-6">

                        <select name="karbohidrat" id="karbohidrat3" class="form-control ">
                            @foreach ($food as $m)
                                @if ($m->jenismakanan == 'Karbohidrat')
                                    <option value="{{ $m->kalorimakanan }}">{{ $m->namamakanan }}</option>'
                                @elseif ($m->jenismakanan == 'Karbohidrat' )
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
                        <select name="protein" id="protein3" class="form-control">
                            @foreach ($food as $m)
                                @if ($m->jenismakanan == 'Protein')
                                    <option value="{{ $m->kalorimakanan }}">{{ $m->namamakanan }}</option>
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
                        <select name="buahsayur" id="buahsayur3" class="form-control">
                            @foreach ($food as $m)
                                @if ($m->jenismakanan == 'Buah' or $m->jenismakanan == 'Sayur')
                                    <option value="{{ $m->kalorimakanan }}">{{ $m->namamakanan }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>
                <div class="col-lg-9">
                    <input type="button" style="padding:16px; border-radius: 16px;" id="hitungKalori3" name="signup_submit"
                        value="Hitung Kalori" class="btn btn-primary btn-block">
                    <hr>
                </div>
                {{-- @foreach ($food as $m) --}}
                <div>
                    <script>
                        const hitungKalori3 = document.getElementById('hitungKalori3');

                        hitungKalori3.addEventListener('click', function() {
                            var total = 0;
                            var protein = document.getElementById('protein3');
                            var selectedProtein = protein.selectedOptions;
                            var karbohidrat = document.getElementById('karbohidrat3');
                            var selectedKarbohidrat = karbohidrat.selectedOptions;
                            var buahsayur = document.getElementById('buahsayur3');
                            var selectedBuahSayur = buahsayur.selectedOptions;
                            var a = {{$d->totalkalori}};
                            var x = Math.round(0.8/3 * a);
                            total = parseInt(selectedProtein[0].value) + parseInt(selectedKarbohidrat[0].value) + parseInt(
                                selectedBuahSayur[0].value);
                            if(x < total)
                            document.getElementById("rekomendasi3").innerHTML = "MAKAN";
                            else
                            document.getElementById("rekomendasi3").innerHTML ="OLAHRAGA";
                            document.getElementById("demo3").innerHTML = total + "kkal";
                        });
                    </script>
                    <h5><b>Estimasi Kalori</b></h5>
                    <h6 id="demo3">
                    <h5 id="rekomendasi3"></h5>
                        </h1>
                </div>
                {{-- @endforeach --}}


            </div>



        </form>

    </main>

@endsection
