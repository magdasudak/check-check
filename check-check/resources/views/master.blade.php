<!DOCTYPE html>
<html lang="pl">
<head ng-app="Check-check">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Check Check - projekt pod kontrolą</title>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
    <!--AngularJS-->
    <script src="node_modules/es6-shim/es6-shim.js"></script>
    <script src="node_modules/angular2/bundles/angular2-polyfills.js"></script>
    <script src="node_modules/systemjs/dist/system.src.js"></script>
    <script src="node_modules/rxjs/bundles/Rx.js"></script>
    <script src="node_modules/angular2/bundles/angular2.dev.js"></script>
    <script>
        System.config({
            packages: {
                app: {
                    format: 'register',
                    defaultExtension: 'js'
                }
            }
        });

        System.import('app/boot.js')
            .then(null, console.error.bind(console));

    </script>


    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700&subset=latin,latin-ext" rel='stylesheet'
          type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ URL:: asset ('custom.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">


<div class="collapse navbar-collapse" id="app-navbar-collapse">
    <!-- Left Side Of Navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="col-md-12">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--<a class="navbar-brand" href="#"><img src="img/logo.jpg" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>-->
                </div>
                <div class="collapse navbar-collapse navbar-right" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#banner">Start</a></li>
                        <li class=""><a href="#service">Usługi</a></li>
                        <li class=""><a href="#about">O nas</a></li>
                        <li><a href="articles.html">Projekty</a></li>
                        <li class=""><a href="#contact">Kontakt</a></li>
                        <li><a href="login">Zaloguj</a></li>
                        <li><a href="register">Rejestracja</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


</div>


<!-- wrapper -->
<div class="site-wrappper">


    @yield('content')


</div><!-- end of wrapper -->

<menu></menu>
<!--footer-->
<footer id="footer">
    <div class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 marb20">
                    <div class="ftr-tle">
                        <h4 class="white no-padding">O nas</h4>
                    </div>
                    <div class="info-sec">
                        <p>Praesent convallis tortor et enim laoreet, vel consectetur purus latoque penatibus et dis
                            parturient.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 marb20">
                    <div class="ftr-tle">
                        <h4 class="white no-padding">Szybkie linki</h4>
                    </div>
                    <div class="info-sec">
                        <ul class="quick-info">
                            <li><a href="index.html"><i class="fa fa-circle"></i>Start</a></li>
                            <li><a href="#service"><i class="fa fa-circle"></i>Usługi</a></li>
                            <li><a href="#contact"><i class="fa fa-circle"></i>Kontakt</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 marb20">
                    <div class="ftr-tle">
                        <h4 class="white no-padding">Znajdź nas</h4>
                    </div>
                    <div class="info-sec">
                        <ul class="social-icon">
                            <li class="bglight-blue"><i class="fa fa-facebook"></i></li>
                            <li class="bgred"><i class="fa fa-google-plus"></i></li>
                            <li class="bgdark-blue"><i class="fa fa-linkedin"></i></li>
                            <li class="bglight-blue"><i class="fa fa-twitter"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-line">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    © Copyright Check-check. All Rights Reserved

                </div>
            </div>
        </div>
    </div>
</footer>
<!--/ footer-->


<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


</body>
</html>
