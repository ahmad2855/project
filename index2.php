
    
       <?php
       if(isset($_GET['halaman'])){
         $halaman = $_GET['halaman'];
         switch($halaman){
           case 'tab':
             include "tabel.php";
             break;

                 case 'beranda':
                  include "beranda.php";
                  break;

                  case 'tambah':
                    include "tambah.php";
                    break;

                    case 'tanggapan':
                      include "tanggapan.php";
                      break;

                      case 'petugas':
                        include "petugas.php";
                        break;

                        case 'ubah':
                          include "ubah.php";
                          break;

                          case 'data_user':
                            include "data_user.php";
                            break;

                            case 'kritik':
                              include "kritik.php";
                              break;

                              case 'print':
                                include "print.php";
                                break;

                                case 'berita':
                                  include "berita.php";
                                  break;

                                  case 't_berita':
                                    include "t_berita.php";
                                    break;

                  
               default:
               echo "<center><h3>MAAF1 halaman tidak ditemukan</h3></center>";
               break;
         }
}else{
            include 'beranda.php';
          }
        
        ?>