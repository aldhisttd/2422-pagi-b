<?php 

if(!isset($_POST['btn-submit'])){
    header('location:../index.php');
}

$kode = $_POST['kode'];
$nama = $_POST['nama'];

session_start();
if($kode == ''){
    $_SESSION['msg']['error_kode'] = "Data kode tidak boleh kosong";
}

if($nama == ''){
    $_SESSION['msg']['error_nama'] = "Data nama tidak boleh kosong";
}

if(isset($_SESSION['msg']['error_kode']) || isset($_SESSION['msg']['error_nama'])){
    header('location:../?page=kategori-form');
    exit();
}

include('../../assets/koneksi.php');
$query = "SELECT * FROM kategori WHERE kode='$kode' OR nama='$nama'";
$q = mysqli_query($koneksi, $query);
if(mysqli_num_rows($q)!=0){
    $_SESSION['msg']['error_global'] = "Data tidak boleh sama, cek kembali kode dan nama";
    header('location:../?page=kategori-form');
    exit();
}

$query = "INSERT INTO kategori VALUES('$kode','$nama')";
mysqli_query($koneksi, $query);

$_SESSION['msg']['success_global'] = "Data kategori $nama berhasil di tambahkan";
header('location:../?page=kategori-form');


