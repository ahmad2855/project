
<?php
include '../koneksi.php';

$no=$_POST['no'];
$tgl = $_POST ['tgl_tanggapan'];
$tanggapan = $_POST['tanggapan'];
$id_petugas = $_POST['id_petugas'];
$st = 'selesai';

$cek=$config->query("insert into tanggapan(id_tanggapan,tgl_tanggapan,tanggapan,id_petugas) values('$no', '$tgl', '$tanggapan', '$id_petugas') ");

$ubah=$config->query("update pengaduan set status='$st' where no='$no' ");

if ($cek) {
	?>
	<script type="text/javascript">
		alert ('Tanggapan Berhasil');
		window.location="index.php?halaman=tab";
	</script>
	<?php
}

?>