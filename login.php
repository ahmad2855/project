<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <link rel="icon" href="logo2.png">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href=".css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row ">
			<div class="col-lg-6 col-md-6 d-none d-md-block infinity-image-container"></div>
		
			<div class="col-lg-6 col-md-6 infinity-form-container">				
				<div class="col-lg-9 col-md-12 col-sm-9 col-xs-12 infinity-form">
					
					<div class="text-center mb-4">
			      <h4>LOGIN</h4>
			    </div>
			    <!-- Form -->
					<form class="px-3" action="proses_login.php" method="post">
						<!-- Input Box -->
						
						
						<div class="form-input">
							<span><i class="fa fa-user"></i></span>
							<input type="text" name="username" placeholder="Username" tabindex="10"required>
						</div>
						<div class="form-input">
							<span><i class="fa fa-lock"></i></span>
							<input type="password" name="password" placeholder="Password" required>
                            <small id="passwordHelpBlock" class="form-text text-muted">
                            Your password must be 8-20 characters long
                            </small>
						</div>
						
						
			 	    <!-- Login Button -->
			      <div class="mb-3"> 
							<button type="submit" class="btn btn-block">Login</button>
						</div>
						<div class="text-right ">
			        <a href="#" class="forget-link">Lupa password?</a>
			      </div>
						<div class="text-center mb-2">
		         	<div class="text-center mb-2 text-white">atau login dengan</div>
		                    	
		         	<!-- Facebook Button -->
		         	<a href="https://www.facebook.com/?stype=lo&jlou=AfcCt5WZmwz8gux5_YYPPw4o4fF_7-JkUL5Tft37kkPG1g2ZquWoToJT5ZmSBaNY93JEunFC52c3doPt0JnPKNeFtTvF4CCloFzuLXWI1vdcbw&smuh=28683&lh=Ac-KRvpBi6GdN-rAOsc" class="btn btn-social btn-facebook">facebook</a>

		         	<!-- Google Button -->
							<a href="https://id.pinterest.com" class="btn btn-social btn-pinterest">Pinterest</a>

							<!-- Twitter Button -->
							<a href="https://twitter.com/i/flow/login" class="btn btn-social btn-twitter">twitter</a>
						</div>
						<div class="text-center mb-5 text-white">Belum punya akun? 
							<a class="register-link" href="register.php">daftar disini</a>
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
          background: url('../img/suka5.jpeg') center no-repeat;
          background-size: cover;
          opacity: 0.6;
          height: 100vh;
      }
      
      .infinity-form-container{
          background: #19376D;
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
<!------------

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 form-container">
				<div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box text-center">
					<div class="logo mt-5 mb-3">
						<img src="image/logo.png" width="150px">
					</div>
					<div class="heading mb-3">
						<h4>Login into your account</h4>
					</div>
					<form>
						<div class="form-input">
							<span><i class="fa fa-envelope"></i></span>
							<input type="text" name="username" placeholder="Masukan Username" required>
						</div>
						<div class="form-input">
							<span><i class="fa fa-lock"></i></span>
							<input type="password" name="password" placeholder="Password" required>
						</div>
						<div class="row mb-3">
							<div class="col-6 d-flex">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="cb1">
									<label class="custom-control-label text-white" for="cb1">Remember me</label>
								</div>
							</div>
							<div class="col-6 text-right">
								<a href="forget.html" class="forget-link">Forget password</a>
							</div>
						</div>
						<div class="text-left mb-3">
							<button type="submit" class="btn">Login</button>
						</div>
						<div class="text-white mb-3">or login with</div>
						<div class="row mb-3">
							<div class="col-4">
								<a href="" class="btn btn-block btn-social btn-facebook">
									<i class="fa fa-facebook"></i>
								</a>
							</div>
							<div class="col-4">
								<a href="" class="btn btn-block btn-social btn-google">
									<i class="fa fa-google"></i>
								</a>
							</div>
							<div class="col-4">
								<a href="" class="btn btn-block btn-social btn-twitter">
									<i class="fa fa-twitter"></i>
								</a>
							</div>
						</div>
						<div class="text-white">Don't have an account?
							<a href="register.html" class="register-link">Register here</a>
						</div>
					</form>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 d-none d-md-block image-container"></div>
		</div>
	</div>
	<style>
	.image-container{
    background: url('image/bg1.jpg') center no-repeat;
    background-size: cover;
    height: 100vh;
}

.form-container{
    background-color: #555555;
    display: flex;
    justify-content: center;
}

.form-box{
    display: flex;
    flex-direction: column;
    justify-content: center;
    min-height: 100vh;
}

.form-box h4{
    font-weight: bold;
    color: #fff;
}

.form-box .form-input {
    position: relative;
}

.form-box .form-input input{
    width: 100%;
    height: 40px;
    margin-bottom: 20px;
    border: none;
    border-radius: 5px;
    outline: none;
    background: white;
    padding-left: 45px;
}

.form-box .form-input span{
    position: absolute;
    top: 8px;
    padding-left: 20px;
    color: #777;
}

.form-box .form-input input::placeholder{
    padding-left: 0px;
}

.form-box .form-input input:focus,
.form-box .form-input input:valid{
    border-bottom: 2px solid #dc3545;
}

.form-box input[type="checkbox"]:not(:checked) + label:before{
    background: transparent;
    border: 2px solid #fff;
    width: 15px;
    height: 15px;
}

.form-box .custom-checkbox .custom-control-input:checked ~ .custom-control-label::before{
    background-color: #dc3545;
    border: 0px;
}

.form-box button[type="submit"]{
    border: none;
    cursor: pointer;
    width: 150px;
    height: 40px;
    border-radius: 5px;
    background-color: #fff;
    color: #000;
    font-weight: bold;
    transition: 0.5s;
}

.form-box button[type="submit"]:hover{
    -webkit-box-shadow: 0px 9px 10px -2px rgba(0,0,0,0.55);
    -moz-box-shadow: 0px 9px 10px -2px rgba(0,0,0,0.55);
    box-shadow: 0px 9px 10px -2px rgba(0,0,0,0.55);
}

.forget-link, .register-link, .login-link{
    color: #fff;
    font-weight: bold;
}

.forget-link:hover, .register-link:hover, .login-link:hover{
    color: #292525;
}

.form-box .btn-social{
    color: #fff;
    border: 0;
    margin-bottom: 10px;
}

.form-box .btn-facebook{
    background: #4866a8;
}

.form-box .btn-google{
    background: #da3f34
}

.form-box .btn-twitter{
    background: #33ccff;
}

.form-box .btn-facebook:hover{
    color: #fff;
    background: #3d5785;
}

.form-box .btn-google:hover{
    background: #bf3b31;
    color: #fff;
}

.form-box .btn-twitter:hover{
    background: #2eb7e5;
    color: #fff;
}
	</style>
</body>
</html>

------------>
