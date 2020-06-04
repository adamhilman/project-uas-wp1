<?php
include "koneksi.php";
$judul_buku = $_POST['judul_buku'];
$kode_buku = $_POST['kode_buku'];
$deskripsi_buku = $_POST['deskripsi_buku'];
$penerbit = $_POST['penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];
#$gambar2 = $_FILES['gambar']['name'];
$foto_sampul = uniqid(rand());
$mysqli->query("INSERT INTO buku(judul_buku,kode_buku,deskripsi_buku,penerbit,tahun_terbit,foto_sampul) VALUES ('$judul_buku','$kode_buku','$deskripsi_buku','$penerbit','$tahun_terbit','$foto_sampul')");
move_uploaded_file($_FILES['foto_sampul']['tmp_name'],'assets/images/books/'.$foto_sampul);
header('location:index.php?halaman=data-buku');
?>