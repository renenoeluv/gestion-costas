
        $(document).ready(function(){
           var reg='';
           var pais='';
           var datito=[pais, reg];
            var elem=$('#filtrarButon');
            elem.hide();
            $("#paises").change(function(){
                pais=$(this).val();
                var str1="Seleccionar Pais";
                if(str1.localeCompare(pais)==0){
                    console.log("entre al primer");
                    elem.hide('slow');
                    $("#regiones").html('');
                    $("#regiones").append('<option>Seleccionar Region</option>');
                }else{
                $.post("index.php/playas_campanhas/regiones",{ps:pais},function(data){
                    $("#regiones").html('');
                    $("#regiones").append('<option>Seleccionar Region</option>');
                    $.each(data,function (i,val){
                        $("#regiones").append('<option>'+val.REG_NOMBRE+'</option>')
                    });
                });}
            });

            $("#regiones").change(function(){
                elem.show('slow');
                var str="Seleccionar Region";
                reg=$(this).val();
                datito=[pais, reg];
                console.log(reg);               
                if(str.localeCompare(reg)==0){
                    elem.hide('slow');
                }
                
                
            });
            $("#filtrarButon").click(function(){   
 
                
                         echo (<?php $this->load('controladorpina'); ?>);
                   
             });
                 });
             
  
        });

