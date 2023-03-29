<?php
include '../koneksi.php';
$username=$_POST['username'];
$password=$_POST['password'];
$sql=$config->query("select * from masyarakat where username='$username' and password='$password'");
$cek=mysqli_num_rows($sql);

  if ($cek>0)
  {
    $data=mysqli_fetch_array($sql);
    session_start();
    $_SESSION['nama']=$username;
    $_SESSION['nik']=$data['nik'];
    header('location:../user2/index.php');

  }
  else
  {
    ?>
    <script type="text/javascript">
    alert ('username dan password tidak ditemukan');
    window.location="../user/login.php";
    </script>
  <?php
  }
  ?>
<?php
include '../koneksi.php';
$username=$_POST['username'];
$password=$_POST['password'];
$sql=$config->query("select * from petugas where username='$username' and password='$password'");
$cek=mysqli_num_rows($sql);

  if ($cek>0)
  {
    $data=mysqli_fetch_array($sql);
    if ($data['level']=="admin")
    {
    session_start();
    $_SESSION['id_petugas']=$data['id_petugas'];
    $_SESSION['username']=$username;
    $_SESSION['nama_petugas']=$data['nama_petugas'];
    $_SESSION['level']=$data['level'];


    header('location:../admin2/index.php');
  }
  else if ($data['level']=="petugas") {
    session_start();
    $_SESSION['username']=$username;
    $_SESSION['nama_petugas']=$data['nama_petugas'];
    $_SESSION['level']=$data['level'];

    header('location:../petugas2/index.php');
  } 
}else {
    ?>
    <script type="text/javascript">
    alert ('username dan password tidak ditemukan');
    window.location="login.php";
    </script>
  <?php
  }
  ?>
  