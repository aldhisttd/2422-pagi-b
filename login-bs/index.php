<?php 

session_start();
if(isset($_SESSION['login'])){
    header('location:beranda.php');
}else{
    header('location:form_login.php');
}
