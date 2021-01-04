<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Judul Aplikasi</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css'); ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css'); ?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed text-sm control-sidebar-slide-open accent-success">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark navbar-success">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>



      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Administrator
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Profil</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Keluar</a>
          </div>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-success elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link navbar-success">
        <img src="<?= base_url('assets/dist/img/AdminLTELogo.png'); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
        style="opacity: .8">
        <span class="brand-text text-white">E-<b>SISTA</b></span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?= base_url('assets/dist/img/avatar.png'); ?>" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Administrator</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-compact nav-sidebar flex-column nav-flat nav-legacy" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                Dashboard
              </a>
            </li>

            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Manage Seminar
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url("seminar") ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Seminar</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url("seminar") ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Buat Seminar Baru</p>
                  </a>
                </li>
              </ul>
            </li>

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
              <h1 class="m-0 text-dark">DATA SEMINAR TUGAS AKHIR</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Data Seminar</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                <i class="fa fa-clock text-success mr-1"></i>
                JADWAL SEMINAR TUGAS AKHIR
              </h3> </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table table-condensed table-striped">
                    <thead>
                      <tr>
                        <th width="5%">#</th>
                        <th width="20%">NIM</th>
                        <th width="20%">MAHASISWA</th>
                        <th width="15%">SEMINAR</th>
                        <th width="15%">WAKTU</th>
                        <th width="15%">RUANGAN</th>
                        <th width="10%">AKSI</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>726498798</td>
                        <td>Annisa Nurul Kazhimah</td>
                        <td>Seminar Hasil</td>
                        <td>10:00 04-01-2021</td>
                        <td>Online</td>
                        <td>
                          <button class="btn btn-xs btn-info btnDetail">
                            <i class="fa fa-search-plus"></i>
                          </button>
                          <button class="btn btn-xs btn-success btnPeserta">
                            <i class="fa fa-edit"></i>
                          </button>
                          <button class="btn btn-xs btn-danger">
                            <i class="fa fa-trash"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>265326429</td>
                        <td>Saipul</td>
                        <td>Seminar Proposal</td>
                        <td>10:00 04-01-2021</td>
                        <td>Online</td>
                        <td>
                          <button class="btn btn-xs btn-info btnDetail">
                            <i class="fa fa-search-plus"></i>
                          </button>
                          <button class="btn btn-xs btn-success btnPeserta">
                            <i class="fa fa-edit"></i>
                          </button>
                          <button class="btn btn-xs btn-danger">
                            <i class="fa fa-trash"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>827938282</td>
                        <td>Wak Doyok</td>
                        <td>Seminar Rambut</td>
                        <td>10:00 04-01-2021</td>
                        <td>Online</td>
                        <td>
                          <button class="btn btn-xs btn-info btnDetail">
                            <i class="fa fa-search-plus"></i>
                          </button>
                          <button class="btn btn-xs btn-success btnPeserta">
                            <i class="fa fa-edit"></i>
                          </button>
                          <button class="btn btn-xs btn-danger">
                            <i class="fa fa-trash"></i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!--/. container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->


      <!-- Modal -->
      <div class="modal fade" id="tambahPeserta" aria-modal="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">
                <i class="fas fa-globe"></i> Seminar Hasil
              </h4>
            </div>
            <div class="modal-body">
              <div class="invoice p-3 mb-3">
                <div class="row invoice-info">
                  <!-- /.col -->
                  <div class="col-sm-12 invoice-col">
                    <table class="table table-light table-sm table-hover">
                      <tr>
                        <th width="20%">Mahasiswa Seminar</th>
                        <td width="2%"> : </td>
                        <td>Annisa Nurul Kazhimah (726498798)</td>
                      </tr>
                      <tr>
                        <th width="20%">Judul</th>
                        <td width="2%"> : </td>
                        <td>Seminar Ya Gituu</td>
                      </tr>
                      <tr>
                        <th width="20%">Waktu</th>
                        <td width="2%"> : </td>
                        <td>Senin, 04 Januari 2021 10:00 WIB.</td>
                      </tr>
                    </table>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- Table row -->
                <div class="row">
                  <div class="col-12">
                    <div class="card card-success">
                      <div class="card-header">
                        <h3 class="card-title">
                          <i class="fa fa-book mr-1"></i>
                          FORM PESERTA SEMINAR
                        </h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                      <form>
                        <div class="card-body">
                          <div class="form-group row">
                            <label for="nim" class="col-md-2 col-form-label">NIM</label>
                            <input type="text" class="form-control col-md-10" name="nim" id="nim" placeholder="NIM">
                          </div>
                          <div class="form-group row">
                            <label for="nim" class="col-md-2 col-form-label">NAMA</label>
                            <input type="text" class="form-control col-md-10" name="nama" id="nama" placeholder="Nama">
                          </div>
                          <div class="form-group row">
                            <label for="prodi" class="col-md-2 col-form-label">PRODI</label>
                            <select name="prodi" class="form-control col-md-10" id="prodi">
                              <option value="">Sistem Informasi</option>
                              <option value="">Teknik Informatika</option>
                            </select>
                          </div>
                          <div class="form-group row">
                            <label class="col-md-2 col-form-label">PRODI</label>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input"  name="prodi" type="radio" id="d3" value="d3">
                              <label class="form-check-label" for="d3">D3</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input"  name="prodi" type="radio" id="s1r" value="s1 reguler">
                              <label class="form-check-label" for="s1r">S1 Reguler</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input"  name="prodi" type="radio" id="s1ft" value="s1 fast trackt">
                              <label class="form-check-label" for="s1ft">S1 Fast Trackt</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input"  name="prodi" type="radio" id="s2" value="s2">
                              <label class="form-check-label" for="s2">S2</label>
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                            <div class="col-md-12">
                              <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                          </div>
                        </div>
                        <!-- /.card-body -->
                      </form>
                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

       <!-- Modal -->
      <div class="modal fade" id="detailSeminar" aria-modal="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">
                <i class="fas fa-globe"></i> Seminar Hasil
              </h4>
            </div>
            <div class="modal-body">
              <div class="invoice p-3 mb-3">
                <div class="row invoice-info">
                  <!-- /.col -->
                  <div class="col-sm-12 invoice-col table-responsive">
                    <table class="table table-light table-sm table-hover">
                      <tr>
                        <th width="5%">NIM</th>
                        <td width="2%"> : </td>
                        <td width="28%">726498798</td>
                        <th width="5%"class="text-right" >Pembimbing</th>
                        <td width="1%">:</td>
                        <td width="10%" class="text-left"> Dosen</td>
                      </tr>
                      <tr>
                        <th width="5%">Nama</th>
                        <td width="2%"> : </td>
                        <td>Annisa Nurul Kazhimah</td>
                        <th width="5%"class="text-right" >Penguji</th>
                        <td width="1%">:</td>
                        <td width="10%" class="text-left"> Dosen Lagi</td>
                      </tr>
                      <tr>
                        <th width="5%">Prodi</th>
                        <td width="2%"> : </td>
                        <td>Sistem Informasi</td>
                      </tr>
                      <tr>
                        <th width="5%">Judul</th>
                        <td width="2%"> : </td>
                        <td colspan="3">Lorem ipsum dolor sit, amet consectetur adipisicing, elit. Dolor, corrupti?</td>
                      </tr>
                      <tr>
                        <th width="5%">Waktu</th>
                        <td width="2%"> : </td>
                        <td>Senin, 04 Januari 2021 10:00 WIB.</td>
                      </tr>
                      <tr>
                        <th width="5%">Ruang</th>
                        <td width="2%"> : </td>
                        <td>Zoom Online</td>
                      </tr>
                    </table>
                  </div>
                  <!-- /.col -->
                  <div class="col-md-12">
                      <button type="submit" class="btn btn-success">Daftar Peserta</button>
                    </div>
                </div>
                <!-- /.row -->
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

      <!-- Main Footer -->
      <footer class="main-footer">
        <strong>Copyright &copy; 2021</strong>
        Annkazh.
      </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="<?= base_url('assets/plugins/jquery/jquery.min.js'); ?>"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/dist/js/adminlte.js'); ?>"></script>

    <script>
      $( ".btnPeserta" ).click(function() {
        $("#tambahPeserta").modal('show');
      });

      $( ".btnDetail" ).click(function() {
        $("#detailSeminar").modal('show');
      });
    </script>
  </body>
  </html>
