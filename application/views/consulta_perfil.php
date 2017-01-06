<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Playa Lorem Ipsum</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url("assets/vendor/bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url("assets/vendor/metisMenu/metisMenu.min.css"); ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url("assets/dist/css/sb-admin-2.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/css/morris-float.css"); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url("assets/vendor/font-awesome/css/font-awesome.min.css"); ?>" rel="stylesheet" type="text/css">


    <link href="<?php echo base_url("assets/vendor/bootstrap-table/dist/bootstrap-table.css"); ?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include 'navbar.php';?>

        <div id="page-wrapper"> <!-- aca empieza el contenido -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Perfil Nº XX Playa Lorem Ipsum </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Gráfico "Distancia/Elevación" del Perfil
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div id="mediciones-grafico"></div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>

                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabla de Distancias del Perfil
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <table id="tablaMed"></table>
                            </div>
                            <!-- /.row (nested) -->
                        </div>

                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <button type="button" class="btn btn-primary col-lg-1" onlick="goBack()">Volver</button>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    

    <!-- jQuery -->
    <script src="<?php echo base_url("assets/vendor/jquery/jquery.min.js"); ?>"></script>

    <!-- MorrisJS -->
    <script src="<?php echo base_url("assets/vendor/morrisjs/morris.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendor/raphael/raphael.min.js"); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url("assets/vendor/bootstrap/js/bootstrap.min.js"); ?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url("assets/vendor/metisMenu/metisMenu.min.js"); ?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url("assets/dist/js/sb-admin-2.js"); ?>"></script>

    <!-- AJAX para eventos -->
    <script src="<?php echo base_url("assets/js/ajax.js"); ?>"></script>


    <script src="<?php echo base_url("assets/vendor/bootstrap-table/dist/bootstrap-table.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendor/bootstrap-table/dist/locale/bootstrap-table-es-ES.js"); ?>"></script>

    <!-- MorrisJS Graph Constructor -->
    <script type="text/javascript">
    Morris.Line(
                <?php
                $CI =& get_instance();
                echo $CI->json_medidas();
                ?>
                );
    </script>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>


    <script type="text/javascript">
    $('#tablaMed').bootstrapTable(<?php
                $CI =& get_instance();
                echo $CI->json_table();
                ?>
                );
    </script>

</body>

</html>
