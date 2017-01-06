<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Informacion sobre Playa</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body>

    <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Inicio</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">Sobre el proyecto</a>
                    </li>
                    <li>
                        <a href="#">Registrarse</a>
                    </li>
                    <li>
                        <a href="#">Inicio Seccion</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Reñaca,
                    <small>Viña del Mar.</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-6">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive" src="http://2.bp.blogspot.com/-6td8ncKQZuY/Vq_fPw_EsMI/AAAAAAAAJxk/EwQSD55ORpo/s1600/Concon%2BCamino%2BCostero%2B1920.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="http://www.visitevinadelmar.cl/uploads/2013/02//20130228160611-articulo-playa-de-renaca-610x300.jpg" alt="">
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <h3>Introducción</h3>
                <p>La playa de Reñaca, por su ubicación, extensión y exposición, genera un importante interés turístico para Viña del Mar, transformándose en un ícono del veraneo nacional. Este carácter mediático la sitúa como un punto de referencia para reportar la ocurrencia de marejadas u otros fenómenos climáticos, lo que la hace interesante también desde el punto de vista científico e ingenieril.
                En este contexto, y como parte de las actividades de terreno del curso de ingeniería de costas a cargo del profesor Mauricio Molina Pereira, el 15 abril de 2013 se inició un estudio de largo plazo con el objeto de establecer su estado de equilibrio, característica granulométrica y ciclo anual entre otros.</p>
            </div>

        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Datos Climaticos</h3>
            </div>

            <div class="col-lg-8">
                    <? $primerValor = array();?>
                    <? $primerValor=explode("_", $ubicacion) ?>
                    <? $primerValor=$primerValor['0']?>
                    <? //print_r ($arrayName)?>
                    <? print $ubicacion="'wg_target_div_".$ubicacion. "'"?>
                    <? echo $ubicacion ?>
                    <script src="http://widget.windguru.cz/js/wg_widget.php" type="text/javascript"></script>
                    <script language="JavaScript" type="text/javascript">
                    //<![CDATA[
                        WgWidget({
                        s: <?echo $primerValor?> , odh:0, doh:24, wj:'knots', tj:'c', waj:'m', fhours:72, lng:'es',
                        params: ['WINDSPD','GUST','SMER','TMPE','CDC','APCPs'],
                        first_row:true,
                        spotname:true,
                        first_row_minfo:true,
                        last_row:true,
                        lat_lon:true,
                        tz:true,
                        sun:true,
                        link_archive:false,
                        link_new_window:false
                        },
                        <? echo $ubicacion ?>
                        );
                    //]]>
                    </script>
                <div id=<? echo $ubicacion ?>></div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i>De interes. </h4>
                    </div>
                    <div class="panel-body">
                         <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">17</div>
                                        <div>Comentarios</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver detalles...</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                    <div align="center">
                        </div>
                        <h1 class="page-header">
                            Informacion Historica 
                            <small>Reñaca</small>
                        </h1><br>
                        <p>INFO DE REÑACA INFO DE REÑACA INFO DE REÑACA INFO DE REÑACA INFO DE REÑACA INFO DE REÑACA INFO DE REÑACA INFO DE REÑACA INFO DE REÑACA INFO DE REÑACA INFO DE REÑACA INFO DE REÑACA INFO DE REÑACA INFO DE REÑACA INFO DE REÑACA INFO DE REÑACA INFO DE REÑACA INFO DE REÑACA INFO DE REÑACA INFO DE REÑACA INFO DE REÑACA INFO DE REÑACA INFO DE REÑACA INFO DE REÑACA INFO DE REÑACA INFO DE REÑACA INFO DE REÑACA INFO DE REÑACA INFO DE REÑACA INFO DE REÑACA INFO DE REÑACA INFO DE REÑACA INFO DE REÑACA </p>
                        <br><br><br>
                        
                    </div>
                </div>
 



        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Perfiles</h3>
                    </div>
                    <div class="panel-body">
                        <div id="morris-area-chart"></div>
                    </div>
                </div>
            </div>
        </div>







        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Metodologia de Analisis &copy; Informatica UV 2016</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <
    
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/dist/js/sb-admin-2.js"></script>

    <!-- AJAX para eventos -->
    <script src="<?php echo base_url(); ?>assets/js/ajax.js"></script>


    <!-- Bootstrap Core JavaScript -->
   

    <!-- Morris Charts JavaScript -->
    <!--script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"-->
    
</body>

</html>
