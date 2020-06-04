<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Form Tambah Mahasiswa</h4>
                    </div>
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="icofont icofont-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item"><a href="index.php?halaman=data-mahasiswa">Data Mahasiswa</a>
                            </li>
                            <li class="breadcrumb-item">Tambah Mahasiswa
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Page header end -->
                <!-- Page body start -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Basic Form Inputs card start -->
                            <div class="card">
                                <div class="card-header">
                                    <h5>Tambah Mahasiswa</h5>
                                </div>
                                <div class="card-block">
                                    <form action="tambah-mahasiswa.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">NIM</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="nim">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control form-control-capitalize"
                                                    name="nama">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Jurusan</label>
                                            <div class="col-sm-10">
                                            <select name="jurusan" class="form-control" required>
                                            <option value="-">None</option>
                                            <option value="Sistem Informasi">Sistem Informasi</option>
                                            <option value="Teknik Informatika">Teknik Informatika</option>
                                            <option value="Teknik Komputer">Teknik Komputer</option>
                                            <option value="Sistem Informasi Akuntansi">Sistem Informasi Akuntansi</option>
                                        </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Alamat</label>
                                            <div class="col-sm-10">
                                                <textarea name="alamat" rows="5" cols="5" class="form-control"
                                                    placeholder="Alamat anda"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Upload Foto</label>
                                            <div class="col-sm-10">
                                                <input name="foto" type="file" class="form-control">
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                <button type=submit class="btn btn-primary">Simpan</button>
                                <button type=reset class="btn btn-warning">Reset</button>
                                </div>
                                    </form>
                                    <script src="assets/ckeditor/ckeditor.js"></script>
                                    <script type="text/javascript">
                                        CKEDITOR.replace('alamat', {
                                            height: 300
                                        });
                                    </script>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page body end -->
            </div>
        </div>
    </div>
</div>