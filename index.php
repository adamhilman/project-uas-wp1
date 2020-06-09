<?php 
error_reporting(0);
session_start(); // Start session nya

// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if( ! isset($_SESSION['username'])){ // Jika tidak ada session username berarti dia belum login
	header("location: login.php"); // Kita Redirect ke halaman index.php karena belum login
}
include "header.php";
include "sidebar.php";
include "koneksi.php";
$halaman = $_GET["halaman"];
$aksi = $_GET["aksi"];
if ($halaman == "data-mahasiswa"){
    if ($aksi == "tambah-data"){
        include "form-mahasiswa.php";
    }elseif ($aksi == "ubah-data"){
        include "ubah-mahasiswa.php";
    }else {
    include "data-mahasiswa.php";}
}elseif ($halaman == "data-buku"){
    if ($aksi == "tambah-data"){
        include "form-buku.php";
    }elseif ($aksi == "ubah-data"){
        include "ubah-buku.php";
    }else {
     include "data-buku.php";}
}else {
    include "dashboard.php";}
include "footer.php";


?>