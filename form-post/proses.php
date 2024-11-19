<?php 
if(!isset($_POST['btn-submit'])){
    header('location:form.php');
    exit();
}

echo $_POST['username'];