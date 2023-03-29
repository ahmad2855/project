<?php
include '../koneksi.php';
$nama=$_POST['nama_petugas'];
$user=$_POST['username'];
$pass=$_POST['password'];
$telp=$_POST['telp'];
$lvl=$_POST['level'];

$cek=$config->query("insert into petugas(nama_petugas, username, password, telp, level) values('$nama', '$user', '$pass', '$telp', '$lvl') ");
if ($cek) {
   ?>
   <script type="text/javascript">
   	alert ('Data Berhasil Disimpan');
   	window.location='index.php?halaman=petugas';
   </script>

<?php
}
?>