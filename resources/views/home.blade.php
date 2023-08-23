@extends('layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
                    </div><!-- /.col -->

        
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('SELAMAT DATANG. You are logged in!') }}
                </div>
            <div class="container-fluid col-md-10">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                <div class="col-lg-6 col-30">
                    <!-- small box -->
            <!-- small box -->
            <div class="small-box bg-success">
                    <div class="inner">
                        <h3>ABSENSI<sup style="font-size: 20px"></sup></h3>

                        <p>Absensi Anggota...</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{route('absensi.index')}}" class="small-box-footer">HALAMAN ABSENSI <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
      <!-- ./col -->
      <div class="col-lg-6 col-30">

       <!-- small box -->
       <div class="small-box bg-warning">
          <div class="inner">
            <h3>NILAI</h3>

            <p>Nilai Anggota Sanggar Kilisuci...</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="{{route('nilai.index')}}" class="small-box-footer">HALAMAN NILAI <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">

            </div>
        </div>
    </div>
    
</div>

<!-- /.content-header -->

<body>


<!-- Main content -->
       
       
        
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </section>
      <!-- right col -->
    </div>
    <!-- /.row (main row) -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
         


<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">

<!-- Control sidebar content goes here -->
</aside>

<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@endsection
