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
    <main id="main" class="main">

        <table class="table table-bordered table-striped">
            <tr>
                <td style="width:150px">Nama</td>
                <td>{{ $data->tinggi }}</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>{{ $data->berat }}</td>
            </tr>
            <tr>
                <td>Usia</td>
                <td>{{ $data->umur }}</td>
            </tr>
            <tr>
                <td>Usia</td>
                <td>{{ $data->alergimakanan }}</td>
            </tr>
        </table>




    </main>
@endsection
