<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 ml-4">Edit Petugas</h1>
        </div>

<body id="page-top">
  <div class="row">
    <div class="col-sm-9 ml-3">
<div class="card mb-3 ml-3">
  <div class="card-header text-white"style="background-color: #6F1AB6;">Form Edit Petugas</div>
  <div class="card-body">

  <?php
    include '../koneksi.php';
    $id_petugas = $_GET['id_petugas'];
    $data = mysqli_query($config,"select * from petugas where id_petugas='$id_petugas'");
    while($input = mysqli_fetch_array($data)){
        ?>

  

    <form action="proses_ubah.php" method="post" class="form-horizontal" enctype="multipart/form-data">
      <div class="form-group cols-lg-6 ">
        <label>ID Petugas</label>
        <input type="text" name="id_petugas" value="<?php echo $input['id_petugas']; ?>" class="form-control" readonly>
      </div>
      <div class="form-group cols-lg-6 ">
        <label>Nama Petugas</label>
        <input type="text" name="nama_petugas" value="<?php echo $input['nama_petugas']; ?>" class="form-control">
      </div>
      <div class="form-group cols-lg-6 ">
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $input['username']; ?>" class="form-control">
      </div>
      <div class="form-group cols-lg-6 ">
        <label>Password</label>
        <input type="text" name="password" value="<?php echo $input['password']; ?>" class="form-control">
      </div>
      <div class="form-group cols-lg-6 ">
        <label>Telp</label>
        <input type="text" name="telp" value="<?php echo $input['telp']; ?>" class="form-control">
      </div>
      <div class="form-group cols-lg-6 ">
        <label>Level</label>
        <select class="form-control" name="level">
        <option value="<?php echo $input['level']; ?>"><?php echo $input['level']; ?></option>
        <option value="admin">Admin</option>
        <option value="petugas">Petugas</option>
      </select>
      </div>

      <div class="form-group cols-lg-6">
      <div class="float-right">
        <input type="submit" value="Ubah" class="btn btn-primary">
        <input type="reset" value="Reset" class="btn btn-danger">
      </div>
      </div>
    </form>
  <?php } ?>
  </div>
</div>
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>