<?php
    include "koneksi.php";
	$hapus=$mysqli->query("select * from buku where id='$_GET[id]'");
	//memilih gambar untuk dihapus
    $nama_gambar=mysqli_fetch_array($hapus);
	//nama field gambar
	$lokasi=$nama_gambar['foto_sampul'];
	//alamat tempat foto
	$hapus_gambar="assets/images/books/$lokasi";
    //script untuk menghapus gambar dari folder
    unlink($hapus_gambar);
    $mysqli->query("DELETE FROM buku WHERE id='$_GET[id]'");
    header('location:index.php?halaman=data-buku');
?>