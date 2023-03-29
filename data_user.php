<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

  </head>
  <body>
            <!-- Begin Page Content -->
            <div class="container-fluid">




     <!-- DataTales Example -->
     <div class="card shadow mb-4">
            <div class="card-header py-6 " style="background-color: #6F1AB6;">
              <h6 class="m-0 font-weight-bold text-white">Data Pengaduan</h6>
            </div>
    <div class="card-body">
        <div class="table-responsive">
          
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
            <th>No</th>
            <th>Nik</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Password</th>
            <th>Telp</th>
            <th>Opsi</th>
            
        </tr>
                </thead>
                   <!--------inisiasi php---------->

                   <?php
    
    include '../koneksi.php';
    $batas   = 20;
    $halaman = @$_GET['halam'];
        if(empty($halaman)){
            $posisi  = 0;
            $halaman = 1;
        }
        else{
            $posisi  = ($halaman-1) * $batas;
        }

       
        $no = $posisi+1;
        $sql="select * from masyarakat order by nik limit $posisi,$batas";
        $data = mysqli_query($config,$sql);
        while($input = mysqli_fetch_array($data)){
    
            ?>
    
        <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $input['nik']; ?></td>
                    <td><?php echo $input['nama']; ?></td>
                    <td><?php echo $input['username']; ?></td>
                    <td><?php echo $input['password']; ?></td>
                    <td><?php echo $input['telp']; ?></td>
                  
                    
                    
                    <td>
                        <a href="hapus4.php?nik=<?php echo $input['nik']; ?>"><button type="button" class="btn btn-danger mt-2" onclick="return confirm('Apakah anda yakin ingin menghapus ini')"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
                        
                    </td>
                    
                </tr>
                
                <?php

            }
            ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
  
  
  
            <?php include 'js.php'?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>