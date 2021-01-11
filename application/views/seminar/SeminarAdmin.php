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
          </h3>
          <div class="card-tools">
          <button class="btn btn-sm btn-outline-success btn-tool text-success btnDaftar">
            TAMBAH
          </button>
        </div>
        </div>

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
                    <th width="10%">WAKTU</th>
                    <th width="10%">RUANGAN</th>
                    <th width="10%">PESERTA</th>
                    <th width="15%">AKSI</th>
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
                    <td>3 <a href="#" class="btnDaftarPeserta">Lihat</a></td>
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
                    <td>3 <a href="#" class="btnDaftarPeserta">Lihat</a></td>
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
                    <td>3 <a href="#" class="btnDaftarPeserta">Lihat</a></td>
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


  <!-- Modal Daftar Seminar-->
  <div class="modal fade" id="daftarSeminar" aria-modal="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">
            <i class="fas fa-globe"></i> FORMULIR PENDAFTARAN SEMINAR
          </h4>
        </div>
        <div class="modal-body">
          <form>
            <div class="row justify-content-between">
              <div class="col-md-4">
                <div class="form-group row">
                  <label for="nim" class="col-md-3 col-form-label" style="font-size: 12px">NIM</label>
                  <input type="text" class="form-control col-md-9 form-control-sm " name="nim" id="nim" placeholder="NIM">
                </div>
                <div class="form-group row">
                  <label for="nama" class="col-md-3 col-form-label" style="font-size: 12px">NAMA</label>
                  <input type="text" class="form-control col-md-9 form-control-sm " name="nama" id="nama" placeholder="NAMA">
                </div>
                <div class="form-group row">
                  <label for="prodi" class="col-md-3 col-form-label" style="font-size: 12px">PRODI</label>
                  <select type="text" class="form-control col-md-9 form-control-sm " name="prodi" id="prodi">
                    <option value="">Sistem Informasi</option>
                  </select>
                </div>
                <div class="form-group row">
                  <label for="tangal" class="col-md-3 col-form-label" style="font-size: 12px">TANGGAL</label>
                  <input type="text tanggal" class="form-control col-md-9 form-control-sm " name="tangal" id="tanggal" placeholder="DD/MM/YYYY">
                </div>
                <div class="form-group row">
                  <label for="jam" class="col-md-3 col-form-label" style="font-size: 12px">JAM</label>
                  <input type="text" class="form-control col-md-9 form-control-sm " name="jam" id="jam" placeholder="00:00">
                </div>
                <div class="form-group row">
                  <label for="ruangan" class="col-md-3 col-form-label" style="font-size: 12px">RUANGAN</label>
                  <input type="text" class="form-control col-md-9 form-control-sm " name="ruangan" id="ruangan" placeholder="RUANGAN">
                </div>
              </div>

              <div class="col-md-7 col-md-offset-1">
                <div class="form-group row">
                  <label for="judul" class="col-md-3 col-form-label" style="font-size: 12px">JUDUL TA</label>
                  <textarea  class="form-control col-md-9 form-control-sm " name="judul" id="judul"></textarea>
                </div>
                <div class="form-group row">
                  <label for="seminar" class="col-md-3 col-form-label" style="font-size: 12px">SEMINAR</label>
                  <select type="text" class="form-control col-md-9 form-control-sm " name="seminar" id="seminar">
                    <option value="">Proposal</option>
                  </select>
                </div>
                <div class="form-group row">
                  <label for="pembimbing" class="col-md-3 col-form-label" style="font-size: 12px">PEMBIMBING</label>
                  <select type="text" class="form-control col-md-9 form-control-sm " name="pembimbing" id="pembimbing">
                    <option value="">Sirojul Munir, S.SI, M.KOM</option>
                  </select>
                </div>
                <div class="form-group row">
                  <label for="nim" class="col-md-3 col-form-label" style="font-size: 12px">PENGUJI 1</label>
                  <select type="text" class="form-control col-md-9 form-control-sm " name="prodi" id="prodi">
                    <option value="">Ahmad Rio, M.SI</option>
                  </select>
                </div>
                <div class="form-group row">
                  <label for="nim" class="col-md-3 col-form-label" style="font-size: 12px">PENGUJI 2</label>
                  <select type="text" class="form-control col-md-9 form-control-sm " name="prodi" id="prodi">
                    <option value="">Amalia Rahmah, M.T</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <button type="submit" class="btn btn-success btn-sm">DAFTAR</button>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Close</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <!-- Modal Tambah Peserta-->
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

   <!-- Modal Detail Seminar-->
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
                    <td>Rancang Bangun Aplikasi Seminar Tugas Akhir Menggunakan MVC Framework</td>
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
                  <button class="btn btn-success btnDaftarPeserta">Daftar Peserta</button>
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

    <!-- Modal Detail -->
  <div class="modal fade" id="modalDetail" aria-modal="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">
            <i class="fas fa-users"></i> DAFTAR PESERTA SEMINAR
          </h5>
        </div>
        <div class="modal-body">
          <div class="invoice p-3 mb-3">
            <div class="row invoice-info">
              <!-- /.col -->
              <div class="col-sm-12 invoice-col dataPeminjam">
                <table class="table table-light table-sm table-hover">
                  <tr>
                    <th width="20%">MAHASISWA</th>
                    <td width="2%"> : </td>
                    <td>Annisa Nurul Kazhimah (635472836)</td>
                  </tr>
                  <tr>
                    <th width="20%">Judul</th>
                    <td width="2%"> : </td>
                    <td>Rancang Bangun Aplikasi Seminar Tugas Akhir Menggunakan MVC Framework</td>
                  </tr>
                  <tr>
                    <th width="20%">Waktu</th>
                    <td width="2%"> : </td>
                    <td >Senin, 04 Januari 2021, Jam 10:00</td>
                  </tr>
                </table>
              </div>
              <!-- /.col -->
              <div class="col-sm-12 invoice-col">
                <h6>
                  <i class="fas fa-users mr-1"></i>DAFTAR PESERTA SEMINAR
                </h6>

                 <table class="table table-bordered table-sm" id="listBuku">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>NIM</th>
                      <th>MAHASISWA</th>
                      <th>PRODI</th>
                      <th>TINGKAT</th>
                      <th>STATUS</th>
                      <th>AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <td>1</td>
                    <td>726498798</td>
                    <td>Annisa Nurul Kazhimah</td>
                    <td>Sistem Informasi</td>
                    <td>S1</td>
                    <td>
                      <span class=" badge badge-success">Diterima</span>
                    </td>
                    <td>
                      <button class="btn btn-xs btn-success">
                        <i class="fas fa-pencil-alt"></i>
                      </button>
                      <button class="btn btn-xs btn-danger">
                        <i class="fa fa-times"> </i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>265326429</td>
                    <td>Saipul</td>
                    <td>Sistem Informasi</td>
                    <td>S1</td>
                    <td>
                      <span class=" badge badge-danger">Ditolak</span>
                    </td>
                    <td>
                      <button class="btn btn-xs btn-success">
                        <i class="fas fa-pencil-alt"></i>
                      </button>
                      <button class="btn btn-xs btn-danger">
                       <i class="fa fa-times"> </i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>827938282</td>
                    <td>Wak Doyok</td>
                    <td>Sistem Informasi</td>
                    <td>S1</td>
                    <td>
                      <span class=" badge badge-danger">Ditolak</span>
                    </td>
                    <td>
                      <button class="btn btn-xs btn-success">
                        <i class="fas fa-pencil-alt"></i>
                      </button>
                      <button class="btn btn-xs btn-danger">
                        <i class="fa fa-times"> </i>
                      </button>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.row -->
          </div>
          <!-- /.invoice -->
        </div>
        <!-- /.modal body -->
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    $( ".btnDaftar" ).click(function() {
      $("#daftarSeminar").modal('show');
    });

    $( ".btnDaftarPeserta" ).click(function() {
      $("#modalDetail").modal('show');
    });

    $( ".btnPeserta" ).click(function() {
      $("#tambahPeserta").modal('show');
    });

    $( ".btnDetail" ).click(function() {
      $("#detailSeminar").modal('show');
    });
  </script>