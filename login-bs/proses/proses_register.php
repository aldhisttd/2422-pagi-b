<?php 
// ambil dulu nilai input
$user_form = $_POST['username'];
$pass_form = $_POST['password'];
$pass_conf_form = $_POST['password_confirmation'];

// validasi kosong atau tidak
session_start();
if($user_form==''){
    $_SESSION['error_user'] = "Username tidak boleh kosong.";
}

if($pass_form==''){
    $_SESSION['error_pass'] = "Password tidak boleh kosong.";
}

if($pass_conf_form==''){
    $_SESSION['error_pass_conf'] = "Password konfirmasi tidak boleh kosong.";
}

if(isset($_SESSION['error_user']) || isset($_SESSION['error_pass']) || isset($_SESSION['error_pass_conf'])){
    $_SESSION['username_cache'] = $user_form;
    header('location:../form_register.php');
    exit();
}

if($pass_form != $pass_conf_form){
    $_SESSION['username_cache'] = $user_form;
    $_SESSION['error_pass_conf'] = "Password konfirmasi tidak sama.";
    header('location:../form_register.php');
    exit();
}

// validasi data login benar / tidak
$koneksi = mysqli_connect('localhost', 'root', '', '2024sem5_pagib');
$sql = "SELECT * FROM users WHERE username='$user_form'";
$q = mysqli_query($koneksi, $sql);
$numRow = mysqli_num_rows($q);

if($numRow==1){
    $_SESSION['error_global'] = "Data username ini ada, silahkan ganti.";
    header('location:../form_register.php');
    exit();
}

// proses register
$sql = "INSERT INTO `users` (`id`, `username`, `password`) VALUES (NULL, '$user_form', '$pass_form');";
mysqli_query($koneksi, $sql);
$_SESSION['success'] = "Registrasi berhasil, anda sudah bisa login.";
header('location:../form_register.php');


?>