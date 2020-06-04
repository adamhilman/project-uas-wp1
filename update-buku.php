<?php
    include "koneksi.php";
	$gambar = $_FILES['foto_sampul']['name'];
	//Apabila gambar tidak diganti
	if (empty($gambar)) {
		$mysqli->query("UPDATE buku SET nim = '$_POST[nim]',
			nama	= '$_POST[nama]',
			jurusan	= '$_POST[jurusan]',
			alamat	= '$_POST[alamat]'
			WHERE id = '$_POST[id]'");
	}else{
		$hapus= $mysqli->query("select * from mahasiswa where id='$_POST[id]'");
		//menghapus gambar yang lama
		$nama_gambar=mysqli_fetch_array($hapus);
		//nama field gambar
		$lokasi=$nama_gambar['gambar'];
		//alamat tempat foto
		$hapus_gambar="assets/images/users/$lokasi";
		//script untuk menghapus gambar dari folder
        unlink($hapus_gambar);
        $gambarunique = uniqid(rand());
		move_uploaded_file($_FILES['foto']['tmp_name'], 'assets/images/users/'.$gambarunique);
		$mysqli->query("UPDATE mahasiswa SET nim 	= '$_POST[nim]',
			nama 	= '$_POST[nama]',
			jurusan	= '$_POST[jurusan]',
			alamat	= '$_POST[alamat]',
			gambar 	= '$gambarunique'
			WHERE id = '$_POST[id]'");
	}
	header('location:index.php?halaman=data-mahasiswa');
?>