@extends('admin.template.main')

@section('title', 'Laporan Keuangan')

@section('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="base_url" content="{{ url('admin') }}">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

@endsection

@section('main-content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Dashboard</h1>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>


<!-- /.content-header -->
<!-- <div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-5">
                <form action="{{ route('admin.reports.print') }}" method="post">
                  @csrf
                  <div class="form-group row">
                    <label for="tahun" class="col-sm-4 col-form-label">Tahun</label>
                    <div class="col-sm-6">
                      <select class="form-control" id="tahun" name="year">
                        <option value="0" selected="selected" disabled="true">-- Pilih Tahun
                          --</option>
                        @foreach ($years as $year)
                        <option value="{{ $year->Tahun }}">{{ $year->Tahun }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="bulan" class="col-sm-4 col-form-label">Bulan</label>
                    <div class="col-sm-6">
                      <select class="form-control" id="bulan" name="month">
                        <option value="0" selected="selected" disabled="true">-- Pilih Tahun dulu --</option>
                      </select>
                    </div>
                  </div>
                  <button type="submit" id="btn-cetak" class="mt-3 btn btn-primary d-none">Cetak</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
<!-- /.container-fluid -->
<!-- </div> -->


<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <!-- PEMASUKAN -->
            <div class="row pemasukan">

              <!-- pemasukan harian -->
              <div class="col-sm-12 col-md-6 col-lg-3">
                <!-- small box -->
                <div class="small-box bg-success">
                  <div class="inner">
                    <p>Pemasukan hari ini</p>
                    <h4>Rp {{ number_format($totalPemasukanHarian, 0, ',', '.') }}</h4>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="" style="pointer-events: none;" class="disabled small-box-footer"><i class="fas fa"></i></a>
                </div>
              </div>

              <!-- pemasukan bulanan -->
              <div class="col-sm-12 col-md-6 col-lg-3">
                <!-- small box -->
                <div class="small-box bg-primary">
                  <div class="inner">
                    <p>Pemasukan bulan ini</p>
                    <h4>Rp {{ number_format($totalPemasukanBulanan, 0, ',', '.') }} </h4>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="" style="pointer-events: none;" class="disabled small-box-footer"><i class="fas fa"></i></a>
                </div>
              </div>

              <!-- pemasukan tahunan -->
              <div class="col-sm-12 col-md-6 col-lg-3">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <p>Pemasukan tahun ini</p>
                    <h4>Rp {{ number_format($totalPemasukanTahunan, 0, ',', '.') }} </h4>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="" style="pointer-events: none;" class="disabled small-box-footer"><i class="fas fa"></i></a>
                </div>
              </div>

              <!-- seluruh pemasukan -->
              <div class="col-sm-12 col-md-6 col-lg-3">
                <!-- small box -->
                <div class="small-box bg-secondary">
                  <div class="inner">
                    <p>Seluruh pemasukan</p>
                    <h4>Rp {{ number_format($seluruhPemasukan, 0, ',', '.') }}</h4>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="" style="pointer-events: none;" class="small-box-footer"><i class="fas fa"></i></a>
                </div>
              </div>
            </div>

            <!-- PENGELUARAN -->
            <div class="row pengeluaran">

              <!-- pengeluaran harian -->
              <div class="col-sm-12 col-md-6 col-lg-3">
                <!-- small box -->
                <div class="small-box bg-danger">
                  <div class="inner">
                    <p>Pengeluaran hari ini</p>
                    <h4 class="">Rp {{ number_format($totalPengeluaranHarian, 0, ',', '.') }} </h4>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="" style="pointer-events: none;" class="disabled small-box-footer"><i class="fas fa"></i></a>
                </div>
              </div>

              <!-- pengeluaran bulanan -->
              <div class="col-sm-12 col-md-6 col-lg-3">
                <!-- small box -->
                <div class="small-box bg-danger">
                  <div class="inner">
                    <p>Pengeluaran bulan ini</p>
                    <h4>Rp {{ number_format($totalPengeluaranBulanan, 0, ',', '.') }}</h4>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="" style="pointer-events: none;" class="disabled small-box-footer"><i class="fas fa"></i></a>
                </div>
              </div>

              <!-- pengeluaran tahunan -->
              <div class="col-sm-12 col-md-6 col-lg-3">
                <!-- small box -->
                <div class="small-box bg-danger">
                  <div class="inner">
                    <p>Pengeluaran tahun ini</p>
                    <h4>Rp {{ number_format($totalPengeluaranTahunan, 0, ',', '.') }}</h4>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="" style="pointer-events: none;" class="disabled small-box-footer"><i class="fas fa"></i></a>
                </div>
              </div>

              <!-- seluruh pemasukan -->
              <div class="col-sm-12 col-md-6 col-lg-3">
                <!-- small box -->
                <div class="small-box bg-dark">
                  <div class="inner">
                    <p>Seluruh pengeluaran</p>
                    <h4>Rp {{ number_format($seluruhPengeluaran, 0, ',', '.') }} </h4>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="" style="pointer-events: none;" class="small-box-footer"><i class="fas fa"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection

@section('scripts')
<script src="{{ asset('js/ajax.js') }}"></script>
@endsection