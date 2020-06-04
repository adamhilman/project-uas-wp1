<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Data Mahasiswa</h4>
                    </div>
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="index.php">
                                    <i class="icofont icofont-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item">Data Mahasiswa
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="page-body">
                    <div class="card">
                        <div class="card-header">
                            <h5>Data Mahasiswa</h5>
                            <div class="card-header-right">
                                <a href="index.php?halaman=data-mahasiswa&aksi=tambah-data"><i class="icofont icofont-ui-add">&nbsp;&nbsp;Tambah Data</i></a>
                            </div>
                        </div>
                        <div class="card-block">
                                <table class="table" id="example" style="width:100%">
                                    <thead>     
                                        <tr>
                                            <th>#</th>
                                            <th>NIM</th>
                                            <th>Nama Mahasiswa</th>
                                            <th>Jurusan</th>
                                            <th>Alamat</th>
                                            <th>Foto</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $no = 0;
                                        $mahasiswa=$mysqli->query("SELECT * FROM mahasiswa");
                                        while ($m=mysqli_fetch_array($mahasiswa)) {
                                            $no++;
                                    ?>
                                        <tr>
                                        <th scope="row"><?php echo $no;?></th>
                                        <td><?php echo $m['nim']; ?></td>
                                        <td><?php echo $m['nama']; ?></td>
                                        <td><?php echo $m['jurusan']; ?></td>
                                        <td><?php echo $m['alamat']; ?></td>
                                        <td><img src="assets/images/users/<?php echo $m['gambar'];?>" height="50"></td>
                                        <td>
                                        <a href="index.php?halaman=data-mahasiswa&aksi=ubah-data&id=<?php echo $m['id'];?>" role="button" class="btn btn-primary">Edit <i class="fa fa-pencil"></i></a>
                                        <a href="hapus-mahasiswa.php?id=<?php echo $m['id'];?>"onclick="return confirm('Anda yakin mau menghapus Data ini?')"><button type="button" class="btn btn-danger">Hapus <i class="fa fa-trash-o"></i></button></a>
                                        </td>
                                        </tr>
                                    <?php
                                        }
                                    ?>
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