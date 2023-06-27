@extends('admin.template.main')
@section('title', 'Rincian Pengeluaran')

@section('main-content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card mt-3">
          <div class="card-body">

            <h4 class="mb-4">Tambah Pengeluaran</h4>
            <form action="" method="post">
              @csrf
              <div class="form-group row">
                <label for="" class="col-3 col-sm-2 col-md-2 col-lg-1 col-form-label">Nama</label>
                <div class="col-9 col-sm-5 col-md-4">
                  <input type="text" class="form-control" id="" name="" required>
                </div>
              </div>
              <div class="form-group row mb-4">
                <label for="" class="col-3 col-sm-2 col-md-2 col-lg-1 col-form-label">Harga</label>
                <div class="col-9 col-sm-5 col-md-4">
                  <div class="input-group">
                    <input type="number" id="" name="" class="form-control">
                  </div>
                </div>
              </div>
              <button type="submit" id="" class="btn btn-primary">Tambah Pengeluaran</button>
            </form>


            <h4 class="mt-5 mb-3">Daftar pengeluaran</h4>
            <table id="" class="table table-responsive-sm" style="width: 100%">
              <thead class="thead-light">
                <tr>
                  <th>No</th>
                  <th>Alat/bahan</th>
                  <th>Harga</th>
                  <th>Tanggal</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($pengeluaran as $p)
                <tr>
                  <th> {{ $loop->iteration }} </th>
                  <th>
                    {{ $p->nama }}
                  </th>
                  <th> {{ $p->harga }} </th>
                  <th> {{ $p->created_at->format('d F Y')}} </th>
                </tr>
                @endforeach
              </tbody>
            </table>
            <h5 class="mt-3">
              Total pengeluaran: Rp {{ $total_pengeluaran }}
            </h5>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection