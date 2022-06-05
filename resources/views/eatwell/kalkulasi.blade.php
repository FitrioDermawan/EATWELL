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

                        <select name="karbohidrat" id="karbohidrat" class="form-control" >
                            @foreach ($food as $m)
                                @if ($m->jenismakanan == 'Karbohidrat')
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

                <div class="col-lg-8">
                    <input type="button" id="hitungKalori" name="signup_submit" value="Hitung Kalori">
                    <hr>
                </div>
                {{-- @foreach ($food as $m) --}}
                <div>
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
      total = parseInt(selectedProtein[0].value) + parseInt(selectedKarbohidrat[0].value) + parseInt(selectedBuahSayur[0].value);
      document.getElementById("demo").innerHTML = total;
      console.log(total)
});
                    </script>

                    <h1 id="demo"></h1>
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
                            @foreach ($food as $m)
                                @if ($m->jenismakanan == 'Karbohidrat')
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
                        <select name="buahsayur" id="buahsayur2" class="form-control">
                            @foreach ($food as $m)
                                @if ($m->jenismakanan == 'Buah' or $m->jenismakanan == 'Sayur')
                                    <option value="{{ $m->kalorimakanan }}">{{ $m->namamakanan }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-lg-8">
                    <input type="button" id="hitungKalori2" name="signup_submit" value="Hitung Kalori">
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
      total = parseInt(selectedProtein[0].value) + parseInt(selectedKarbohidrat[0].value) + parseInt(selectedBuahSayur[0].value);
      document.getElementById("demo2").innerHTML = total;
      console.log(total)
});
                    </script>

                    <h1 id="demo2"></h1>
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

                        <select name="karbohidrat" id="karbohidrat3" class="form-control " >
                            @foreach ($food as $m)
                                @if ($m->jenismakanan == 'Karbohidrat')
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

                <div class="col-lg-8">
                    <input type="button" id="hitungKalori3" name="signup_submit" value="Hitung Kalori">
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
      total = parseInt(selectedProtein[0].value) + parseInt(selectedKarbohidrat[0].value) + parseInt(selectedBuahSayur[0].value);
      document.getElementById("demo3").innerHTML = total;
      console.log(total)
});
                    </script>

                    <h1 id="demo3"></h1>
                </div>
                {{-- @endforeach --}}


            </div>



        </form>

    </main>

@endsection
