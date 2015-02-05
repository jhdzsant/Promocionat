<!DOCTYPE html>
<html ng-app="myApp" lang="es">

<head>

    <base href="<?= base_url() ?>"></base>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $titulo ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="http://localhost/Promocionat/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="http://localhost/Promocionat/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="http://localhost/Promocionat/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="http://localhost/Promocionat/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="http://localhost/Promocionat/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://localhost/Promocionat/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <!-- <script src="http://angular-ui.github.io/ui-router/release/angular-ui-router.js"></script> -->
    <!--<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.12/angular.min.js"></script> -->
    <script src="js/app.js"></script>
    <script src="js/angular.min.js"></script>
</head>

<body>

<div id="wrapper">

    <!-- En esta seccion es donde se colocara la parte del header -->
    <?= $this->load->view($header) ?>

    <!-- En esta seccion se declara el contenido de la pagina -->
    <?= $this->load->view($contenido) ?>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="http://localhost/Promocionat/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="http://localhost/Promocionat/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="http://localhost/Promocionat/bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript
<script src="http://localhost/Promocionat/bower_components/raphael/raphael-min.js"></script>
<script src="http://localhost/Promocionat/bower_components/morrisjs/morris.min.js"></script>
<script src="http://localhost/Promocionat/js/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="http://localhost/Promocionat/dist/js/sb-admin-2.js"></script>




</body>

</html>
