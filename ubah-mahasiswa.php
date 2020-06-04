<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Form Edit Mahasiswa</h4>
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
                            <li class="breadcrumb-item">Edit Mahasiswa
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
                                    <h5>Edit Mahasiswa</h5>
                                </div>
                                <div class="card-block">
                                <?php
	$edit=$mysqli->query("SElECT * FROM mahasiswa where id='$_GET[id]'");
	$e=mysqli_fetch_array($edit);
?>
                                    <form action="update-mahasiswa.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <input type="hidden" name="id" value=<?php echo $e['id'];?>>
                                            <label class="col-sm-2 col-form-label">NIM</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="nim" value=<?php echo $e['nim'];?>>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control form-control-capitalize"
                                                    name="nama" value="<?php echo $e['nama'];?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Jurusan</label>
                                            <div class="col-sm-10">
                                            <select name="jurusan" class="form-control" required>
                                            <option value="<?php echo $e['jurusan'];?>"><?php echo $e['jurusan'];?></option>
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
                                                    ><?php echo $e['alamat'];?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Ganti Foto</label>
                                            <div class="col-sm-10">
                                                <input name="foto" type="file" class="form-control" value=<?php echo $e['gambar'];?>>
                                                <img src="assets/images/users/<?php echo $e['gambar'];?>" width="300" height="400">
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                <button type=submit class="btn btn-primary">Update</button>
                                <a href="index.php?halaman=data-mahasiswa" role="button" class="btn btn-warning">Cancel</a>
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