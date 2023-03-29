<?php

include '../koneksi.php';

$no = $_GET['no'];

mysqli_query($config, "delete from pengaduan where no='$no'");

header("location:index.php?halaman=tab");

?>

