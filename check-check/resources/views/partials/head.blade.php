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

<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
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
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<style>
    body {
        font-family: 'Lato';
    }

    .fa-btn {
        margin-right: 6px;
    }
</style>