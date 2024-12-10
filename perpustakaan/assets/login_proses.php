<?php 
// ambil dulu nilai input
$user_form = $_POST['username'];
$pass_form = $_POST['password'];

// validasi kosong atau tidak
session_start();
if($user_form==''){
    $_SESSION['error_user'] = "Username tidak boleh kosong.";
}

if($pass_form==''){
    $_SESSION['error_pass'] = "Password tidak boleh kosong.";
}

if(isset($_SESSION['error_user']) || isset($_SESSION['error_pass'])){
    header('location:../login.php');
    exit();
}

// validasi data login benar / tidak
$koneksi = mysqli_connect('localhost', 'root', '', '2024sem5_pagiB_mypustaka');
$sql = "SELECT * FROM user WHERE username='$user_form' AND password='$pass_form'";
$q = mysqli_query($koneksi, $sql);
$numRow = mysqli_num_rows($q);

if($numRow==0){
    $_SESSION['error_global'] = "Data login tidak valid.";
    header('location:../login.php');
    exit();
}

// proses login antarkan ke halaman beranda
$_SESSION['is_login'] = true;
header('location:../dashboard/index.php');


?>