<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body>
 <!-- Begin Page Content -->
 <div class="container-fluid">



   <!-- DataTales Example -->
   <div class="card shadow mb-4">
            <div class="card-header py-6 "style="background-color: #6F1AB6;">
              <h6 class="m-0 font-weight-bold text-white">Data Tanggapan</h6>
            </div>

    <div class="card-body">
        <div class="table-responsive">
          
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
        <tr>
            <th>No</th>
            <th>Id Pengaduan</th>
            <th>Id Tanggapan</th>
            <th>Tanggal Tanggapan</th>
            <th>Isi Tanggapan</th>
            <th>Status</th>
            <th>Opsi</th>
            
        </tr>
        
</thead>

    <!--------inisiasi php---------->
    <?php
    include '../koneksi.php';


       
    $id_tanggapan = 1;
    $sql="select * from tanggapan ";
    $data = mysqli_query($config,$sql);
    while($input = mysqli_fetch_array($data)){

        ?>
        <tr>
                    <td><?php echo $id_tanggapan++; ?></td>
                    <td><?php echo $input['id_tanggapan']; ?></td>
                    <td><?php echo $input['id_pengaduan']; ?></td>
                    <td><?php echo $input['tgl_tanggapan']; ?></td>
                    <td><?php echo $input['tanggapan']; ?></td>
                    <td><?php echo $input['status']; ?></td>

                  
                    
                    
                    <td>
                    <a href="index.php?halaman=tambah&no=<?php echo $input['id_tanggapan'];  ?>"><button type="button" class="btn btn-success mt-2" style="background-color: #6F1AB6;"><i class="fas fa-reply"></i> Tanggapi</i></button></a> 
                        <a href="hapus2.php?id_tanggapan=<?php echo $input['id_tanggapan']; ?>"><button type="button" class="btn btn-danger mt-2" onclick="return confirm('Apakah anda yakin ingin menghapus ini')"><i class="fa fa-trash" aria-hidden="true"> Hapus</i></button></a>

                    </td>
                    
                </tr>
                <?php
                $id_tanggapan++;
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

  


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>