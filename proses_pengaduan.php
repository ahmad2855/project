

<?php


include "../koneksi.php";

$tanggal = $_POST['tanggal'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$isi_laporan = $_POST['isi_laporan'];
$status = $_POST['status'];

$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
 
if($filename == ""){
    mysqli_query($config,"INSERT INTO pengaduan VALUES('','$tanggal','$nik','$nama','$isi_laporan','$status','') ");
}else{
    if(!in_array($ext,$ekstensi) ) {
        header("location:index.php?pesan=gagal_ekstensi");
    }else{
        if($ukuran < 91044070){    
            $xx = $rand.'_'.$filename;
            move_uploaded_file($_FILES['foto']['tmp_name'], '../img/'.$rand.'_'.$filename);
            $foto = mysqli_query($config,"INSERT INTO pengaduan VALUES('','$tanggal','$nik','$nama','$isi_laporan','$status','$xx')");
        }else{
            header("location:index.php?pesan=gagal_ukuran");
        }
    }
    header("location:index.php?halaman=tabel");
}


?>

