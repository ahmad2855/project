<?php
   include '../koneksi.php';
   $id = $_POST['id'];
   $judul = $_POST['judul'];
   $isi = $_POST['isi'];
   $tgl = $_POST['tanggal'];
   $ft  = $_FILES['foto']['name'];
   $file = $_FILES['foto']['tmp_name'];


   $sql = $config->query("insert into berita(id,judul,isi,tanggal,foto) values ('$id', '$judul', '$isi', '$tgl', '$ft' )");
   move_uploaded_file($file, '../img/'.$ft);
   {
    
       
    
      header("location:index.php?halaman=berita");
  }
  

   ?>