<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Información Playa</title>

    <!-- Bootstrap Core CSS -->
    <link href=<?php echo base_url("plantilla/css/bootstrap.min.css"); ?> rel="stylesheet">

    <!-- Custom CSS -->
    <link href=<?php echo base_url("plantilla/css/sb-admin.css"); ?> rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href=<?php echo base_url("plantilla/css/plugins/morris.css"); ?> rel="stylesheet">

    <!-- Custom Fonts -->
    <link href=<?php echo base_url("plantilla/font-awesome/css/font-awesome.min.css"); ?> rel="stylesheet" type="text/css">

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
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Administracion de playas</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>JP</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Administrador</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>User 1</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Leer todos los mensajes </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alerta <span class="label label-default">Asignar alerta</span></a>
                        </li>
                        <li>
                            <a href="#">Alerta <span class="label label-primary">Asignar alerta</span></a>
                        </li>
                        <li>
                            <a href="#">Alerta <span class="label label-success">Asignar alerta</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">Ver todo</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> JP <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Mensajes</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Ajustes</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Cerrar sesión</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i>Inicio</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
 
                <!-- /.row -->

                <!-- Flot Charts -->
                <div class="row">
                    <div class="col-lg-12">
                    <?php
                    if(is_array($mostrarPlaya) && !empty($mostrarPlaya))
                    {
                    foreach ($mostrarPlaya as $fila)
                    {
                    ?>
                    <h2 class="page-header"><?php echo $fila->PLA_NOMBRE;  ?></h2>
                    <?php
                    }
                }
            ?>

                        <?php
                    if(is_array($mostrarPlaya) && !empty($mostrarPlaya))
                    {
                    foreach ($mostrarPlaya as $fila)
                    {
                    ?>
                    <p class="lead"><?php echo $fila->PLA_DESCRIPCION_GENERAL;  ?>.</p>
                    <?php
            }
        }
        ?>



                    </div>
                </div>
                <!-- /.row -->

                <!-- /.row -->

                <!-- /.row -->

                <!-- /.row -->

                <!-- Morris Charts -->

                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="figure" id="figure_4_8">
                            <img src=<?php echo base_url("plantilla/./img/perfiles.png"); ?> alt=" ">

                            <p class="caption"><strong>Figura 4.8</strong> Imágenes decoradas en Bootstrap 3</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                    <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Perfiles</h4>
                    </div>
                    <div class="panel-body">

                        <?php   
                        foreach ($contarPerfil as $fila2)
                        {
                        ?>
                        <p> En la primera campaña se definieron un total de <?php echo $fila2->contador;?> perfiles a partir de observación en el terreno, buscando asegurar que la orientación fuera relativamente perpendicular a la costa.</p>
                        <?php
                    }
                ?>


                    </div>
                </div>
            </div>
            </div>



            <div class="row">
                    <div class="col-lg-8">
                        <div class="figure" id="figure_4_8">
                            <img src=<?php echo base_url("plantilla/./img/perfiles.png"); ?> alt=" " >

                            <p class="caption"><strong>Figura 4.8</strong> Imágenes decoradas en Bootstrap 3</p>
                        </div>
                    </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Puntos de observacion</h4>
                    </div>
                    <div class="panel-body">
                        <p>Para asegurar que en cada medición se siga exactamente el mismo perfil, se definieron como estación de origen (E0) los bordes superiores del muro de la obra de mejoramiento del borde costero, mientras que para la  orientación, se definieron en cada caso puntos de referencia anterior y posterior</p>
                    </div>
                </div>
            </div>
            </div>


                <!-- /.row -->

                <!-- /.row -->
                
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Perfiles</h2>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Perfil</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Perfil 1</td>
                                        <td><a href="consulta.html" class="btn btn-primary" role="button">Información</a></td>
                                    </tr>
                                    <tr>
                                        <td>Perfil 2</td>
                                        <td><a href="consulta.html" class="btn btn-primary" role="button">Información</a></td>
                                    </tr>
                                    <tr>
                                        <td>...</td>
                                        <td>...</td>
                                    </tr>
                                    <tr>
                                        <td>Perfil n</td>
                                        <td><a href="consulta.html" class="btn btn-primary" role="button">Información</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="plantilla/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="plantilla/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="plantilla/js/plugins/morris/raphael.min.js"></script>
    <script src="plantilla/js/plugins/morris/morris.min.js"></script>
    <script src="plantilla/js/plugins/morris/morris-data.js"></script>

    <!-- Flot Charts JavaScript -->
    <!--[if lte IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
    <script src="plantilla/js/plugins/flot/jquery.flot.js"></script>
    <script src="plantilla/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="plantilla/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="plantilla/js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="plantilla/js/plugins/flot/flot-data.js"></script>

</body>