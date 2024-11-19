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
    header('location:../form_login.php');
    exit();
}

// validasi data login benar / tidak
if($user_form!='admin' || $pass_form!='123'){
    $_SESSION['error_global'] = "Data login tidak valid.";
    header('location:../form_login.php');
    exit();
}

// proses login antarkan ke halaman beranda
$_SESSION['login'] = true;
header('location:../beranda.php');


?>