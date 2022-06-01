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

@section('riwayatpenyakit')
    nav-link collapsed
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
            <h1 class="heading display-5 pb-3">Data Diri</h1>
            <form id="calorie-form" action="/dashboard" method="POST">
                {{ csrf_field() }}

                <fieldset class="form-group">
                    <div class="row">
                        <label for="tinggi" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-8  text-center" id="form-radio">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="M" name="jeniskelamin" class="custom-control-input"
                                    checked="checked">
                                <label class="custom-control-label" for="M">Pria</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="F" name="jeniskelamin" class="custom-control-input">
                                <label class="custom-control-label" for="F">Wanita</label>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <div class="form-group row">
                    <label for="tinggi" class="col-sm-4 col-form-label">Tinggi</label>
                    <div class="col-sm-8 kolom-isian">
                        <input type="number" class="form-kalkulasi" id="tinggi" name="tinggi" placeholder="Tinggi kamu"
                            value="{{ old('tinggi') }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="berat" class="col-sm-4 col-form-label">Berat Badan</label>
                    <div class="col-sm-8 kolom-isian">
                        <input type="number" class="form-kalkulasi" id="berat" name="berat" placeholder="Berat badan kamu"
                            value="{{ old('berat') }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="umur" class="col-sm-4 col-form-label">Umur</label>
                    <div class="col-sm-8 kolom-isian">
                        <input type="number" class="form-kalkulasi" id="umur" name="umur" placeholder="Umur kamu (15 - 80)"
                            value="{{ old('umur') }}">
                    </div>
                </div>

                <div class="form-group row" id="results">
                    <label for="totalcalories" class="col-sm-4 col-form-label">Total Calories</label>
                    <div class="col-sm-8 kolom-isian">
                        <input type="number" class="form-kalkulasi" id="totalcalories" name="totalcalories" placeholder="Total Calories"
                            value="{{ old('totalcalories') }}">
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" value="Simpan" class="btn btn-primary btn-block">
                </div>

            </form>

            {{-- <div id="results" class="pt-4">
                <h5>Total Calories</h5>
                <div class="form-group">
                    <div class="input-group">
                        <input type="number" class="form-kalkulasi" id="totalcalories" name="totalcalories"
                            value="{{ old('totalcalories') }}">
                    </div>
                </div>
            </div> --}}


        </div>


    </main>

    <script>
        document.getElementById('calorie-form').addEventListener('submit', function(e){
    document.getElementById('results').style.display = 'none';

    setTimeout(calculateCalories, 10);
  });

  function calculateCalories(e) {

    const jeniskelamin = document.querySelector('input[name="jeniskelamin"]:checked');
    const umur = document.getElementById('umur');
    const berat = document.getElementById('berat');
    const tinggi = document.getElementById('tinggi');
    const totalCalories = document.getElementById('totalcalories');

    if(jeniskelamin.id === 'M') {
      totalCalories.value = Math.round(1.2 * (66.5 + (13.75 * parseFloat(berat.value)) + (5.003 * parseFloat(tinggi.value)) - (6.755 * parseFloat(umur.value))));
    }
     else if(jeniskelamin.id === 'F') {
      totalCalories.value = Math.round(1.2 * (655 + (9.563 * parseFloat(berat.value)) + (1.850 * parseFloat(tinggi.value)) - (4.676 * parseFloat(umur.value))));
    }
     else {
      totalCalories.value = Math.round(1.9 * (655 + (9.563 * parseFloat(berat.value)) + (1.850 * parseFloat(tinggi)) - (4.676 * parseFloat(umur.value))));
    }

    document.getElementById('results');
  }


    </script>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
@endsection
