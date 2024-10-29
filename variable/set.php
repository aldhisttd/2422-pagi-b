<?php 

$warna = "biru";
// echo isset($warna);

if(isset($warna)){
    echo $warna;
}else{
    echo "variable warna tidak ada";
}

if(!isset($warna)){
    echo "tidak ada";
}

?>