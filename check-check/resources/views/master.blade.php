<!DOCTYPE html>
<html lang="pl">
<head ng-app="Check-check">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Check Check - projekt pod kontrolą</title>

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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700&subset=latin,latin-ext" rel='stylesheet' type='text/css'>

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
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="#">
                    Check Check 
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="">Start</a></li>
                    <li><a href="articles.html">Projekty</a></li>
                    <li><a href="/contact">Kontakt</a></li>
                    <li><a href="/about">O nas</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                        <li><a href="login">Zaloguj</a></li>
                        <li><a href="register">Rejestracja</a></li>
                </ul>
            </div>
        </div>        
    </nav>

    <!-- wrapper -->
    <div class="site-wrappper">

        <!-- .container -->
        <div class="container site-content">
            @yield('content')
        </div><!-- end of .container -->
        
    </div><!-- end of wrapper -->
    
    <menu></menu>
    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <p>&copy; Check-check</p>
        </div>
    </footer>


    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="app/app.component.js"></script> --}}

     <!-- Load Javascript Libraries (AngularJS, JQuery, Bootstrap) -->
        <script src="node_modules/angular2//bundles/web_worker/angular2.min.js"></script>
        
        <script src="node_modules/jquery-3.2.1.min.js"></script>
        <script src="node_modules/bootstrap.js"></script>
        
        <!-- AngularJS Application Scripts -->
        {{-- <script src="/app.js"></script> --}}
        
</body>
</html>
