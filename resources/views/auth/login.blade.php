@extends('auth.main')

@section('title', 'Login')

@section('container')
<div class="container">

  <div class="col-12 col-md-6 col-lg-6 bg-info mx-auto my-5 py-5 px-3 rounded">

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


    <h1 class="text-center mb-3">Login</h1>

    <form action="" method="post">
      @csrf

      <div class="form-floating mb-3">
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan email" value="{{old('email')}}" required>
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
        <button class="btn btn-primary ">Login</button>
      </div>
    </form>

    <hr>
    <div class="text-center">
      <a href="/register" class="text-decoration-none" type="submit">Belum punya akun? Daftar!</a>
    </div>

  </div>


</div>




@endsection