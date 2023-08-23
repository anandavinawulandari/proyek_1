<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KILISUCI | 2022</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0')}}/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0')}}/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0')}}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0')}}/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
@include('layouts.navbar')




    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ asset('')}}" class="brand-link">
      <img src="{{asset('AdminLTE-3.2.0')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SANGGAR KILISUCI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('AdminLTE-3.2.0')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
          <div class="input-group-append">
            
         
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            
          <li class="nav-item">
            <a href="{{ route('home')}}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Dashboard
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>      

            @if (Auth::check() && Auth::user()->level == 'guru')
          <li class="nav-item">
            <a href="{{ route('absensi.index')}}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Data Absensi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          @endif
          
          @if (Auth::check() && Auth::user()->level == 'siswa')
            <li class="nav-item">
            <a href="{{ route('nilai.index2')}}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Data Nilai
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            </li>
            @endif
            
            @if (Auth::check() && Auth::user()->level == 'guru')
          <li class="nav-item">
            <a href="{{ route('nilai.index')}}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Nilai
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
           @endif           
        
           @if (Auth::check() && Auth::user()->level == 'siswa')
           <li class="nav-item">
            <a href="{{ route('absensi.create')}}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Absensi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            </li>
            @endif

            @if (Auth::check() && Auth::user()->level == 'guru')
        <li class="nav-item">
            <a href="{{ route('siswa.index2')}}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Data Anggota
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            </li>
            @endif

            @if (Auth::check() && Auth::user()->level == 'guru')
      <li class="nav-item">
            <a href="{{ route('sertifikat.index')}}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Sertifikat
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            </li>
            @endif

            @if (Auth::check() && Auth::user()->level == 'guru')
      <li class="nav-item">
            <a href="{{ route('rekap.index')}}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Rekap Absensi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            </li>
            @endif

            @if (Auth::check() && Auth::user()->level == 'siswa')
      <li class="nav-item">
            <a href="{{ route('sertifikat.index2')}}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Sertifikat Siswa
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            </li>
            @endif

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
          <div class="col-sm-6">

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <body>

        @yield('content')
        <script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-
                    ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
                    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
                    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
                    @stack('scripts')

                  </body>


Fdatata

         
            
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
  </body>
  
</html>