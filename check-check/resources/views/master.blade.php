<!DOCTYPE html>
<html lang="pl">
<head ng-app="Check-check">
    @include('partials.head')
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<section id="banner" class="banner"></section>
    @include('partials.nav')
    <!-- wrapper -->
    <div class="site-wrappper">

        <!-- .container -->
        <div class="container site-content">
            @yield('content')
        </div><!-- end of .container -->
        
    </div><!-- end of wrapper -->
    <!--footer-->
    @include('partials.footer')
    <!--/ footer-->

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

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
        
</body>
</html>
