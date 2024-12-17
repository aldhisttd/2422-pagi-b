<?php 

if(!isset($_POST['btn-submit'])){
    header('location:../index.php');
}

$kode = $_POST['kode'];
$nama = $_POST['nama'];

session_start();

if($nama == ''){
    $_SESSION['msg']['error_nama'] = "Data nama tidak boleh kosong";
}

if(isset($_SESSION['msg']['error_nama'])){
    header('location:../?page=kategori-form-edit&kode='.$kode);
    exit();
}

include('../../assets/koneksi.php');
$query = "SELECT * FROM kategori WHERE nama='$nama' AND kode != '$kode'";
$q = mysqli_query($koneksi, $query);
if(mysqli_num_rows($q)!=0){
    $_SESSION['msg']['error_global'] = "Data tidak boleh sama, cek kembali kode dan nama";
    header('location:../?page=kategori-form-edit&kode='.$kode);
    exit();
}

$query = "UPDATE kategori SET nama='$nama' WHERE kode='$kode'";
mysqli_query($koneksi, $query);

$_SESSION['msg']['success_global'] = "Data kategori $kode berhasil di perbaharui";
header('location:../?page=kategori-data');


