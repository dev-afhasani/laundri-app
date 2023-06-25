@extends('auth.main')

@section('title', 'Login')

@section('container')
<div class="container">

  <div class="col-12 col-sm-11 col-md-8 col-lg-4 bg-light mx-auto mt-5 py-5 rounded shadow-lg">
    <div class="logo-wrapper text-center mb-4">
      <img src="/img/laundri-logo.png" alt="" style="width:7em">
    </div>

    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('error') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="login-form mb-3 px-4">
      <form action="" method="post">
        @csrf

        <div class="form-floating mb-3">
          <input autofocus type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan email" value="{{old('email')}}" required>
          <label for="floatingInput">Email</label>
          @error('email')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>

        <div class="form-floating mb-4">
          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required>
          <label for="floatingPassword">Kata Sandi</label>
          @error('password')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>

        <div class="d-grid">
          <button class="btn btn-primary">Login</button>
        </div>
      </form>
      <hr class="mt-4">
    </div>
    <div class="text-center mt-4">
      Belum punya akun? <a href="/register" class="login-register-link text-decoration-none text-color-theme fw-semibold" type="submit">Daftar sekarang!</a>
    </div>

  </div>

  <p class="text-center text-light my-4 fw-semibold">Copyright &copy; 2023 Laundri All rights reserved.</p>
</div>
@endsection