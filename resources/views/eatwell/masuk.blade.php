@extends('layout.reglog')
@section('title', '')

@section('content')
    <h1>Masuk</h1>
    <input type="text" name="email" placeholder="Alamat E-mail" />
    <input type="password" name="katasandi" placeholder="kata Sandi" />
    <input type="submit" name="signup_submit" value="Buat Akun" />
    <p>Kamu pengguna baru? <span>Buat Akun</span></p>
@endsection
