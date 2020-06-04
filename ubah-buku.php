<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Form Edit Buku</h4>
                    </div>
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="icofont icofont-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item"><a href="index.php?halaman=data-buku">Data Buku</a>
                            </li>
                            <li class="breadcrumb-item">Edit Buku
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
                                    <h5>Edit Buku</h5>
                                </div>
                                <div class="card-block">
                                <?php
	$edit=$mysqli->query("SElECT * FROM buku where id='$_GET[id]'");
	$e=mysqli_fetch_array($edit);
?>
                                    <form action="update-buku.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <input type="hidden" name="id" value=<?php echo $e['id'];?>>
                                            <label class="col-sm-2 col-form-label">Judul Buku</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="judul_buku" value="<?php echo $e['judul_buku'];?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Kode Buku</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control"
                                                    name="kode_buku" value="<?php echo $e['kode_buku'];?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Deskripsi Buku</label>
                                            <div class="col-sm-10">
                                                <textarea name="deskripsi_buku" rows="5" cols="5" class="form-control"
                                                    ><?php echo $e['deskripsi_buku'];?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Penerbit</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control form-control-capitalize"
                                                    name="penerbit" value="<?php echo $e['penerbit'];?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tahun Terbit</label>
                                            <div class="col-sm-10">
                                                <input type="number" min="1" max="9999" class="form-control form-control-capitalize"
                                                    name="tahun_terbit" value="<?php echo $e['tahun_terbit'];?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Ganti Foto Sampul</label>
                                            <div class="col-sm-10">
                                                <input name="foto_sampul" type="file" class="form-control" value=<?php echo $e['foto_sampul'];?>>
                                                <img src="assets/images/books/<?php echo $e['foto_sampul'];?>" width="300" height="400">
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                <button type=submit class="btn btn-primary">Update</button>
                                <a href="index.php?halaman=data-buku" role="button" class="btn btn-warning">Cancel</a>
                                </div>
                                    </form>
                                    <script src="assets/ckeditor/ckeditor.js"></script>
                                    <script type="text/javascript">
                                        CKEDITOR.replace('deskripsi_buku', {
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