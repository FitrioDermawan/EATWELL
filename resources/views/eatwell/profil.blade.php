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
                        <input type="number" class="form-kalkulasi" id="tinggi" name="tinggi" placeholder="Tinggi kamu" value="{{ old('tinggi') }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="berat" class="col-sm-4 col-form-label">Berat Badan</label>
                    <div class="col-sm-8 kolom-isian">
                        <input type="number" class="form-kalkulasi" id="berat" name="berat"
                            placeholder="Berat badan kamu" value="{{ old('berat') }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="umur" class="col-sm-4 col-form-label">Umur</label>
                    <div class="col-sm-8 kolom-isian">
                        <input type="number" class="form-kalkulasi" id="umur" name="umur" placeholder="Umur kamu (15 - 80)" value="{{ old('umur') }}">
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

            </form>
            <div id="results" class="pt-4">
                <h5>Total Calories</h5>
                <div class="form-group">
                    <div class="input-group">
                        <input type="number" class="form-control" id="total-calories" disabled>
                    </div>
                </div>
            </div>
        </div>


    </main>

    <script src="{{ asset('assets/js/datadiri.js') }}"></script>
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
