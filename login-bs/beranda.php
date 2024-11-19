<?php 
session_start();
if(!isset($_SESSION['login'])){
    header('location:form_login.php');
    exit();
}

?>

selamat datang beranda

<a href="proses/logout.php">Logout</a>