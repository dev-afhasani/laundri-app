@extends('auth.main')

@section('title', 'Register')

@section('container')
<div class="container">

  <div class="col-6 p5 bg-info mx-auto my-5 py-5 px-5 rounded">
    <h1 class="text-center mb-5">Register</h1>

    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <form action="" method="post">
      @csrf
      <div class="form-floating mb-3">
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Masukkan nama" value="{{old('name')}}" required>
        <label for="floatingInput">Nama</label>
        @error('name')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>


      <div class="form-floating mb-3">
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan email" value="{{old('email')}}" required>
        <label for="floatingInput">Email</label>
        @error('email')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>


      <div class="form-floating mb-3">
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required>
        <label for="floatingPassword">Kata Sandi</label>
        @error('password')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>


      <div class="form-floating mb-5">
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password2" name="password_confirmation" placeholder="Password" required>
        <label for="floatingPassword">Konfirmasi Kata Sandi</label>
        @error('password')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>


      <div class="d-grid">
        <button class="btn btn-primary ">Register</button>
      </div>
    </form>

    <hr>
    <div class="text-center">
      <a href="" class="text-decoration-none" type="submit">Sudah punya akun? Login!</a>
    </div>

  </div>


</div>
@endsection