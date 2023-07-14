@extends('admin.template.main')
@section('title', 'Data Keuangan')

@section('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="base_url" content="{{ url('admin') }}">
<link href="{{ asset('vendor/datatables-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/datatables-responsive/css/responsive.bootstrap4.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection

@section('main-content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Data Keuangan</h1>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="float-left">
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#dataKeuanganModal"><i class="fas fa-plus"></i> Tambah Data </a>
            </div>
            <table id="tbl-finance" class="table dt-responsive nowrap" style="width: 100%">
              <thead class="thead-light">

                <tr class="text-center">
                  <th style="width: 5%;" rowspan="2" class="align-middle">No</th>
                  <th rowspan="2" class="align-middle">Tanggal</th>
                  <th rowspan="2" class="align-middle">Kategori</th>
                  <th rowspan="2" class="align-middle">Keterangan</th>
                  <th colspan="2" class="align-middle">Jenis</th>
                  <th rowspan="2" class="text-center align-middle">Aksi</th>
                </tr>
                <tr class="text-center">
                  <th>Pemasukan</th>
                  <th>Pengeluaran</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($finance as $f)
                <tr>
                  <td> {{ $loop->iteration }} </td>
                  <td> {{ $f->tanggal }} </td>
                  <td> {{ $f->financial_category->name }} </td>
                  <td> {{ $f->keterangan }} </td>
                  <td> {{ $f->pemasukan }} </td>
                  <td> {{ $f->getFormattedPengeluaran() }} </td>
                  <td>
                    <a href="" class=" badge badge-warning">Ubah</a>
                    <a href="" class="badge badge-danger">Hapus</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection


@section('modals')
<x-admin.modals.add-data-keuangan-modal />
@endsection

@section('scripts')
<script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendor/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('vendor/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#tbl-finance').DataTable({
      'bInfo': false,
      'bLengthChange': false,

    });
  });
</script>
@endsection