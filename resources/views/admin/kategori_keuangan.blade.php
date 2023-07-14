@extends('admin.template.main')
@section('title', 'Kategori Keuangan')

@section('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="base_url" content="{{ url('admin') }}">
<link href="{{ asset('vendor/datatables-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/datatables-responsive/css/responsive.bootstrap4.min.css') }}" rel="stylesheet">
<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
@endsection

@section('main-content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Kategori Keuangan</h1>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>


<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('error') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @elseif (session('warning'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          {{ session('warning') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @elseif (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
        <div class="card">
          <div class="card-body">
            <div class="float-left">
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#financeCatModal"><i class="fas fa-plus"></i> Tambah Kategori </a>
            </div>

            <table id="tbl-category" class="table dt-responsive nowrap" style="width: 100%">
              <thead class="thead-light">
                <tr>
                  <th style="width: 5%;">No</th>
                  <th>Nama</th>
                  <th class="text-center" style="width: 20%;">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($category as $ctg)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $ctg->name }}</td>
                  <td class="text-center">
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
<x-admin.modals.add-finance-category-modal />
@endsection


@section('scripts')
<script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendor/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('vendor/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#tbl-category').DataTable({
      'bInfo': false,
      "bLengthChange": false,
      // 'searching': false
    });
  });
</script>
@endsection