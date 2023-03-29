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
<h1 class="h3 mb-0 text-gray-800 ml-3">FORM TANGGAPAN</h1>
        </div>

<body id="page-top">
  <div class="row">
    <div class="col-sm-9 ml-3">
<div class="card mb-3 ml-3">
  <div class="card-header text-white"style="background-color: #6F1AB6;">Form Tanggapan</div>
  <div class="card-body">


  

<form method="post" action="proses_tam.php" enctype="multipart/form-data">
  <div class="form-row">
 
    <div class="form-group col-md-6 font-weight-bold">
    <label for="inputAddress">Id Pengaduan</label>
    <input type="text" name="no" value="<?php echo $_GET['no']; ?>" class="form-control" readonly>


    </div>
    <div class="form-group col-md-6 font-weight-bold">
    <label for="inputAddress">Tanggal Tanggapan</label>
    <input type="text" readonly name="tanggal" value="<?php echo date('Y-m-d'); ?>" class="form-control">
  
    </div>
  </div>
  <div class="form-group">
    <textarea class="form-control" name="tanggapan" id="exampleFormControlTextarea1" rows="5" placeholder="Ketuk isi tanggapan anda" ></textarea>
  </div>
 
      <br>
      <div>
       <input type="hidden" name="id_petugas" value="<?php echo $_SESSION['id_petugas']; ?>" class="form-control">
      </div>
      <div class="float-left">
        <input type="submit" value="Tanggapi" class="btn font-weight-bold text-light" style="background-color: #6F1AB6;">
        <a href="?halaman=tab"><input type="button" value="Kembali" class="btn btn-danger font-weight-bold"></a>
      </div>
      </div>
    </div>
</div>
</form>

  </div>


</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>



