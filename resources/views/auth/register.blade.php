
<!doctype html>
<html lang="en">
<style>

	  .wrapper{
		display: inline-flex;

		height: 90px;
		width: 340px;
		align-items: center;
		justify-content: space-evenly;
		border-radius: 5px;
		padding: 20px 15px;

	  }
	  .wrapper .option{
		background: #fff;
		height: 80%;
		width: 55%;
		display: flex;
		align-items: center;
		justify-content: space-evenly;
		margin: 0 10px;
		border-radius: 5px;
		cursor: pointer;
		padding: 0 10px;
		border: 2px solid lightgrey;
		transition: all 0.3s ease;
	  }
	  .wrapper .option .dot{
		height: 20px;
		width: 20px;
		background: #d9d9d9;
		border-radius: 50%;
		position: relative;
	  }
	  .wrapper .option .dot::before{
		position: absolute;
		content: "";
		top: 4px;
		left: 4px;
		width: 12px;
		height: 12px;
		background: #7E3517;
		border-radius: 50%;
		opacity: 0;
		transform: scale(1.5);
		transition: all 0.3s ease;
	  }
	  input[type="radio"]{
		display: none;
	  }
	  #option-1:checked:checked ~ .option-1,
	  #option-2:checked:checked ~ .option-2{
		border-color: #CB6D51;
		background: #CB6D51;
	  }
	  #option-1:checked:checked ~ .option-1 .dot,
	  #option-2:checked:checked ~ .option-2 .dot{
		background: #fff;
	  }
	  #option-1:checked:checked ~ .option-1 .dot::before,
	  #option-2:checked:checked ~ .option-2 .dot::before{
		opacity: 1;
		transform: scale(1);
	  }
	  .wrapper .option span{
		font-size: 20px;
		color: #808080;
	  }
	  #option-1:checked:checked ~ .option-1 span,
	  #option-2:checked:checked ~ .option-2 span{
		color: #fff;
	  }
  </style>
  <head>
  	<title>Daftar Page</title>
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
				<div class="col-md-6 text-center mb-3">
					<h2 class="heading-section">Daftar Akaun</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-0	 text-center">Telah mempunyai akaun ?</h3>
				  <h5 class="mb-5 text-center"><a href="{{route('login')}}">Log Masuk</a></h5>
		      	<form method="POST" class="signin-form" autocomplete="off" action="{{ route('register') }}">
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
					   <input id="name" type="text" class="form-control" name="name"  autofocus placeholder="Masukkan nama" value="{{ old('name') }}" required>
					   <span class="text-danger">@error('name'){{ $message }}@enderror</span>
				    </div>
		      		<div class="form-group">
						<input id="email" type="email" class="form-control" name="email"  placeholder="Masukkan emel" value="{{ old('email') }}" required>
						<span class="text-danger">@error('email'){{ $message }}@enderror</span>
		      		</div>
					  <div class="form-group">
						<div class="col col-md-3">
						<label for="age">Umur</label>
						</div>
						<div class="col-5 col-md-7">
						<input type="range" name="age" id="age" min="60" max="100" value="60" oninput="outputId.value = age.value">
						<output id="outputId">60</output>
						<span class="text-danger">@error('age'){{ $message }}@enderror</span>
						</div>
		      		</div>
					<div class="form-group">
						<input id="password" type="password" class="form-control" name="password"  data-eye placeholder="Masukkan kata laluan" required>
						<span class="text-danger">@error('password'){{ $message }}@enderror</span>
					</div>
					<div class="form-group">
						<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required data-eye placeholder="Sahkan kata laluan">
						<span class="text-danger">@error('password_confirmation'){{ $message }}@enderror</span>
					</div>

						<input type="hidden" name="role" id="option-1" value="2" checked>
						<span class="text-danger">@error('role'){{ $message }}@enderror</span>


	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Daftar Akaun</button>
	            </div>
	          </form>

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

