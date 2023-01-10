<!doctype html>
<html lang="en">
  <head>
  	<title>Login Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Sudah mempunyai akaun?</h3>
		      	<form method="POST" class="signin-form" autocomplete="off" action="{{ route('login') }}">
					@if ( Session::get('success'))
					<div class="alert alert-success">
					   {{ Session::get('success') }}
				   </div>
				   @endif
				   @if ( Session::get('error'))
				   <div class="alert alert-danger">
					   {{ Session::get('error') }}
					</div>
				   @endif
				   @csrf
		      		<div class="form-group">
						<input id="email" type="email" class="form-control" name="email" value="" required autofocus placeholder="Masukkan emel">
						<span class="text-danger">@error('email'){{ $message }}@enderror</span>
		      		</div>
					
	            <div class="form-group">
					<input id="password" type="password" class="form-control" name="password" required data-eye placeholder="Masukkan kata laluan">
					<span class="text-danger">@error('password'){{ $message }}@enderror</span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
							
									
								
	            </div>
	          </form>
	          <p class="w-100 text-center">&mdash; Tidak Mempunyai Akaun? &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="{{route('register')}}" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Cipta Satu</a>
	          	
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

