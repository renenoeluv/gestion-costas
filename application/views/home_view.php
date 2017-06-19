<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio</title>
	<!--link the bootstrap css file-->
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url(); ?>index.php/home">INICIO</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<?php if ($this->session->userdata('login')){ ?>
				<li><p class="navbar-text">Hola <?php echo $this->session->userdata('uname'); ?></p></li>
				<li><a href="<?php echo base_url(); ?>index.php/home/logout">Salir</a></li>
				<?php } else { ?>
				<li><a href="<?php echo base_url(); ?>index.php/login">Ingresar</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/signup">Registrarse</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>
<!-- CONTENIDO PAGINA-->
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
                <script src="http://widget.windguru.cz/js/wg_widget.php" type="text/javascript"></script>
                <script language="JavaScript" type="text/javascript">
                //<![CDATA[
                WgWidget({
                s: 120881, odh:0, doh:24, wj:'knots', tj:'c', waj:'m', fhours:72, lng:'es',
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
                'wg_target_div_120881_14539444'
                );
                //]]>
                </script>
                <div id="wg_target_div_120881_14539444"></div>
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

<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>
