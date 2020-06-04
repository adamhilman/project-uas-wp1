<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Data Buku</h4>
                    </div>
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="#!">
                                    <i class="icofont icofont-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Data Buku</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="page-body">
                    <div class="card">
                        <div class="card-header">
                            <h5>Data Buku</h5>
                            <div class="card-header-right">
                                <a href="index.php?halaman=data-buku&aksi=tambah-data"><i class="icofont icofont-ui-add">&nbsp;&nbsp;Tambah Data</i></a>
                            </div>
                        </div>
                        <div class="card-block ">
                                <table class="table" id="example" style="width:100%">
                                    <thead>     
                                        <tr>
                                            <th>#</th>
                                            <th>Judul Buku</th>
                                            <th>Kode Buku</th>
                                            <th>Deskripsi Buku</th>
                                            <th>Penerbit</th>
                                            <th>Tahun Terbit</th>
                                            <th>Sampul Buku</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $no = 0;
                                        $buku=$mysqli->query("SELECT * FROM buku");
                                        while ($m=mysqli_fetch_array($buku)) {
                                            $no++;
                                    ?>
                                        <tr>
                                        <th scope="row"><?php echo $no;?></th>
                                        <td><?php echo $m['judul_buku']; ?></td>
                                        <td><?php echo $m['kode_buku']; ?></td>
                                        <td><?php echo $m['deskripsi_buku']; ?></td>
                                        <td><?php echo $m['penerbit']; ?></td>
                                        <td><?php echo $m['tahun_terbit']; ?></td>
                                        <td><img src="assets/images/books/<?php echo $m['foto_sampul'];?>" height="50"></td>
                                        <td>
                                        <a href="index.php?halaman=data-buku&aksi=ubah-data&id=<?php echo $m['id'];?>" role="button" class="btn btn-primary">Edit <i class="fa fa-pencil"></i></a>
                                        <a href="hapus-buku.php?id=<?php echo $m['id'];?>"onclick="return confirm('Anda yakin mau menghapus Data ini?')"><button type="button" class="btn btn-danger">Hapus <i class="fa fa-trash-o"></i></button></a>
                                        </td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                              
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <!--<div id="styleSelector">-->

        <!--</div>-->
    </div>
</div>