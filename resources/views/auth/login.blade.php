@extends('auth.main')

@section('title', 'Login')

@section('container')
<div class="container">

  <div class="col-12 col-sm-11 col-md-8 col-lg-6 bg-light mx-auto mt-4 mb-4 px-3 py-5 px-5 rounded shadow-lg">
    <h1 class="text-center mb-5">Login</h1>

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


    <div class="login-form mb-4">
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
    </div>
    <hr>
    <div class="text-center mt-4">
      <a href="/register" class="text-decoration-none text-color-theme" type="submit">Belum punya akun? Daftar!</a>
    </div>

  </div>

  <p class="text-center mb-4 fw-semibold">Copyright &copy; 2023 Laundri All rights reserved.</p>
</div>
@endsection