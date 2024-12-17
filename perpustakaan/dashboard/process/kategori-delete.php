<?php 

$kode = $_REQUEST['kode'];
include('../../assets/koneksi.php');
$query = "DELETE FROM kategori WHERE kode='$kode'";
mysqli_query($koneksi, $query);
$_SESSION['msg']['success_global'] = "Data kategori $kode berhasil di hapus";
header('location:../?page=kategori-data');
