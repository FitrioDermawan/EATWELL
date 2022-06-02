@extends('layout.reglog')
@section('title', '- Buat Akun')

@section('content')
<form method="GET" action="buatakun/verifikasi">
    <h1>Buat akun</h1>
    <input type="text" name="namapanjang" placeholder="Nama panjang" />
    <input type="text" name="email" placeholder="Alamat e-mail" />
    <input type="password" name="katasandi" placeholder="Kata sandi" />
    <input type="submit" name="signup_submit" value="Buat akun">
    <p>Kamu sudah punya akun? <span>Login</span></p>
</form>
@endsection
