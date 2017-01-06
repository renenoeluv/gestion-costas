<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lista de Países</title>

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

<script src="http://widget.windguru.cz/js/wg_widget.php" type="text/javascript"></script>
<script language="JavaScript" type="text/javascript">
//<![CDATA[
WgWidget({
s: 167817, odh:0, doh:24, wj:'knots', tj:'c', waj:'m', fhours:72, lng:'es',
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
'wg_target_div_167817_71187979'
);
//]]>
</script>
<div id="wg_target_div_167817_71187979"></div>
</body>

</html>