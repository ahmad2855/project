<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href=".css">


    <title>AYO LAPOR</title>
    <link rel="icon" href="logo2.png">
  </head>
  <body>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <header class="header">
  <div class="header-inner">
    <div class="container-fluid px-lg-5">
      <nav class="navbar navbar-expand-lg my-navbar">
  <a class="navbar-brand" href="#"><span class="logo">
    <img src="../img/logo2.png" class="img-fluid" style="width:30px; margin:-3px 0px 0px 0px;">Desa Sukakarya</span>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fas fa-bars" style="margin:5px 0px 0px 0px;"></i></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav m-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">HOME<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#berita">BERITA</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#data">DATA</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#fak">FAQ</a>
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <a href="login.php"><button type="button" class="btn font-weight-bold text-light"style="background-color: #00337C  ; ">LOGIN</button></a>

    </form>
  </div>
</nav>

    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
  <script type="text/javascript">
    $(function(){
      var navbar = $('.header-inner');
      $(window).scroll(function(){
        if($(window).scrollTop() <=40){
          navbar.removeClass('navbar-scroll');
        }else{
          navbar.addClass('navbar-scroll');
        }
      });
    });
  </script>

  <style>
    @media only screen and (min-width:1200px){
	.nav-item > .nav-link{padding: 5px 20px !important;
		display: block !important;}
}

@media only screen and (max-width:992px){
	.header-inner{background-color: white!important;
	}
	.nav-item > .nav-link{
		color: black!important}
		.logo{color: #000 !important;
			font-weight: 600!important;}
			.content-banner .first-title{font-size: 30px !important;
			}
}







.content-banner{
background-image: url(../img/suka5.jpeg);
min-height:500px;
height:100%;
position: relative;
background-position: center center;
background-size: cover;
padding-top: 125px;
}

.content-banner:before{position:absolute;

width: 100%;
height: 100%;
top:0;
left: 0;
z-index: 1;}

.content-banner .first-title{font-size: 44px;
font-weight: 400;
line-height: 1.2;
position: relative;
z-index: 2;
margin:0px 0px 12px;}

.content-banner .banner-des{font-size: 12px;
line-height: 150%;
letter-spacing: 0;
position: relative;
z-index: 2;
font-weight: 400;
margin-top: 0;}

.banner-btn{padding:0 34px;
z-index: 1;
margin:30px auto 25px;
line-height: 56px;
position: relative;
border-radius: 6px;
height:56px;
font-size: 16px;
background-color: #2F58CD;
display: inline-block;
color: #ffffff;
transition: 0.3s;
text-align: center;

}

.banner-btn:hover{text-decoration: none;
color:#2F58CD;
background-color:white; }


.header{position: relative;
width: 100%;
}

.header-inner{position: absolute;
top: 0;
left: 0;
width:100%;
z-index: 99;
background-color: transparent;
}

.logo{color:#ffffff;
}

.nav-item .nav-link{display: block;
line-height: 36px;
text-transform: capitalize;
font-size: 16px;
font-weight: 500;
color: #ffffff;
transition: 0.15s;}

.nav-item .nav-link:hover{color: #00337C;}

.header-btn{color:#ffffff;
border-radius: 30px;
background-color: #2F58CD;
border:none;
font-weight: 500;
outline: none;
font-size: 15px;
padding:7px 22px;
transition: 0.5s;
}

.header-btn:hover{background-color: #00337C;
cursor: pointer;}

.navbar-scroll{background-color: #ffffff;
padding: 0;
position: fixed;
top:0;
z-index: 99;
box-shadow:0px 1px 10px rgba(0,0,0,0.4);
transition-duration: 0.6s; }

.navbar-scroll .nav-item .nav-link{color: black;
}

.navbar-scroll .header-btn{color: #ffffff;
background-color: #00337C;
}

.navbar-scroll .logo{color: #000;
font-weight: 500;
}

.first-title{
	text-transform: capitalize;
}




  </style>
</header>

<section class="content-banner">

<div class="container">
<div class="row d-flex justify-content-center">
<div class="col-md-12">
  <div class="banner-con text-center">
    <h4 class="first-title text-light">LAYANAN PENGADUAN MASYARAKAT ONLINE</h4>
    <h5 class="banner-des text-light">Sampaikan laporan masalah Anda disini, kami akan</h5>
    <br>
     <a href="login.php"><button type="button" class="btn font-weight-bold text-light"style="background-color: #00337C  ; ">LOGIN</button></a>
  </div>
</div>
</div>
</div>
</section>
  
   
<div class="container">
          <div class="row">
                    <div class="col-md-3">
                              <center>
                        <div class="card" style="width: 17rem; height: 22rem;">
                        <div class="container">
                       
                          <br>
                                       <img src="../img/cut4.png" style="width: 10rem; height: 10rem;">
                                       </div>
                                        <div class="card-body">
                                        <div class="intro">
                                        <h5 class="card-title font-weight-bold">1. Tulis Laporan</h5>
                                        <h6>Tulis laporan keluhan Anda dengan jelas<h6>

                                        </div>
                       </div>
                </div>
                       </center>
                    </div>

                    <div class="col-md-3">
                              <center>
                        <div class="card" style="width: 17rem; height: 22rem;">
                        
                                <div class="container">
                                  <br>
                                       <img src="../img/rep2.png" style="width: 10rem; height: 10rem;">
                                 </div>
                                        <div class="card-body">
                                        <div class="intro">
                                        <h5 class="card-title font-weight-bold">2. Proses Verifikasi</h5>
                                        <h6>Tunggu sampai laporan Anda di verifikasi</h6>
                                        </div>
                       </div>
</div>
                       </center>
                    </div>

                    <div class="col-md-3">
                      <center>
                        <div class="card" style="width: 17rem; height: 22rem;">
                       
                                    <div class="container">
                                      <br>
                                       <img src="../img/cut3.png" style="width: 15rem; height: 10rem;">
                                 </div>
                                        <div class="card-body">
                                        <div class="intro">
                                        <h5 class="card-title font-weight-bold">3. Tindak Lanjut</h5>
                                        <h6>Laporan Anda sedang dalam tindak lanjut</h6>
                                        </div>
                       </div>
</div>
                       </center>
                    </div>

                    <div class="col-md-3">
                              <center>
                        <div class="card" style="width: 17rem; height: 22rem;">
                        
                                    <div class="container">
                                      <br>
                                       <img src="../img/cek.png" style="width: 15rem; height: 10rem;">
                                 </div>
                                        <div class="card-body">
                                        <div class="intro">
                                        <h5 class="card-title font-weight-bold">4. Selesai</h5>
                                        <h6>Laporan pengaduan telah selesai ditindak</h6>
                                        </div>
                       </div>
</div>
                       </center>
                    </div>
                    
          </div>
          
</div>
</div>

          
<br>
<br>
<br>
<br>
            
          <div class="container">
          <div class="row">
                    <div class="col-md-6">
                      <h2 >Penjelasan Tentang Web Pengaduan Masyarakat</h2>
                      <p>Pengaduan Masyarakat Online dibuat untuk merealisasikan kebijakan “no wrong door policy” yang menjamin hak masyarakat agar pengaduan dari manapun dan jenis apapun akan disalurkan kepada penyelenggara pelayanan publik yang berwenang menanganinya. Pengaduan Masyarakat Online bertujuan agar:</p>
                      <p>1.Penyelenggara dapat mengelola pengaduan dari masyarakat secara sederhana, cepat, tepat, tuntas, dan terkoordinasi dengan baik;</p>
                      <p>2.Penyelenggara memberikan akses untuk partisipasi masyarakat dalam menyampaikan pengaduan; dan</p>
                      <p>3.Meningkatkan kualitas pelayanan publik.</p>
                    </div>

                    <div class="col-md-6">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/h_RL_qY23dI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                  </div>
          
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h5>Selamat Datang</h5>
      <h1 class="text text-dark">Ini Merupakan Website Pengaduan Masyarakat </h1>
      <br>
      <p>Perangkat lunak merupakan sebuah Sistem Pengaduan Masyarakat Berbasis Web, hal ini dibutuhkan untuk mempermudah pihak instansi dalam mengelola data dan mampu menampung serta menyalurkan aspirasi maupun pengaduan masyarakat dengan media yang tepat. Sistem ini menggunakan metode waterfall.</p>
      <p>Pada metode waterfall, harus melalui berbagai tahapan. Yang pertama tahap requirement atau spesifikasi kebutuhan sistem, kedua adalah desain, tahap ketiga Implementasi, tahap keempat Verifikasi, tahap kelima Pemeliharaan yang termasuk diantaranya instalasi dan proses perbaikan sistem sesuai dengan kontrak. Software yang digunakan untuk membangun sistem ini yaitu Visual Studio Code dengan Bahasa Pemrograman PHP. Dan menggunakan MySQL sebagai penyimpanan Database.</p>
      <button type="button" class="btn font-weight-bold text-light"style="background-color: #2F58CD  ; ">LOGIN SEKARANG</button>
      <style>
        button{
          box-shadow:   0 0 5px #2F58CD,
          0 0 10px #2F58CD;
        }
        button:hover{
          box-shadow: 0 0 5px #2F58CD,
          0 0 10px #2F58CD, 0 0 20px #2F58CD,
          0 0 50px #2F58CD, 0 0 50px #2F58CD;
        }
      </style>
    </div>

    <div class="col-md-6">
    <img src="../img/kepala.png" width="500px" height="600px" alt=""></a>
    </div>
  </div>
</div>
<br>
<br>
<br>
<br>
  <div class="container">
  <div data-aos="fade-right">
  <h3 id="berita">Berita Terkini</h3>
  <hr>
  </div>
  <br>
  <br>
                  <div class="row">
                  <div data-aos="fade-down">
                    <div class="col-md-6">
                    <a href="../img/jalan2.jpg" class="fancybox" data-fancybox="galery1">
                      <img src="../img/jalan2.jpg" width="500px" height="300px" alt=""></a>
                      </div>
                    </div><!------col------>
                    <div class="col-md-6">
                    <div data-aos="fade-up-right">
                    <h4 class="text text-dark">Warga Kampung Ciparay, Sukakarya, Keluhkan Kondisi Jalan yang Rusak Berat</h4>
                      <br>
                     <p class="text text-dark">Warga Kampung Ciparay, Desa Sukakarya, Kecamatan Samarang, Kabupaten Garut mengeluhkan kondisi jalan Samarang - Kamojang sebagai jalan kabupaten, yang rusak berat.

Disebutkan, di badan jalan Kamojang-Samarang tersebut  terdapat banyak lubang yang besar dan dalam. Pada musim penghujan banyak lubang yang digenangi air sehingga banyak pengendara mengalami kecelakaan karena tidak melihat lubang-lubang tersebut.<a href="berita.php">selengkapnya</a></p>
                     </div>
                    </div>
                  
              </div>
              <br>
              <br>
              <div class="row">
                    
                    <div class="col-md-6 ">
                    <div data-aos="fade-up-left">
                    <h4 class="text text-dark">Desa Sukakarya Samarang Garut Alokasikan DBH Bangun Sarpras dan Fasilitas Umum</h4>
                      <br>
                     <p class="text text-dark">Dari beberapa desa di Kecamatan Samarang yang mendapatkan Dana Bagi Hasil (DBH) PT Star Energy Geothermal Darajat (Star Energy), salah satunya adalah Desa Sukakarya di wilayah Garut, Jawa Barat.<a href="berita2.php">selengkapnya</a></p>
                     </div>
                    </div><!------col------>
                    <div class="col-md-6">
                    <div data-aos="fade-down-left">
                    <a href="../img/suka6.jpg" class="fancybox" data-fancybox="galery1">
                      <img src="../img/suka6.jpg" width="500px" height="300px" alt=""></a>
                    </div>
                    </div>
              </div>

   <br>
  <br>
                  <div class="row">
                  <div data-aos="fade-down">
                    <div class="col-md-6">
                    <a href="../img/suka7.jpg" class="fancybox" data-fancybox="galery1">
                      <img src="../img/suka7.jpg" width="500px" height="300px" alt=""></a>
                      </div>
                    </div><!------col------>
                    <div class="col-md-6">
                    <div data-aos="fade-up-right">
                    <h4 class="text text-dark">Antisipasi Banjir, Pemdes Desa Sukakarya Samarang Garut Bangun TPT dari Dana IP</h4>
                      <br>
                     <p class="text text-dark">Pemerintah Desa (Pemdes) Sukakarya Kecamatan Samarang Kabupaten Garut Jawa Barat membangun tembok penahan tanah (TPT) dari bantuan provinsi atau Dana Infrastuktur Desa (IP).

Kepala Urusan (Kaur) Perencanaan Desa Sukakarya Ujang Kamaludin mengatakan bahwa pembangunan TPT ini sangat dibutuhkan oleh warga untuk mencegah terjadinya banjir yang kerap melanda.<a href="berita3.php">selengkapnya</a></p>
                     </div>
                    </div>

                    
                  
              </div>
              <br>
              <br>
              <div class="row">
                    
                    <div class="col-md-6 ">
                    <div data-aos="fade-up-left">
                      <h4 class="text text-dark">Yudha Puja Turnawan, Dinsos Garut dan Camat Samarang Kunjungi Mak Erot Lansia Tua di Sukakarya</h4>
                      <br>
                     <p class="text text-dark">Ketua DPC PDI Perjuangan Kabupaten Garut, Yudha Puja Turnawan bersama Kabid Rehabsos, camat Samarang, kepala Desa Sukakarya menengok langsung Kondisi Mak Erot di Kampung sukamaju RT/RW 01/01, Desa Sukakarya, Kecamatan samarang, Garut Jawa Barat, Senin (31/01/2022).<a href="berita4.php">selengkapnya</a></p>
                     </div>
                    </div><!------col------>
                    <div class="col-md-6">
                    <div data-aos="fade-down-left">
                    <a href="../img/suka8.jpeg" class="fancybox" data-fancybox="galery1">
                      <img src="../img/suka8.jpeg" width="500px" height="300px" alt=""></a>
                    </div>
                    </div>
              </div>
              </div><!-----container----------->

   
              <br>
              <br>
              <br>
              
              <div class="pengguna">
                
                    <br>
                    <br>
                    <br>
                    <center><h1 id="data">DATA LAPORAN</h1></center>
                    <?php include 'count.php'?>
                </div>

<br>
<br>
<br>
<section class="faq top" id="fak">
    <div class="container flex">
      <div class="left">
        <img src="../img/fak.jpg" alt="">
      </div>
      <div class="right">
        <div class="text">
          <h2>Frequently Asked Questions(FAQs)</h2>
        </div>
        <div class="accordionWrapper">
          <div class="accordionItem open">
            <h2 class="accordionIHeading">Apa itu Wesite Pengaduan Masyarakat?</h2>
            <div class="accordionItemContent">
            <p>
                    Pengaduan Masyarakat adalah Sistem Aplikasi Masyarakat Bertanya Terpadu online Dinas Komunikasi dan Informatika Pemerintah Kota Malang. Melalui aplikasi ini, Anda dapat mengirimkan saran, kritik, pertanyaan atau pengaduan seputar Pemerintah Kota Malang.
                    Instansi Penanggung Jawab adalah instansi yang berwenang untuk memberikan tindak lanjut dan menanggapi aduan maupun aspirasi yang masuk dari pengguna.
                    Dengan mengunduh, mengakses, menjelajahi dan atau menggunakan layanan Pengaduan Online ini, berarti Pengguna setuju untuk terikat oleh Ketentuan Penggunaan Layanan ini. Jika Pengguna tidak setuju dengan Syarat dan Ketentuan Penggunaan ini, pengguna harus segera menghentikan akses dan penggunaan layanan yang ditawarkan Webiste Ini.
                    Jika pengguna terbukti menggunakan aplikasi untuk tujuan yang membahayakan, merugikan, atau di luar tujuan penggunaan yang dimaksudkan dalam aplikasi ini, maka penyedia layanan aplikasi tidak bertanggung jawab terhadap dampak yang ditimbulkan.
                    Pengelola layanan tidak memiliki kewajiban menghilangkan informasi pengguna atau laporan yang tampil pada hasil pencarian mesin pencari.
           </p>
            </div>
          </div>
          <div class="accordionItem close">
            <h2 class="accordionIHeading">Bagaimana Cara Menggunakan Webiste Pengaduan Masyarakat Ini?</h2>
            <div class="accordionItemContent">
            <p>1. Sebelum menggunakan aplikasi ini, Anda diharuskan mendaftar terlebih dahulu. Setelah mendaftar, Anda dapat masuk (login) dengan menggunakan akun yang telah dibuat sebelumnya.</p>
          <p>2. Pendaftaran hanya dilakukan satu kali saja, untuk selanjutnya Anda dapat menggunakan akun yang sama untuk menggunakan aplikasi ini kembali. Anda diwajibkan mengisi data dengan sebenar-benarnya sesuai dengan identitas Anda. </p>

            </div>
          </div>
          <div class="accordionItem close">
            <h2 class="accordionIHeading">Bagaimana Cara Mendaftar(Register) dan Masuk(Login)?</h2>
            <div class="accordionItemContent">
            <p>1. Klik menu daftar untuk memulai pendaftaran user. Harap mengisi semua isian dengan sebenar-benarnya, kesalahan pengisian merupakan tanggung jawab user.</p>
          <p>2. Setelah melakukan pendaftaran, Login dengan menggunakan akun Anda dan silakan memulai menggunakan aplikasi ini.</p>

            </div>
          </div>
          <div class="accordionItem close">
            <h2 class="accordionIHeading">Jika Sudah Melakukan Pengaduan, Apa Yang Harus Kami Lakukan?</h2>
            <div class="accordionItemContent">
              <p>Ketika sudah melakukan pengaduan langkah selanjunya masyarakat harus menunggu balasan/tanggapan dari pihak Admin 
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    var accItem = document.getElementsByClassName('accordionItem');
    var accHD = document.getElementsByClassName('accordionIHeading');

    for (i = 0; i < accHD.length; i++) {
      accHD[i].addEventListener('click', toggleItem, false);
    }

    function toggleItem() {
      var itemClass = this.parentNode.className;
      for (var i = 0; i < accItem.length; i++) {
        accItem[i].className = 'accordionItem close';
      }
      if (itemClass == 'accordionItem close') {
        this.parentNode.className = 'accordionItem open';
      }
    }
  </script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200;300;400;500;600;700;800;900&display=swap');


.flex {
  display: flex;
}

.top {
  margin-top: 10%;
}

.mtop {
  margin-top: 5%;
}

.left, .right {
  width: 50%;
}


/*--------------about--------*/
/*--------------faq--------*/
.faq img {
  width: 100%;
  height: 100%;
}

.faq .right {
  padding: 50px 50px 50px 100px;
}

.faq h2 {
  margin-bottom: 20px;
  font-weight: 400;
}

.faq .text p {
  margin-bottom: 50px;
  line-height: 25px;
}

.accordionItem {
  margin-top: 30px;
}

.accordionItem p {
  font-size: 15px;
  opacity: 0.8;
  font-family: sans-serif;
  line-height: 20px;
}

.accordionIHeading {
  cursor: pointer;
  width: 100%;
  border-radius: 3px;
  font-weight: 400;
  font-size: 17px;
  color: #6F1AB6;
  margin-bottom: 20px;
}

.close .accordionItemContent {
  height: 0px;
  transition: height 1s ease-out;
  transform: scaleY(0);
  float: left;
  display: block;
  background-color: #fff;
}

.open .accordionItemContent {
  padding: 30px;
  background-color: #fff;
  width: 100%;
  margin: 0 0 10px 0;
  display: block;
  transform: scaleY(1);
  transform-origin: top;
  transition: transform 0.4s ease;
  box-sizing: border-box;
  box-shadow: 0 13px 43px 0 rgb(37 46 89 / 10%);
}

/*--------------faq--------*/

</style>
<br>
<br>
<br>
<br>

<br>
<br>
  <footer class="text-white text-center text-lg-start "style="background-color: #2F58CD;">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row mt-4">
        <!--Grid column-->
        <div class="col-lg-4 col-md-12  mb-md-0">
         <h5 class="text ml-4">SOSIAL MEDIA</h5>

        <br>
    
          <div class="infinity-social-btn text-center">
							<ul class="text-center">
								<li class="text-center"><a href="https://www.facebook.com/?stype=lo&jlou=AfcCt5WZmwz8gux5_YYPPw4o4fF_7-JkUL5Tft37kkPG1g2ZquWoToJT5ZmSBaNY93JEunFC52c3doPt0JnPKNeFtTvF4CCloFzuLXWI1vdcbw&smuh=28683&lh=Ac-KRvpBi6GdN-rAOsc" class="facebook">
										<i class="fa fa-facebook"></i><i class="fa fa-facebook"></i></a>
								</li>
								<li class="text-center"><a href="https://www.instagram.com/" class="instagram">
										<i class="fa fa-instagram"></i><i class="fa fa-instagram"></i></a>
								</li>
								<li class="text-center"><a href="https://twitter.com/i/flow/login" class="twitter">
										<i class="fa fa-twitter"></i><i class="fa fa-twitter"></i></a>
								</li>
                <li class="text-center"><a href="https://id.pinterest.com/login/" class="pinterest">
                <i class="fa fa-pinterest"></i><i class="fa fa-pinterest"></i></a>
								</li>
               
							</ul>
						</div>
              <style>
   .infinity-social-btn ul
{
	display:flex;
}

.infinity-social-btn ul li
{
	position:relative;
	list-style:none;
	width:50px;
	height:50px;
	top:10px;
	left:-40px;
	align-items:center;
	margin-right:20px;
	background:#fff;
	text-align:center;
	border:4px solid transparent;
	box-sizing:border-box;
	border-radius:50%;
	transition:.5s;
	overflow:hidden;
	margin-bottom:10px;
}

.infinity-social-btn ul li .facebook .fa
{
	color:#3b5999;
}

.infinity-social-btn ul li .instagram .fa
{
	color:#dd4b39;
}

.infinity-social-btn ul li .twitter .fa
{
	color:#3cf;
}

.infinity-social-btn ul li .pinterest .fa
{
	color:#dd4b39;
}

.infinity-social-btn ul li .linkedin .fa
{
	color:#3cf;
}

.infinity-social-btn ul li:hover:nth-child(1)
{
	background-color:#3b5999;
}

.infinity-social-btn ul li:hover:nth-child(2)
{
	background-color:#dd4b39;
}

.infinity-social-btn ul li:hover:nth-child(3)
{
	background-color:#55acee;
}

.infinity-social-btn ul li:hover:nth-child(4)
{
	background-color:#dd4b39;
}

.infinity-social-btn ul li:hover:nth-child(5)
{
	background-color:#55acee;
}

.infinity-social-btn ul li .fa
{
	position:absolute;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%);
	font-size:24px;
	color:#2196f3;
	transition:.5s;
}

.infinity-social-btn ul li .fa:nth-child(1)
{
	left:-50%;
	opacity:0;
}

.infinity-social-btn ul li:hover .fa:nth-child(1)
{	
	left:50%;
	opacity:1;
	color:#fff;
}

.infinity-social-btn ul li:hover .fa:nth-child(2)
{
	left:150%;
	opacity:0;
}



              </style>
         
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4 pb-1">KONTAK KAMI</h5>

          

          <ul class="fa-ul" style="margin-left: 1.65em;">
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">Garut, Rt2 Rw3, Indonesia</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">@ah6813185@gmail.com</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">+ 62 831 169 690 74</span>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">LOKASI KAMI</h5>
                  
          <table class="table text-center text-white">
            <tbody class="fw-normal">
              <tr>
              <section class="map top">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15834.171616314594!2d107.79915475!3d-7.178715199999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1674714832215!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"> referrerpolicy="no-referrer-when-downgrade"></iframe>      
                  </section>
              </tr>
            </tbody>
          </table>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
 

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">Hidayat Company</a>
    </div>
    <!-- Copyright -->
  </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
  AOS.init();
</script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Anton&family=Archivo+Black&family=Golos+Text&family=Lilita+One&family=Noto+Sans+Display:wght@100&family=Patua+One&family=Righteous&family=Roboto+Slab:wght@300&display=swap');
body{
    background-color: #D0E8F2;
}
nav{
    background-color: transparent;
  
}

img{
  border-radius: 20px;
}
li .nav-link{
  font-family: 'Roboto Slab', serif;
    transition: 0.5s;
    transition-duration: 0.8s;
}
.intro{
          height: 40px;
          width: 250px;
          padding: 6px;
          margin-left: -10px;
          margin-top: 50%;
          box-sizing: border-box;
          position: absolute;
          bottom: 100px;
          background: #2F58CD;
          color: white;
          transition: .5s;
          border-radius: 20px;

}
.card{
  margin-top: -60px;
  border-radius: 20px;
  background: #FFFBF5;
  box-shadow: 5px 5px 20px #00337C;
}
.card:hover{
          cursor: pointer;
}
.card:hover .intro{
          height: 200px;
          bottom: 10px;
          background: #00337C;
}
.card:hover h6{
          opacity: 3;
          visibility: visible;
}
.card:hover img{
          transform: scale(1.1) rotate(-3deg);
}
.jumbotron{
    background-image: url('../img/suka4.jpg');
    background-size: cover;
    height: 500px;
    margin-top: -80px;
}

h1{
    font-weight: bold;
    color: white;
    font-family: 'Righteous', cursive;
    
}
h4{
    color: white;
    font-weight: bold;
   font-family: 'Righteous', cursive;
    }
h2{
    font-weight: bold;
    font-family: 'Righteous', cursive;
}
h3{
    font-weight: bold;
    font-family: 'Righteous', cursive;    
}
h5 .card-title{
    font-weight: bold;
    font-family: 'Righteous', cursive;
}
p{
    color: black;
    font-family: 'Roboto Slab', serif;
    text-align: justify;

}
h6{
  font-size: 15px;
          margin: 20px;
          visibility: hidden;
          opacity: 0;
}


.pengguna{
    background: url(../img/desas.jpeg) no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}



</style>
<a class="gotopbtn text-light" href="#"><i class="fa fa-regular fa fa-arrow-up"></i></a>

<style>
  html{
    scroll-behavior: smooth;
  }
  .gotopbtn{
          position: fixed;
          width: 50px;
          height: 50px;
          background: #2F58CD;
          bottom: 40px;
          right: 50px;

          text-decoration: none;
          text-align: center;
          line-height: 50px;
          color: white;
          font-size: 22px;

         
}
</style>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>