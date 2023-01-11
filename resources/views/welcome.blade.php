<!doctype html>
<html lang="en">

<head>
    <title>Start Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/button.css">

</head>

<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div id="runaway-container">
                <button id="runaway">Click me</button>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Selamat Datang ke Sistem PEKE</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">


                        <p class="w-100 text-center">&mdash; Mulakan Dengan &mdash;</p>
                        <div class="social d-flex text-center">
                            <a href="{{ route('login') }}" class="px-2 py-2 mr-md-1 rounded"><span
                                    class="ion-logo-facebook mr-2"></span>Log Masuk</a>
                            <a href="{{ route('register') }}" class="px-2 py-2 ml-md-1 rounded"><span
                                    class="ion-logo-twitter mr-2"></span> Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="js/button.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
