@extends('member.template.main')

@section('title', 'Dashboard Pelanggan')

@section('css')
<link href="{{ asset('vendor/datatables-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/datatables-responsive/css/responsive.bootstrap4.min.css') }}" rel="stylesheet">
@endsection
@section('main-content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Dashboard Pelanggan</h1>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-10">
                <img class="img-circle img-fit float-left" width="100" height="100" src="/img/profile/default.jpg" alt="Foto Profil">
                <div class="member-content">
                  <h2 class="m-0">{{ $user->name }}</h2>
                  <p class="small m-0">ID Member: {{ $user->id }}</p>
                  <!-- <p class="small m-0 d-block d-sm-none">Point: {{ $user->point }}</p>
                  <a href="{{ route('member.points.index') }}" class="badge badge-primary badge-pill d-sm-none">Tukar Poin</a> -->
                </div>
              </div>
              <div class="col-2 d-none d-sm-block text-center">
                <!-- <p class="small m-0">Poin</p> -->
                <!-- <h2 class="m-0">{{ $user->point }}</h2>
                <a href="{{ route('member.points.index') }}" class="badge badge-primary badge-pill">Tukar Poin</a> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="my-3 text-center">Transaksi Terakhir</h3>
          </div>
          <div class="card-body">
            <table id="tbl-detail" class="table dataTable dt-responsive nowrap" style="width:100%">
              <thead class="thead-light">
                <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($latestTransactions as $item)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ date('d F Y', strtotime($item->created_at)) }}</td>
                  <td>
                    @if ($item->status_id != '3')
                    <span class="text-warning">{{ $item->status->name }}</span>
                    @else
                    <span class="text-success">{{ $item->status->name }}</span>
                    @endif
                  </td>
                  <td>
                    <a href="{{ route('member.transactions.show', ['transaction' => $item->id]) }}" class="badge badge-primary">Lihat Detail ></a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
@endsection

@section('scripts')
<script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendor/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('vendor/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#tbl-detail').DataTable({
      "searching": false,
      "bPaginate": false,
      "bLengthChange": false,
      "bFilter": false,
      "bInfo": false
    });
  });
</script>
@endsection