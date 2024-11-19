<?php

session_start();
echo $_SESSION['nama'];

session_destroy(); //menghapus semua sesi
// unset(sesi) -->menghapus sepesifik variable/sesi

?>