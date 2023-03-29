<?php
include '../koneksi.php';
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$user=$_POST['username'];
$pass=$_POST['password'];
$telp=$_POST['telp'];
$sql=$config->query("insert into masyarakat values('$nik','$nama','$user','$pass','$telp')");
if ($sql)
{
  ?>
  <script type="text/javascript">
    alert ('Akun Anda Berhasil dibuat');
    window.location="login.php";

  </script>
  <?php
}
?>