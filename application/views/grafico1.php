<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Graficos</title>
  
  
    <link rel='stylesheet prefetch' href='../assets/vendor/bootstrap/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='../assets/vendor/morrisjs/morris.css'>
    <link rel="stylesheet" href="css/style.css">

    

</head>

<body>
  <head>
<meta charset=utf-8 />
<title>Graficos playa</title>

<script>
    $(document).ready(function(){
        $.get("<?php echo base_url('Graficas/ajax') ?>", "", function(data)
        {
          console.log(data)
        });
    });

</script>

</head>
<body>
  <h3 class="text-primary text-center">
    Graficos playa
  </h3>
  <div class"row">
  
    <div class="col-sm-6 text-center">
      <label class="label label-success">Grafico de Mareas</label>
      <div id="area-chart" ></div>
    </div>
   
  </div>
</body>

<script src='..assets/vendor/bootstrap/cssbootstrap.min.css'></script>
<script src='../assets/vendor/jquery/jquery.min.js'></script>
<script src='../assets/vendor/raphael/raphael.min.js'></script>
<script src='../assets/vendor/morrisjs/morris.min.js'></script>
<script src="../assets/js/graficar.js"></script>

</body>
</html>
