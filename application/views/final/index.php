<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--captura de ubiacion -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='custom.css' rel='stylesheet' type='text/css'>

    <!-- Fin header captura-- >

    <title>Sistema de Monitoreo de Playas</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                        <a href="fincampania.html">Inicio Seccion</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('http://static.diario.latercera.com/201110/1380545.jpg');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://2.bp.blogspot.com/-q3j6t-J3Z2o/Us-FidrCs8I/AAAAAAAAB6g/qCBUoApjjF0/s1600/Playa+cau+cau+1.jpg');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://chltvl.com/bfi_thumb/vina-del-mar_playa_shutterstock-DST154-mpo66gox42oxtcmbq464m03gty1jxqwp7u55cdfxrk.jpg');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>





    <!-- Page Content -->
    <div class="container">



        <!-- google maps -->

         <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                </h1>
            </div>
            <div class="col-lg-12">
                <div class="alert alert-info alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <i class="fa fa-info-circle"></i> La Mejor playa en tu zona es: <a data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#modalplaya"> <strong>Reñaca</strong></a>.
                        <div class="modal fade" id="modalplaya" role="dialog">
                            <div class="modal-dialog">
                            
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">PLAYA XXXX</h4>
                                </div>
                                <div class="modal-body">
                                  <p>Playa: nombre de la playa</p>
                                  <p>Fecha: <script> 

                        var mydate=new Date(); 
                        var year=mydate.getYear(); 
                        if (year < 1000) 
                        year+=1900; 
                        var day=mydate.getDay(); 
                        var month=mydate.getMonth()+1; 
                        if (month<10) 
                        month="0"+month; 
                        var daym=mydate.getDate(); 
                        if (daym<10) 
                        daym="0"+daym; 
                        document.write("<small><font color='000000' face='Arial'><b>"+daym+"/"+month+"/"+year+"</b></font></small>") 

                        </script> </p>
                                  <p>Tiempo: Soleado</p>
                                  <p>Marea: Alta</p>
                                  <p>Oleaje: </p>
                                  <p>  Altura: 1.2[mts]</p>
                                  <p>  Periodo: 11[s]</p>
                                  <p>  Direccion: Sur Oeste</p>
                                  <p>Muestra la última imagen tomada de la playa</p>    
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                </div>
                              </div>
                              
                            </div>
                          </div>

                </div>

            </div>

            <div class="col-md-8">
            
                <!-- Embedded Google Map -->            
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2741.510082911914!2d-71.54566740489966!3d-32.97103878598452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1ses-419!2scl!4v1480570852093" width="700" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>

            </div>
        

           <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Reñaca, Viña del Mar</h4>
                    </div>
                    <div class="panel-body">
                        <p> espaldas de la avda. Borgoño se encuentra una de las playas más visitadas y reconocidas por los turistas y viñamarinos, a la vista de una gran gaviota diseñada por cientos de flores, Playa Reñaca acoge en su gran magnitud a jóvenes que la prefieren por sus varios kilómetros de extensión, separados en cinco sectores para el descanso y diversión.</p>
                        <a href="vistaplaya.html" class="btn btn-default">Ver informacion tecnica de playa.</a>
                    </div>
                </div>
            </div>

        <!-- google maps -->

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Playas de la zona.
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Reñaca, Viña del Mar</h4>
                    </div>
                    <div class="panel-body">
                        <p> espaldas de la avda. Borgoño se encuentra una de las playas más visitadas y reconocidas por los turistas y viñamarinos, a la vista de una gran gaviota diseñada por cientos de flores, Playa Reñaca acoge en su gran magnitud a jóvenes que la prefieren por sus varios kilómetros de extensión, separados en cinco sectores para el descanso y diversión.</p>
                        <a href="vistaplaya.html" class="btn btn-default">Ver informacion tecnica de playa.</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Reñaca, Viña del Mar</h4>
                    </div>
                    <div class="panel-body">
                        <p> espaldas de la avda. Borgoño se encuentra una de las playas más visitadas y reconocidas por los turistas y viñamarinos, a la vista de una gran gaviota diseñada por cientos de flores, Playa Reñaca acoge en su gran magnitud a jóvenes que la prefieren por sus varios kilómetros de extensión, separados en cinco sectores para el descanso y diversión.</p>
                        <a href="vistaplaya.html" class="btn btn-default">Ver informacion tecnica de playa.</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Reñaca, Viña del Mar</h4>
                    </div>
                    <div class="panel-body">
                        <p> espaldas de la avda. Borgoño se encuentra una de las playas más visitadas y reconocidas por los turistas y viñamarinos, a la vista de una gran gaviota diseñada por cientos de flores, Playa Reñaca acoge en su gran magnitud a jóvenes que la prefieren por sus varios kilómetros de extensión, separados en cinco sectores para el descanso y diversión.</p>
                        <a href="vistaplaya.html" class="btn btn-default">Ver informacion tecnica de playa.</a>
                    </div>
                </div>
            </div>
            <a href="vistaplaya.html" class="btn btn-default">Cargar más playas.</a>
        </div>
        <!-- /.row -->



        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Galeria de Imagenes.</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://www.ucvmedios.cl/datos/radio/fotos/2015/08/foto-69.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://www.viviendochile.cl/imagenes/galeria/centro/litoral_central/quintay/04.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://www.viviendochile.cl/imagenes/galeria/centro/litoral_central/valparaiso_historia/cerros/02.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://www.viviendochile.cl/imagenes/galeria/centro/litoral_central/quintay/08.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://www.ucvmedios.cl/datos/radio/fotos/2016/06/foto-16978.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://www.viviendochile.cl/imagenes/galeria/centro/litoral_central/valparaiso_historia/cerros/10.jpg" alt="">
                </a>
            </div>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Equipo de trabajo. </h2>
            </div>
            <div class="col-md-6">
                <p>Mellissa es la unica que sabe sobre el proyecto el resto somos relleno en la foto.</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="./img/gente.png" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
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
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>



    <!--- google maps -->

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
        <script src="custom.js"></script>

     <!--- google maps -->


    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
