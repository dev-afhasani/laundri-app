@extends('auth.main')

@section('title', 'Register')

@section('container')
<div class="container">

  <div class="col-6 p5 bg-info mx-auto my-5 py-5 px-5 rounded">
    <h1 class="text-center mb-5">Register</h1>

    <form action="" method="post">
      @csrf
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Masukkan nama">
        <label for="floatingInput">Nama</label>
      </div>
      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="Masukkan email">
        <label for="floatingInput">Email</label>
      </div>
      <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Kata Sandi</label>
      </div>
      <div class="form-floating mb-5">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Konfirmasi Kata Sandi</label>
      </div>
      <div class="d-grid">
        <button class="btn btn-primary ">Register</button>
      </div>
    </form>

    <hr>
    <div class="text-center">
      <a href="" class="text-decoration-none">Sudah punya akun? Login!</a>
    </div>

  </div>


</div>
@endsection