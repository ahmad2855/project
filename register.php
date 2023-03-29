<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="icon" href="logo2.png">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href=".css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row ">
			<!-- IMAGE CONTAINER BEGIN -->
			<div class="col-lg-6 col-md-6 d-none d-md-block infinity-image-container"></div>
			<!-- IMAGE CONTAINER END -->

			<!-- FORM CONTAINER BEGIN -->
			<div class="col-lg-6 col-md-6 infinity-form-container">					
				<div class="col-lg-9 col-md-12 col-sm-8 col-xs-12 infinity-form">
					
					
					<div class="text-center mb-4">
				    <h4>Buat Akun</h4>
				  </div>
					<!-- Form -->
					<form class="px-3" method="post" action="proses_reg.php">
						<!-- Input Box -->
						<div class="form-input">
							<span><i class="fas fa-database"></i></span>
							<input type="number" name="nik" placeholder="Masukan NIK Anda" tabindex="10"required>
						</div>
						<div class="form-input">
							<span><i class="fa fa-user"></i></span>
							<input type="text" name="nama" placeholder="Masukan Nama" tabindex="10"required>
						</div>
						<div class="form-input">
							<span><i class="fa fa-user"></i></span>
							<input type="text" name="username" placeholder="Username" tabindex="10" required>
						</div>
						<div class="form-input">
							<span><i class="fa fa-lock"></i></span>
							<input type="password" name="password" placeholder="Password" required>
						</div>
						<div class="form-input">
							<span><i class="fas fa-phone-alt"></i></i></span>
							<input type="number" name="telp" placeholder="Masukan Nomor Telepon" tabindex="10"required>
						</div>
						<!-- Register Button -->
				    <div class="mb-3"> 
							<button type="submit" class="btn btn-block">Register</button>
						</div>
						<div class="text-center mb-2">
		         	<div class="text-center mb-2 text-white">atau register dengan</div>
		         	<a href="https://www.facebook.com/?stype=lo&jlou=AfcCt5WZmwz8gux5_YYPPw4o4fF_7-JkUL5Tft37kkPG1g2ZquWoToJT5ZmSBaNY93JEunFC52c3doPt0JnPKNeFtTvF4CCloFzuLXWI1vdcbw&smuh=28683&lh=Ac-KRvpBi6GdN-rAOsc" class="btn btn-social btn-facebook">facebook</a>
				<a href="https://id.pinterest.com" class="btn btn-social btn-pinterest">Pinterest</a>
				<a href="https://twitter.com/i/flow/login" class="btn btn-social btn-twitter">twitter</a>
						</div>
						<div class="text-center mb-5 text-white">Sudah punya akun?
							<a class="login-link" href="login.php">Login disini</a>
		       	</div>
					</form>
				</div>
			</div>
			<!-- FORM CONTAINER END -->
		</div>
	</div>	
	<style>
		.container-fluid{
			background-color: #7F8487;
      }
      
      .infinity-image-container{
          background: url('../img/pus.jpeg') center no-repeat;
          background-size: cover;
          opacity: 0.6;
          height: 100vh;
      }
      
      .infinity-form-container{
          background: #31335d;
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
      }
      
      .infinity-form{
          display: flex;
          flex-direction: column;
          justify-content: center;
          min-height: 100vh;
      }
      
      .infinity-form h4 {
          font-weight: bold;
          color: white;
      }
      
      .infinity-form .form-input {
          position: relative;
      }
      
      .infinity-form .form-input input {
          width: 100%;
          margin-bottom: 20px;
          height: 40px;
          border: none;
          border-radius: 5px;
          outline: none;
          background: white;
          padding-left: 45px;
      }
      
      .infinity-form .form-input span {
          position: absolute;
          top: 8px;
          padding-left: 20px;
          color: #777;
      }
      
      .infinity-form .form-input input:focus,
      .infinity-form .form-input input:valid {
          border: 2px solid #4285f4;   
      }
      
    
      .infinity-form button[type="submit"] {
          margin-top: 10px;
          border: none;
          cursor: pointer;
          border-radius: 20px;
          background: linear-gradient(45deg, #4285f4, #709de8);  
          color: #fff;
          font-weight: bold;
          transition: 0.5s;
      }
      
      .infinity-form button[type="submit"]:hover {
          background: linear-gradient(45deg, #709de8, #4285f4);  
      }
      
      .forget-link , .login-link , .register-link {
          color: #fff;
          font-weight: bold;
      }
      
      .forget-link:hover , .login-link:hover , .register-link:hover {
          color: #4285f4;
          text-decoration: none;
      }
      
      .infinity-form .btn-social {
          color: white;
          border: 0;
          display: inline-block;
          margin: 0px;
          margin-right: 10px;
          font-weight: bold;
          padding: 0px;
          margin-bottom: 10px;
      }
      
      .infinity-form .btn-social:hover {
          text-decoration: underline;
      }
      
      .infinity-form .btn-facebook:hover {
          color: hsla(221, 40%, 40%, 1);
      }
      
      .infinity-form .btn-pinterest:hover {
          color: hsla(4, 59%, 47%, 1);
      }
      
      .infinity-form .btn-twitter:hover {
          color: hsla(195, 78%, 54%, 1);
      }
      
	</style>
</body>
</html>